<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

class DatabaseBackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup {--destination= : Custom destination directory}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Safely create a timestamped database backup outside the web root';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $backupDir = $this->option('destination') ?: storage_path('backups');

        if (!File::isDirectory($backupDir)) {
            File::makeDirectory($backupDir, 0750, true);
        }

        // Ensure security protection inside backups directory
        $htaccess = $backupDir . '/.htaccess';
        if (!File::exists($htaccess)) {
            File::put($htaccess, "Deny from all\n");
        }

        $connection = config('database.default');
        $timestamp = date('Y-m-d_His');

        $this->info("Initiating database backup for connection [{$connection}]...");

        if ($connection === 'sqlite') {
            $dbPath = config('database.connections.sqlite.database');
            if ($dbPath === ':memory:') {
                $this->warn("SQLite is using in-memory database. Backup skipped.");
                return Command::SUCCESS;
            }

            if (!File::exists($dbPath)) {
                $this->error("SQLite database file not found at: {$dbPath}");
                return Command::FAILURE;
            }

            $targetFile = "{$backupDir}/backup-{$timestamp}.sqlite";
            File::copy($dbPath, $targetFile);

            $size = File::size($targetFile);
            $this->info("Backup created successfully: {$targetFile} ({$size} bytes)");
            return Command::SUCCESS;
        }

        if ($connection === 'mysql') {
            $dbConfig = config('database.connections.mysql');
            $targetFile = "{$backupDir}/backup-{$timestamp}.sql";

            $host = $dbConfig['host'] ?? '127.0.0.1';
            $port = $dbConfig['port'] ?? '3306';
            $database = $dbConfig['database'];
            $username = $dbConfig['username'];
            $password = $dbConfig['password'];

            $command = [
                'mysqldump',
                "--host={$host}",
                "--port={$port}",
                "--user={$username}",
                "--password={$password}",
                '--single-transaction',
                '--quick',
                '--skip-lock-tables',
                $database,
            ];

            $process = new Process($command);
            $process->run();

            if (!$process->isSuccessful()) {
                $this->error("mysqldump failed: " . $process->getErrorOutput());
                return Command::FAILURE;
            }

            File::put($targetFile, $process->getOutput());
            $size = File::size($targetFile);

            if ($size <= 0) {
                $this->error("Backup file generated with 0 bytes. Aborting.");
                return Command::FAILURE;
            }

            $this->info("MySQL backup created successfully: {$targetFile} ({$size} bytes)");
            return Command::SUCCESS;
        }

        $this->error("Unsupported database connection: {$connection}");
        return Command::FAILURE;
    }
}
