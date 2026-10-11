<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(append: [
            \App\Http\Middleware\SecurityHeaders::class,
        ]);

        $middleware->alias([
            'admin' => \App\Http\Middleware\EnsureAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();

// Auto-detect public document root on shared hosting / cPanel environments
$customPublic = env('LARAVEL_PUBLIC_PATH');
if ($customPublic && is_dir($customPublic)) {
    $app->usePublicPath(realpath($customPublic));
} elseif (is_dir(dirname(__DIR__) . '/../public_html')) {
    $app->usePublicPath(realpath(dirname(__DIR__) . '/../public_html'));
}

return $app;
