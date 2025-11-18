<nav class="nav-main bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 fixed w-full z-50 transition-all duration-300"
    id="main-nav">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-3">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div
                    class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg overflow-hidden group-hover:scale-105 transition-transform duration-300 relative">
                    <img src="{{ Vite::asset('resources/assets/icons/icon.png') }}" alt="MR. Aananda"
                        class="w-full h-full object-cover"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <span class="text-white font-bold text-lg absolute inset-0 flex items-center justify-center"
                        style="display: none;">MR</span>
                </div>
                <div class="logo-text-container">
                    <span
                        class="logo-text font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent group-hover:from-blue-500 group-hover:to-purple-500 transition-all duration-300">
                        Mahmudur Rahman Ananda
                    </span>
                    <p
                        class="logo-subtext text-gray-500 -mt-1 group-hover:text-gray-600 transition-colors duration-300">
                        Full Stack Web Developer
                    </p>
                </div>
            </a>

            <!-- Desktop Menu (1024px+) -->
            <div class="hidden xl:flex items-center space-x-2">
                <x-frontend.nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    <i class="fas fa-home mr-2 text-sm"></i>Home
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    <i class="fas fa-user mr-2 text-sm"></i>About
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('skills') }}" :active="request()->routeIs('skills')">
                    <i class="fas fa-code mr-2 text-sm"></i>Skills
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')">
                    <i class="fas fa-briefcase mr-2 text-sm"></i>Projects
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('blogs') }}" :active="request()->routeIs('blogs')">
                    <i class="fas fa-blog mr-2 text-sm"></i>Blogs
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    <i class="fas fa-envelope mr-2 text-sm"></i>Contact
                </x-frontend.nav-link>
            </div>

            <!-- Tablet Menu (768px - 1023px) -->
            <div class="hidden md:flex xl:hidden items-center space-x-1">
                <x-frontend.nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="text-xs px-3 py-2">
                    <i class="fas fa-home mr-1"></i>Home
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('about') }}" :active="request()->routeIs('about')" class="text-xs px-3 py-2">
                    <i class="fas fa-user mr-1"></i>About
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('skills') }}" :active="request()->routeIs('skills')" class="text-xs px-3 py-2">
                    <i class="fas fa-code mr-1"></i>Skills
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')" class="text-xs px-3 py-2">
                    <i class="fas fa-briefcase mr-1"></i>Projects
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('blogs') }}" :active="request()->routeIs('blogs')" class="text-xs px-3 py-2">
                    <i class="fas fa-blog mr-1"></i>Blogs
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')" class="text-xs px-3 py-2">
                    <i class="fas fa-envelope mr-1"></i>Contact
                </x-frontend.nav-link>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-btn"
                    class="menu-button p-3 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors duration-200 min-h-[44px] min-w-[44px] flex items-center justify-center">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="mobile-menu hidden md:hidden bg-white/95 backdrop-blur-md border-t border-gray-100 shadow-lg">
        <div class="px-4 py-3 space-y-1">
            <x-frontend.mobile-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="mobile-nav-item min-h-[50px]">
                <i class="fas fa-home mr-3 text-sm"></i>Home
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')" class="mobile-nav-item min-h-[50px]">
                <i class="fas fa-user mr-3 text-sm"></i>About
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('skills') }}" :active="request()->routeIs('skills')" class="mobile-nav-item min-h-[50px]">
                <i class="fas fa-code mr-3 text-sm"></i>Skills
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')" class="mobile-nav-item min-h-[50px]">
                <i class="fas fa-briefcase mr-3 text-sm"></i>Projects
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('blogs') }}" :active="request()->routeIs('blogs')" class="mobile-nav-item min-h-[50px]">
                <i class="fas fa-blog mr-3 text-sm"></i>Blogs
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')" class="mobile-nav-item min-h-[50px]">
                <i class="fas fa-envelope mr-3 text-sm"></i>Contact
            </x-frontend.mobile-nav-link>
        </div>
    </div>
</nav>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const nav = document.getElementById('main-nav');

            // Mobile menu toggle
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    // Toggle icon
                    const icon = this.querySelector('i');
                    if (icon.classList.contains('fa-bars')) {
                        icon.classList.replace('fa-bars', 'fa-times');
                    } else {
                        icon.classList.replace('fa-times', 'fa-bars');
                    }
                });
            }

            // Navbar scroll effect
            let lastScrollY = window.scrollY;
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    nav.classList.add('shadow-lg', 'bg-white/98');
                    nav.classList.remove('shadow-sm', 'bg-white/95');
                } else {
                    nav.classList.remove('shadow-lg', 'bg-white/98');
                    nav.classList.add('shadow-sm', 'bg-white/95');
                }

                lastScrollY = window.scrollY;
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideNav = nav.contains(event.target);
                if (!isClickInsideNav && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    const icon = mobileMenuButton.querySelector('i');
                    if (icon.classList.contains('fa-times')) {
                        icon.classList.replace('fa-times', 'fa-bars');
                    }
                }
            });
        });
    </script>
@endpush
