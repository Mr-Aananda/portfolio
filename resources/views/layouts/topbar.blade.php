@php
    $unreadContactsCount = \App\Models\Contact::where('is_read', false)->count();
@endphp

<!-- Sleek Top Navbar -->
<header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 sticky top-0 z-20 shadow-sm">
    
    <!-- Left Section: Toggle & Quick Links -->
    <div class="flex items-center gap-4">
        
        <!-- Mobile Sidebar Toggle -->
        <button @click="mobileSidebarOpen = !mobileSidebarOpen" 
                class="lg:hidden text-slate-500 hover:text-slate-800 focus:outline-none p-1.5 rounded-lg hover:bg-slate-100 transition-colors duration-200">
            <i class="fas fa-bars text-lg"></i>
        </button>

        <!-- Desktop Sidebar Toggle -->
        <button @click="sidebarOpen = !sidebarOpen" 
                class="hidden lg:block text-slate-500 hover:text-slate-800 focus:outline-none p-1.5 rounded-lg hover:bg-slate-100 transition-colors duration-200">
            <i class="fas fa-bars text-lg"></i>
        </button>

        <!-- Quick Site Visit -->
        <a href="{{ route('home') }}" target="_blank" 
           class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-500 hover:text-indigo-600 bg-slate-50 hover:bg-indigo-50 border border-slate-200 hover:border-indigo-200 px-3 py-1.5 rounded-lg transition-all duration-300">
            <i class="fas fa-globe text-xs"></i> Visit Site <i class="fas fa-external-link-alt text-[9px] opacity-70"></i>
        </a>
    </div>

    <!-- Right Section: Alerts & User Profile Dropdown -->
    <div class="flex items-center gap-4">

        <!-- Inbox Alert Notification Icon -->
        <a href="{{ route('admin.contacts.index') }}" 
           class="relative p-2 rounded-xl text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-all duration-300 group"
           title="View Inbox">
            <i class="fas fa-envelope text-lg group-hover:scale-105 transition-transform duration-200"></i>
            @if($unreadContactsCount > 0)
                <span class="absolute top-1.5 right-1.5 w-4 h-4 rounded-full bg-rose-500 border-2 border-white flex items-center justify-center text-[8px] font-black text-white animate-pulse">
                    {{ $unreadContactsCount }}
                </span>
            @endif
        </a>

        <!-- Vertical Divider -->
        <div class="h-6 w-px bg-slate-200"></div>

        <!-- User Settings Dropdown -->
        <div x-data="{ userMenuOpen: false }" class="relative">
            <button @click="userMenuOpen = !userMenuOpen" 
                    @click.away="userMenuOpen = false"
                    class="flex items-center gap-2.5 p-1 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all duration-300 focus:outline-none">
                
                <!-- Avatar block with online dot -->
                <div class="relative w-8 h-8 rounded-lg overflow-hidden bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center shadow-sm">
                    <span class="text-white font-black text-xs uppercase">{{ substr(Auth::user()->name, 0, 2) }}</span>
                    <span class="absolute bottom-0 right-0 w-2 h-2 bg-emerald-500 border border-white rounded-full"></span>
                </div>

                <div class="hidden sm:block text-left">
                    <span class="block text-xs font-bold text-slate-800 leading-tight">{{ Auth::user()->name }}</span>
                    <span class="block text-[9px] font-semibold text-slate-400 leading-none">Administrator</span>
                </div>
                <i class="fas fa-chevron-down text-[9px] text-slate-400 transition-transform duration-200" :class="{ 'rotate-180': userMenuOpen }"></i>
            </button>

            <!-- Dropdown Menu -->
            <div x-show="userMenuOpen" 
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95 translateY(-10px)"
                 x-transition:enter-end="opacity-100 scale-100 translateY(0)"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100 translateY(0)"
                 x-transition:leave-end="opacity-0 scale-95 translateY(-10px)"
                 class="absolute right-0 mt-2 w-48 bg-white border border-slate-100 rounded-2xl shadow-xl overflow-hidden py-1 z-30"
                 style="display: none;">
                
                <div class="px-4 py-2 border-b border-slate-100 bg-slate-50/50">
                    <span class="block text-xs text-slate-400 font-medium">Logged in as</span>
                    <span class="block text-xs font-bold text-slate-700 truncate mt-0.5">{{ Auth::user()->email }}</span>
                </div>

                <a href="{{ route('profile.edit') }}" 
                   class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-slate-600 hover:bg-indigo-50 hover:text-indigo-600 transition-all duration-200">
                    <i class="fas fa-user-cog text-slate-400 text-sm"></i> Profile Settings
                </a>

                <div class="border-t border-slate-100 my-1"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="w-full flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-rose-600 hover:bg-rose-50 transition-all duration-200 text-left">
                        <i class="fas fa-sign-out-alt text-rose-400 text-sm"></i> Log Out
                    </button>
                </form>
            </div>
        </div>

    </div>
</header>
