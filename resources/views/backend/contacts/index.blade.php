<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4">
            <div>
                <h2 class="font-black text-2xl text-slate-800 tracking-tight leading-none">
                    {{ __('Inquiries Inbox') }}
                </h2>
                <p class="text-slate-400 text-xs mt-1.5 font-medium">Browse, filter, search, and manage your inbox messages</p>
            </div>
            <div class="flex items-center gap-2.5">
                <span class="px-3.5 py-1.5 text-xs font-bold rounded-xl bg-rose-50 border border-rose-100 text-rose-600">
                    {{ $unreadCount }} Unread Messages
                </span>
            </div>
        </div>
    </x-slot>

    <div class="space-y-6">

        {{-- Session Feedback --}}
        @if(session('success'))
            <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 flex items-start gap-3 text-emerald-800 text-sm animate-fade-in-up">
                <i class="fas fa-check-circle mt-0.5 text-base text-emerald-500 flex-shrink-0"></i>
                <div>
                    <span class="font-semibold">Success!</span> {{ session('success') }}
                </div>
            </div>
        @endif

        {{-- Filters & Search Panel --}}
        <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col md:flex-row gap-4 items-center justify-between">
            
            {{-- Tabs --}}
            <div class="flex gap-1.5 flex-wrap w-full md:w-auto">
                <a href="{{ route('admin.contacts.index') }}" 
                   class="px-4 py-2.5 rounded-xl text-xs font-bold border transition-all duration-300
                          {{ !request()->has('status') ? 'bg-slate-900 border-slate-900 text-white shadow-md shadow-slate-950/20' : 'bg-white border-slate-200 text-slate-500 hover:border-slate-300 hover:text-slate-800' }}">
                    All Messages
                </a>
                <a href="{{ route('admin.contacts.index', ['status' => 'unread']) }}" 
                   class="px-4 py-2.5 rounded-xl text-xs font-bold border transition-all duration-300
                          {{ request()->get('status') === 'unread' ? 'bg-slate-900 border-slate-900 text-white shadow-md shadow-slate-950/20' : 'bg-white border-slate-200 text-slate-500 hover:border-slate-300 hover:text-slate-800' }}">
                    Unread
                </a>
                <a href="{{ route('admin.contacts.index', ['status' => 'read']) }}" 
                   class="px-4 py-2.5 rounded-xl text-xs font-bold border transition-all duration-300
                          {{ request()->get('status') === 'read' ? 'bg-slate-900 border-slate-900 text-white shadow-md shadow-slate-950/20' : 'bg-white border-slate-200 text-slate-500 hover:border-slate-300 hover:text-slate-800' }}">
                    Read
                </a>
            </div>

            {{-- Search Bar --}}
            <form action="{{ route('admin.contacts.index') }}" method="GET" class="w-full md:w-80 flex gap-2">
                @if(request()->has('status'))
                    <input type="hidden" name="status" value="{{ request()->get('status') }}">
                @endif
                <div class="relative flex-grow">
                    <input type="text" name="search" value="{{ request()->get('search') }}"
                           placeholder="Search sender, message..."
                           class="w-full pl-9 pr-4 py-2.5 rounded-xl border border-slate-200 text-slate-800 text-xs focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all duration-300 bg-slate-50 placeholder-slate-400">
                    <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                </div>
                @if(request()->has('search') && !empty(request()->search))
                    <a href="{{ route('admin.contacts.index', request()->has('status') ? ['status' => request()->get('status')] : []) }}" 
                       class="px-3 rounded-xl border border-slate-200 text-slate-500 hover:border-rose-200 hover:text-rose-600 flex items-center justify-center bg-white" title="Clear Search">
                        <i class="fas fa-times text-xs"></i>
                    </a>
                @endif
                <button type="submit" class="px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white text-xs font-bold transition-all duration-200">
                    Search
                </button>
            </form>

        </div>

        {{-- Inbox Inquiries Table Card --}}
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
            @if($messages->isEmpty())
                <div class="p-16 text-center">
                    <div class="w-16 h-16 bg-slate-50 text-slate-300 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope-open text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-700 mb-1">No Messages Found</h4>
                    <p class="text-slate-400 text-sm max-w-xs mx-auto">Try modifying your filters or search terms, or check back later.</p>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/70 text-slate-450 text-xs font-bold uppercase tracking-wider border-b border-slate-200/80">
                                <th class="py-4.5 px-6">Sender Details</th>
                                <th class="py-4.5 px-6">Subject & Message Summary</th>
                                <th class="py-4.5 px-6">Date Received</th>
                                <th class="py-4.5 px-6">Status</th>
                                <th class="py-4.5 px-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                            @foreach($messages as $message)
                                <tr class="hover:bg-slate-50/40 transition-colors duration-200 {{ !$message->is_read ? 'font-bold text-slate-900 bg-indigo-50/5' : '' }}">
                                    
                                    <!-- Sender Meta Details -->
                                    <td class="py-4.5 px-6 whitespace-nowrap">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-600 font-bold text-xs uppercase shadow-sm">
                                                {{ substr($message->name, 0, 2) }}
                                            </div>
                                            <div>
                                                <div class="text-slate-800 font-bold">{{ $message->name }}</div>
                                                <a href="mailto:{{ $message->email }}" class="text-xs text-slate-400 hover:text-indigo-600 hover:underline block mt-0.5">{{ $message->email }}</a>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Subject & Message -->
                                    <td class="py-4.5 px-6 max-w-xs truncate">
                                        <div class="truncate text-slate-800 font-semibold">{{ $message->subject }}</div>
                                        <div class="text-xs text-slate-400 truncate mt-0.5">{{ $message->message }}</div>
                                    </td>

                                    <!-- Received Date -->
                                    <td class="py-4.5 px-6 whitespace-nowrap text-slate-500">
                                        {{ $message->created_at->format('M d, Y') }}
                                        <span class="block text-xs text-slate-400 mt-0.5">{{ $message->created_at->format('h:i A') }}</span>
                                    </td>

                                    <!-- Read / Unread Status Badge -->
                                    <td class="py-4.5 px-6 whitespace-nowrap">
                                        @if(!$message->is_read)
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 text-[9px] font-black bg-rose-50 border border-rose-100 text-rose-600 rounded-full">
                                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500 inline-block animate-pulse"></span> Unread
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 text-[9px] font-black bg-slate-100 border border-slate-200 text-slate-500 rounded-full">
                                                <i class="fas fa-check text-[8px]"></i> Read
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Action Tools -->
                                    <td class="py-4.5 px-6 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-2">
                                            
                                            <!-- Mark read/unread toggle -->
                                            <form action="{{ route('admin.contacts.read', $message->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" 
                                                        class="w-8 h-8 rounded-xl border border-slate-200 flex items-center justify-center text-slate-500 hover:border-indigo-200 hover:text-indigo-600 hover:bg-indigo-50/50 transition-all duration-300" 
                                                        title="{{ $message->is_read ? 'Mark as Unread' : 'Mark as Read' }}">
                                                    <i class="fas {{ $message->is_read ? 'fa-envelope-open' : 'fa-envelope' }} text-xs"></i>
                                                </button>
                                            </form>

                                            <!-- View Details -->
                                            <a href="{{ route('admin.contacts.show', $message->id) }}" 
                                               class="w-8 h-8 rounded-xl border border-slate-200 flex items-center justify-center text-slate-500 hover:border-indigo-200 hover:text-indigo-600 hover:bg-indigo-50/50 transition-all duration-300" 
                                               title="View Message">
                                                <i class="fas fa-eye text-xs"></i>
                                            </a>

                                            <!-- Delete Inquiry -->
                                            <form action="{{ route('admin.contacts.destroy', $message->id) }}" method="POST" class="inline" 
                                                  onsubmit="return confirm('Are you sure you want to delete this message? This action cannot be undone.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="w-8 h-8 rounded-xl border border-slate-200 flex items-center justify-center text-slate-400 hover:border-rose-200 hover:text-rose-600 hover:bg-rose-50/50 transition-all duration-300" 
                                                        title="Delete Message">
                                                    <i class="fas fa-trash-alt text-xs"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Pagination Links --}}
                @if($messages->hasPages())
                    <div class="px-6 py-4 border-t border-slate-200/80 bg-slate-50/40">
                        {{ $messages->links() }}
                    </div>
                @endif
            @endif
        </div>

    </div>
</x-app-layout>
