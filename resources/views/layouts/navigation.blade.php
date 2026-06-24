<!-- Sleek Sidebar Container -->
<aside :class="{ 'w-64': sidebarOpen, 'w-20': !sidebarOpen, 'translate-x-0': mobileSidebarOpen, '-translate-x-full lg:translate-x-0': !mobileSidebarOpen }"
       class="fixed inset-y-0 left-0 z-30 bg-slate-900 text-slate-300 transition-all duration-300 ease-in-out flex flex-col h-screen shadow-xl border-r border-slate-800">
    
    <!-- Brand Logo / Header -->
    <div class="h-16 flex items-center justify-between px-4 border-b border-slate-800 flex-shrink-0">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 overflow-hidden">
            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center flex-shrink-0 shadow-md shadow-indigo-950/50">
                <span class="text-white font-black text-sm">MA</span>
            </div>
            <span class="font-black text-sm text-white tracking-wider truncate transition-opacity duration-300"
                  :class="{ 'opacity-100': sidebarOpen, 'opacity-0 lg:hidden': !sidebarOpen }">
                AANANDA PANEL
            </span>
        </a>
        <!-- Mobile Close Button -->
        <button @click="mobileSidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white p-1 rounded-lg">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- User Info Info-Box -->
    <div class="p-4 border-b border-slate-800/60 flex items-center gap-3 overflow-hidden flex-shrink-0 bg-slate-950/20">
        <div class="w-9 h-9 rounded-lg bg-slate-800 border border-slate-700 flex items-center justify-center flex-shrink-0 relative">
            <span class="text-indigo-400 font-bold text-xs uppercase">{{ substr(Auth::user()->name, 0, 2) }}</span>
            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 border-2 border-slate-900 rounded-full"></span>
        </div>
        <div class="min-w-0 transition-all duration-300" :class="{ 'opacity-100': sidebarOpen, 'opacity-0 lg:hidden': !sidebarOpen }">
            <span class="block text-xs font-bold text-white truncate leading-tight">{{ Auth::user()->name }}</span>
            <span class="block text-[10px] text-slate-500 font-semibold truncate flex items-center gap-1 mt-0.5">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block"></span> Online
            </span>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 px-3 py-4 space-y-1.5 overflow-y-auto">
        
        <!-- Link 1: Dashboard -->
        <a href="{{ route('dashboard') }}" 
           class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl text-xs font-bold transition-all duration-200 group relative
                  {{ request()->routeIs('dashboard') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-950/30' : 'text-slate-400 hover:bg-slate-800 hover:text-slate-100' }}">
            <i class="fas fa-chart-line text-sm transition-transform duration-200 group-hover:scale-110"></i>
            <span class="truncate transition-opacity duration-300" :class="{ 'opacity-100': sidebarOpen, 'opacity-0 lg:hidden': !sidebarOpen }">
                Dashboard
            </span>
            @if(request()->routeIs('dashboard'))
                <span class="absolute right-0 top-1/2 -translate-y-1/2 w-1.5 h-6 bg-white rounded-l-md"></span>
            @endif
        </a>

        <!-- Link 2: Messages -->
        <a href="{{ route('admin.contacts.index') }}" 
           class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-bold transition-all duration-200 group relative
                  {{ request()->routeIs('admin.contacts.*') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-950/30' : 'text-slate-400 hover:bg-slate-800 hover:text-slate-100' }}">
            <div class="flex items-center gap-3.5 min-w-0">
                <i class="fas fa-envelope text-sm transition-transform duration-200 group-hover:scale-110"></i>
                <span class="truncate transition-opacity duration-300" :class="{ 'opacity-100': sidebarOpen, 'opacity-0 lg:hidden': !sidebarOpen }">
                    Messages
                </span>
            </div>
            
            @php
                $unreadContactsCount = \App\Models\Contact::where('is_read', false)->count();
            @endphp

            @if($unreadContactsCount > 0)
                <span class="px-2 py-0.5 text-[9px] font-black bg-rose-500 text-white rounded-full transition-all duration-300"
                      :class="{ 'scale-100': sidebarOpen, 'scale-0 lg:hidden': !sidebarOpen }">
                    {{ $unreadContactsCount }}
                </span>
            @endif

            @if(request()->routeIs('admin.contacts.*'))
                <span class="absolute right-0 top-1/2 -translate-y-1/2 w-1.5 h-6 bg-white rounded-l-md"></span>
            @endif
        </a>

        <!-- Link 3: Profile Settings -->
        <a href="{{ route('profile.edit') }}" 
           class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl text-xs font-bold transition-all duration-200 group relative
                  {{ request()->routeIs('profile.edit') ? 'bg-indigo-600 text-white shadow-md shadow-indigo-950/30' : 'text-slate-400 hover:bg-slate-800 hover:text-slate-100' }}">
            <i class="fas fa-user-cog text-sm transition-transform duration-200 group-hover:scale-110"></i>
            <span class="truncate transition-opacity duration-300" :class="{ 'opacity-100': sidebarOpen, 'opacity-0 lg:hidden': !sidebarOpen }">
                Profile Settings
            </span>
            @if(request()->routeIs('profile.edit'))
                <span class="absolute right-0 top-1/2 -translate-y-1/2 w-1.5 h-6 bg-white rounded-l-md"></span>
            @endif
        </a>

    </nav>

    <!-- Sidebar Footer -->
    <div class="p-4 border-t border-slate-800 flex flex-col gap-2 flex-shrink-0 bg-slate-950/10">
        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit" 
                    class="w-full flex items-center gap-3.5 px-3 py-2.5 rounded-xl text-xs font-bold text-rose-400 hover:bg-rose-950/30 hover:text-rose-300 transition-all duration-200">
                <i class="fas fa-sign-out-alt text-sm"></i>
                <span class="truncate transition-opacity duration-300" :class="{ 'opacity-100': sidebarOpen, 'opacity-0 lg:hidden': !sidebarOpen }">
                    Log Out
                </span>
            </button>
        </form>
    </div>

</aside>
