@extends('layouts.admin')

@section('title', 'Manage Inquiries // OXID ADMIN')
@section('header_title', 'INCOMING TRANSMISSIONS')

@section('content')
    <div class="space-y-6">
        <!-- Filter Tabs & Stats -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.inquiries.index') }}" 
                   class="px-4 py-2 rounded-full text-xs font-mono transition-all {{ !request('status') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80' }}">
                    All Messages ({{ $totalCount }})
                </a>
                <a href="{{ route('admin.inquiries.index', ['status' => 'unread']) }}" 
                   class="px-4 py-2 rounded-full text-xs font-mono transition-all {{ request('status') === 'unread' ? 'bg-rose-600 text-white font-semibold shadow-sm' : 'text-rose-600 dark:text-rose-400 hover:text-rose-800 dark:hover:text-white bg-rose-50 dark:bg-rose-950/30 border border-rose-200 dark:border-rose-800' }}">
                    Unread ({{ $unreadCount }})
                </a>
                <a href="{{ route('admin.inquiries.index', ['status' => 'read']) }}" 
                   class="px-4 py-2 rounded-full text-xs font-mono transition-all {{ request('status') === 'read' ? 'bg-slate-800 text-white dark:bg-slate-200 dark:text-slate-950 font-semibold shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80' }}">
                    Archived ({{ $readCount }})
                </a>
            </div>

            <div class="text-xs font-mono text-slate-500 dark:text-slate-400">
                <span>Total Incoming Leads: <strong class="text-slate-900 dark:text-white">{{ $totalCount }}</strong></span>
            </div>
        </div>

        <!-- Inquiries Table Card -->
        <div class="rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="border-b border-slate-100 dark:border-slate-800 bg-slate-50/80 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 font-mono uppercase text-[11px]">
                            <th class="py-4 px-5">State</th>
                            <th class="py-4 px-5">Sender Identity</th>
                            <th class="py-4 px-5">Transmission Subject &amp; Content</th>
                            <th class="py-4 px-5">Logged Time</th>
                            <th class="py-4 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        @forelse($inquiries as $inquiry)
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/40 transition-colors {{ !$inquiry->is_read ? 'bg-sky-50/30 dark:bg-sky-950/10' : '' }}">
                                <!-- State -->
                                <td class="py-4 px-5 w-24 whitespace-nowrap">
                                    @if(!$inquiry->is_read)
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-rose-50 dark:bg-rose-950/40 border border-rose-200 dark:border-rose-800 text-rose-600 dark:text-rose-400 font-mono text-[10px]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span>
                                            NEW
                                        </span>
                                    @else
                                        <span class="text-slate-500 font-mono text-[10px] px-2.5 py-1 rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700">READ</span>
                                    @endif
                                </td>

                                <!-- Sender -->
                                <td class="py-4 px-5 whitespace-nowrap">
                                    <span class="font-semibold text-slate-900 dark:text-white block text-sm">{{ $inquiry->name }}</span>
                                    <a href="mailto:{{ $inquiry->email }}" class="text-slate-500 dark:text-slate-400 font-mono text-[11px] hover:underline block mt-0.5">
                                        {{ $inquiry->email }}
                                    </a>
                                </td>

                                <!-- Message Details -->
                                <td class="py-4 px-5 max-w-lg">
                                    <div class="font-semibold text-slate-900 dark:text-white text-xs mb-1">
                                        {{ $inquiry->subject ?: 'General Studio Collaboration Inquiry' }}
                                    </div>
                                    <div class="p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/60 dark:border-slate-700/60 text-slate-700 dark:text-slate-300 text-xs whitespace-pre-line leading-relaxed font-sans max-h-36 overflow-y-auto">
                                        {{ $inquiry->message }}
                                    </div>
                                </td>

                                <!-- Timestamp -->
                                <td class="py-4 px-5 whitespace-nowrap font-mono text-slate-500 dark:text-slate-400 text-[11px]">
                                    {{ $inquiry->created_at->format('Y-m-d H:i') }}
                                    <span class="block text-[10px] text-slate-400 mt-0.5">{{ $inquiry->created_at->diffForHumans() }}</span>
                                </td>

                                <!-- Actions -->
                                <td class="py-4 px-5 text-right space-x-2 whitespace-nowrap">
                                    <form action="{{ route('admin.inquiries.toggle-read', $inquiry) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="px-3 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 text-[11px] font-mono transition-colors cursor-pointer shadow-2xs">
                                            {{ $inquiry->is_read ? 'Mark Unread' : 'Mark Read' }}
                                        </button>
                                    </form>

                                    <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="inline" data-sender="{{ $inquiry->name }}" onsubmit="return confirm('Purge transmission from: ' + this.getAttribute('data-sender') + '?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 rounded-full bg-rose-50 dark:bg-rose-950/40 hover:bg-rose-100 dark:hover:bg-rose-900/40 text-rose-600 dark:text-rose-400 text-[11px] font-mono transition-colors cursor-pointer shadow-2xs">
                                            Purge
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-12 text-center text-slate-400 font-mono text-xs">
                                    No inquiry transmissions logged in system.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($inquiries->hasPages())
                <div class="p-4 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                    {{ $inquiries->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
