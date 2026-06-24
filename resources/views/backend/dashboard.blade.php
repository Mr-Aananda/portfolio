<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4">
            <div>
                <h2 class="font-black text-2xl text-slate-800 tracking-tight leading-none">
                    {{ __('Dashboard') }}
                </h2>
                <p class="text-slate-400 text-xs mt-1.5 font-medium">Real-time overview of your portfolio metrics and messages</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold rounded-xl bg-indigo-50 border border-indigo-100 text-indigo-700">
                    <i class="fas fa-clock text-[10px]"></i> Current System Time: {{ date('h:i A') }}
                </span>
            </div>
        </div>
    </x-slot>

    <div class="space-y-8">

        {{-- Sleek SaaS KPI Widgets Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            {{-- Card 1: Total Inquiries --}}
            <div class="bg-white rounded-2xl border border-slate-200/80 p-6 flex items-center justify-between shadow-sm hover:shadow-md hover:border-indigo-200 transition-all duration-300 group">
                <div class="space-y-2">
                    <span class="block text-slate-400 text-xs font-bold uppercase tracking-wider">Total Messages</span>
                    <span class="block text-3xl font-black text-slate-800 tracking-tight">{{ $totalMessages }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-500 text-white flex items-center justify-center shadow-lg shadow-indigo-100 group-hover:scale-105 transition-transform duration-300">
                    <i class="fas fa-envelope text-lg"></i>
                </div>
            </div>

            {{-- Card 2: Unread Inquiries --}}
            <div class="bg-white rounded-2xl border border-slate-200/80 p-6 flex items-center justify-between shadow-sm hover:shadow-md hover:border-rose-200 transition-all duration-300 group
                        {{ $unreadMessages > 0 ? 'ring-2 ring-rose-500/10 border-rose-200 bg-rose-50/5' : '' }}">
                <div class="space-y-2">
                    <span class="block text-slate-400 text-xs font-bold uppercase tracking-wider">Unread Inbox</span>
                    <span class="block text-3xl font-black tracking-tight {{ $unreadMessages > 0 ? 'text-rose-600 animate-pulse' : 'text-slate-800' }}">
                        {{ $unreadMessages }}
                    </span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $unreadMessages > 0 ? 'from-rose-500 to-orange-500 shadow-rose-100' : 'from-slate-400 to-slate-500 shadow-slate-100' }} text-white flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform duration-300">
                    <i class="fas fa-mail-bulk text-lg"></i>
                </div>
            </div>

            {{-- Card 3: Site Live Status --}}
            <div class="bg-white rounded-2xl border border-slate-200/80 p-6 flex items-center justify-between shadow-sm hover:shadow-md hover:border-emerald-200 transition-all duration-300 group">
                <div class="space-y-2">
                    <span class="block text-slate-400 text-xs font-bold uppercase tracking-wider">System Status</span>
                    <div class="flex items-center gap-2 mt-1.5">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-bold text-emerald-600 uppercase tracking-wide">Live & Active</span>
                    </div>
                </div>
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 text-white flex items-center justify-center shadow-lg shadow-emerald-100 group-hover:scale-105 transition-transform duration-300">
                    <i class="fas fa-server text-lg"></i>
                </div>
            </div>

            {{-- Card 4: Quick Redirect --}}
            <div class="bg-white rounded-2xl border border-slate-200/80 p-6 flex items-center justify-between shadow-sm hover:shadow-md hover:border-amber-200 transition-all duration-300 group">
                <div class="space-y-1">
                    <span class="block text-slate-400 text-xs font-bold uppercase tracking-wider">Front View</span>
                    <a href="{{ route('home') }}" target="_blank" 
                       class="inline-flex items-center gap-1 text-xs font-black text-slate-700 hover:text-indigo-600 transition-colors duration-200 mt-2">
                        View Portfolio <i class="fas fa-arrow-right text-[9px] opacity-75"></i>
                    </a>
                </div>
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 text-white flex items-center justify-center shadow-lg shadow-amber-100 group-hover:scale-105 transition-transform duration-300">
                    <i class="fas fa-external-link-alt text-lg"></i>
                </div>
            </div>

        </div>

        {{-- Inbox Recent Messages --}}
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                <div>
                    <h3 class="text-lg font-black text-slate-800">Recent Inbox Messages</h3>
                    <p class="text-slate-400 text-xs mt-0.5">Most recent inquiries submitted through your website</p>
                </div>
                <a href="{{ route('admin.contacts.index') }}" 
                   class="inline-flex items-center gap-1.5 text-xs font-bold text-indigo-600 hover:text-indigo-700 bg-indigo-50 hover:bg-indigo-100/80 px-4 py-2 rounded-xl transition-all duration-300">
                    View Inbox <i class="fas fa-arrow-right text-[9px]"></i>
                </a>
            </div>

            @if($latestMessages->isEmpty())
                <div class="p-16 text-center">
                    <div class="w-16 h-16 bg-slate-50 text-slate-300 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope-open text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-700 mb-1">No Messages Yet</h4>
                    <p class="text-slate-400 text-sm max-w-xs mx-auto">When clients submit messages through your contact form, they will appear here.</p>
                </div>
            @else
                <div class="divide-y divide-slate-100">
                    @foreach($latestMessages as $message)
                        <div class="p-6 flex flex-col sm:flex-row justify-between sm:items-center gap-4 hover:bg-slate-50/40 transition-colors duration-200">
                            
                            <!-- Sender Meta Details -->
                            <div class="flex items-start gap-4 min-w-0 flex-1">
                                <!-- Initials avatar -->
                                <div class="w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center flex-shrink-0 text-slate-600 font-black text-xs uppercase shadow-sm">
                                    {{ substr($message->name, 0, 2) }}
                                </div>
                                <div class="min-w-0 flex-1 space-y-1">
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <h4 class="font-bold text-slate-800 text-sm truncate max-w-[200px]">{{ $message->name }}</h4>
                                        <span class="text-xs text-slate-300">&bull;</span>
                                        <span class="text-xs text-slate-400 font-medium truncate">{{ $message->email }}</span>
                                        
                                        @if(!$message->is_read)
                                            <span class="px-2 py-0.5 text-[9px] font-black bg-rose-50 text-rose-600 border border-rose-100 rounded-full flex items-center gap-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500 inline-block animate-pulse"></span> New
                                            </span>
                                        @endif
                                    </div>
                                    <p class="text-slate-700 text-sm font-semibold truncate">{{ $message->subject }}</p>
                                    <p class="text-slate-400 text-xs truncate max-w-2xl">{{ $message->message }}</p>
                                </div>
                            </div>

                            <!-- Actions & Date -->
                            <div class="flex items-center gap-4 w-full sm:w-auto justify-end">
                                <span class="text-slate-400 text-xs font-semibold whitespace-nowrap">{{ $message->created_at->diffForHumans() }}</span>
                                <a href="{{ route('admin.contacts.show', $message->id) }}" 
                                   class="inline-flex items-center justify-center w-9 h-9 rounded-xl border border-slate-200 text-slate-500 hover:border-indigo-200 hover:text-indigo-600 hover:bg-indigo-50/50 transition-all duration-300" 
                                   title="View details">
                                    <i class="fas fa-eye text-xs"></i>
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</x-app-layout>
