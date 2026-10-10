@extends('layouts.admin')

@section('title', 'Manage Inquiries // OXID ADMIN')
@section('header_title', 'INCOMING TRANSMISSIONS')

@section('content')
    <div class="space-y-6">
        <!-- Filter Tabs & Stats -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.inquiries.index') }}" 
                   class="px-3.5 py-1.5 rounded-xl text-xs font-mono transition-all {{ !request('status') ? 'bg-white text-black font-semibold shadow-sm' : 'text-slate-400 hover:text-white bg-white/5' }}">
                    All Messages ({{ $totalCount }})
                </a>
                <a href="{{ route('admin.inquiries.index', ['status' => 'unread']) }}" 
                   class="px-3.5 py-1.5 rounded-xl text-xs font-mono transition-all {{ request('status') === 'unread' ? 'bg-rose-500 text-white font-semibold shadow-sm' : 'text-rose-300 hover:text-white bg-rose-500/10 border border-rose-500/20' }}">
                    Unread ({{ $unreadCount }})
                </a>
                <a href="{{ route('admin.inquiries.index', ['status' => 'read']) }}" 
                   class="px-3.5 py-1.5 rounded-xl text-xs font-mono transition-all {{ request('status') === 'read' ? 'bg-slate-300 text-black font-semibold shadow-sm' : 'text-slate-400 hover:text-white bg-white/5' }}">
                    Archived ({{ $readCount }})
                </a>
            </div>

            <div class="text-xs font-mono text-slate-400">
                <span>Total Incoming Leads: <strong class="text-white">{{ $totalCount }}</strong></span>
            </div>
        </div>

        <!-- Inquiries Table Card -->
        <div class="admin-surface rounded-2xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="border-b border-night-border bg-[#0B1425]/70 text-slate-400 font-mono uppercase text-[11px]">
                            <th class="py-4 px-5">State</th>
                            <th class="py-4 px-5">Sender Identity</th>
                            <th class="py-4 px-5">Transmission Subject &amp; Content</th>
                            <th class="py-4 px-5">Logged Time</th>
                            <th class="py-4 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-night-border/70">
                        @forelse($inquiries as $inquiry)
                            <tr class="hover:bg-white/[0.02] transition-colors {{ !$inquiry->is_read ? 'bg-cyan-950/10' : '' }}">
                                <!-- State -->
                                <td class="py-4 px-5 w-24 whitespace-nowrap">
                                    @if(!$inquiry->is_read)
                                        <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-rose-500/10 border border-rose-500/30 text-rose-300 font-mono text-[10px]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-rose-400 animate-pulse"></span>
                                            NEW
                                        </span>
                                    @else
                                        <span class="text-slate-500 font-mono text-[10px] px-2 py-0.5 rounded bg-white/5">READ</span>
                                    @endif
                                </td>

                                <!-- Sender -->
                                <td class="py-4 px-5 whitespace-nowrap">
                                    <span class="font-semibold text-white block text-sm">{{ $inquiry->name }}</span>
                                    <a href="mailto:{{ $inquiry->email }}" class="text-cyan-400 font-mono text-[11px] hover:underline block mt-0.5">
                                        {{ $inquiry->email }}
                                    </a>
                                </td>

                                <!-- Message Details -->
                                <td class="py-4 px-5 max-w-lg">
                                    <div class="font-semibold text-white text-xs mb-1">
                                        {{ $inquiry->subject ?: 'General Studio Collaboration Inquiry' }}
                                    </div>
                                    <div class="p-3 rounded-xl bg-night-base/80 border border-night-border/60 text-slate-300 text-xs whitespace-pre-line leading-relaxed font-sans max-h-36 overflow-y-auto">
                                        {{ $inquiry->message }}
                                    </div>
                                </td>

                                <!-- Timestamp -->
                                <td class="py-4 px-5 whitespace-nowrap font-mono text-slate-400 text-[11px]">
                                    {{ $inquiry->created_at->format('Y-m-d H:i') }}
                                    <span class="block text-[10px] text-slate-500 mt-0.5">{{ $inquiry->created_at->diffForHumans() }}</span>
                                </td>

                                <!-- Actions -->
                                <td class="py-4 px-5 text-right space-x-2 whitespace-nowrap">
                                    <form action="{{ route('admin.inquiries.toggle-read', $inquiry) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="px-2.5 py-1.5 rounded-lg border border-night-border bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-[11px] font-mono transition-colors cursor-pointer">
                                            {{ $inquiry->is_read ? 'Mark Unread' : 'Mark Read' }}
                                        </button>
                                    </form>

                                    <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="inline" onsubmit="return confirm('Purge transmission from {{ $inquiry->name }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2.5 py-1.5 rounded-lg bg-rose-500/10 hover:bg-rose-500/20 text-rose-300 text-[11px] font-mono transition-colors cursor-pointer">
                                            Purge
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-12 text-center text-slate-500 font-mono text-xs">
                                    No inquiry transmissions logged in system.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($inquiries->hasPages())
                <div class="p-4 border-t border-night-border bg-[#0B1425]/40">
                    {{ $inquiries->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
