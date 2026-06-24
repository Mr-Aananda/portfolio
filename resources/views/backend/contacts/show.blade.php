<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.contacts.index') }}" class="w-8 h-8 rounded-xl border border-slate-200 flex items-center justify-center text-slate-500 hover:border-indigo-200 hover:text-indigo-600 hover:bg-indigo-50/50 transition-all duration-300" title="Back to Inbox">
                <i class="fas fa-arrow-left text-xs"></i>
            </a>
            <div>
                <h2 class="font-black text-2xl text-slate-800 tracking-tight leading-none">
                    {{ __('Message Details') }}
                </h2>
                <p class="text-slate-400 text-xs mt-1.5 font-medium">Read inquiry and perform administrative actions</p>
            </div>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto space-y-6">

        {{-- Message Card Panel --}}
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
            
            {{-- Header with Meta Info & Actions --}}
            <div class="p-6 sm:p-8 border-b border-slate-150 bg-slate-50/50 flex flex-col md:flex-row justify-between items-start gap-4">
                <div class="space-y-1.5">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="text-xs text-indigo-600 font-bold uppercase tracking-wider">Inquiry Details</span>
                        <span class="text-xs text-slate-350 font-medium">&bull;</span>
                        <span class="text-xs text-slate-400 font-semibold">{{ $contact->created_at->format('M d, Y \a\t h:i A') }}</span>
                        <span class="text-xs text-slate-400 font-medium">({{ $contact->created_at->diffForHumans() }})</span>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 leading-tight">{{ $contact->name }}</h3>
                    <a href="mailto:{{ $contact->email }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-indigo-600 hover:text-indigo-700 hover:underline">
                        <i class="fas fa-envelope text-xs"></i> {{ $contact->email }}
                    </a>
                </div>

                <div class="flex gap-2 flex-wrap w-full md:w-auto justify-start md:justify-end">
                    
                    {{-- Reply button --}}
                    <a href="mailto:{{ $contact->email }}?subject=Re: {{ rawurlencode($contact->subject) }}" 
                       class="inline-flex items-center gap-2 px-4 py-2.5 bg-indigo-650 hover:bg-indigo-700 text-white rounded-xl text-xs font-bold shadow-md shadow-indigo-100 transition-all duration-300">
                        <i class="fas fa-reply text-xs"></i> Reply Email
                    </a>

                    {{-- Toggle Status --}}
                    <form action="{{ route('admin.contacts.read', $contact->id) }}" method="POST" class="inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" 
                                class="inline-flex items-center gap-2 px-4 py-2.5 border border-slate-200 text-slate-600 bg-white hover:border-slate-300 rounded-xl text-xs font-bold transition-all duration-300">
                            <i class="fas {{ $contact->is_read ? 'fa-envelope' : 'fa-envelope-open' }} text-xs"></i>
                            Mark as {{ $contact->is_read ? 'Unread' : 'Read' }}
                        </button>
                    </form>

                    {{-- Delete --}}
                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline" 
                          onsubmit="return confirm('Are you sure you want to delete this message? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="inline-flex items-center gap-2 px-4 py-2.5 border border-rose-100 text-rose-600 bg-rose-50/50 hover:bg-rose-50 hover:border-rose-200 rounded-xl text-xs font-bold transition-all duration-300">
                            <i class="fas fa-trash-alt text-xs"></i> Delete
                        </button>
                    </form>
                </div>
            </div>

            {{-- Subject & Message body content --}}
            <div class="p-6 sm:p-8 space-y-6">
                <div>
                    <span class="block text-xs text-slate-400 font-bold uppercase tracking-wider mb-1.5">Subject</span>
                    <h4 class="text-lg font-black text-slate-800 border-l-4 border-indigo-500 pl-3">
                        {{ $contact->subject ?? 'No Subject Specified' }}
                    </h4>
                </div>

                <div class="border-t border-slate-100 pt-6">
                    <span class="block text-xs text-slate-400 font-bold uppercase tracking-wider mb-3">Message Body</span>
                    <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100/80 text-slate-700 text-sm sm:text-base leading-relaxed whitespace-pre-wrap font-sans">
                        {{ $contact->message }}
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
