{{-- Premium Navigation Component --}}
<nav id="main-nav"
    class="fixed w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-xl border-b border-white/20 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-18">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group flex-shrink-0 min-w-0">
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl overflow-hidden shadow-md flex-shrink-0
                            bg-gradient-to-br from-brand-500 to-accent-500
                            group-hover:shadow-glow-brand transition-all duration-300 relative">
                    <img src="{{ Vite::asset('resources/assets/icons/icon.png') }}" alt="MR. Aananda"
                        class="w-full h-full object-cover absolute inset-0"
                        onerror="this.style.display='none'; document.getElementById('nav-logo-fallback').style.display='flex';">
                    <span id="nav-logo-fallback" class="hidden w-full h-full items-center justify-center">
                        <span class="text-white font-bold text-sm">MA</span>
                    </span>
                </div>
                <div class="min-w-0">
                    <span class="block font-bold text-sm gradient-text leading-tight truncate max-w-[150px] sm:max-w-[200px] lg:max-w-none">
                        Mahmudur Rahman Ananda
                    </span>
                    <span class="hidden sm:block text-xs text-slate-500 leading-tight font-medium">Full Stack Developer</span>
                </div>
            </a>

            {{-- Desktop Nav (≥1024px) --}}
            <div class="hidden lg:flex items-center gap-1">
                <x-frontend.nav-link href="{{ route('home') }}"    :active="request()->routeIs('home')">
                    <i class="fas fa-house text-xs mr-1.5 opacity-75"></i>Home
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('about') }}"   :active="request()->routeIs('about')">
                    <i class="fas fa-user text-xs mr-1.5 opacity-75"></i>About
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('skills') }}"  :active="request()->routeIs('skills')">
                    <i class="fas fa-code text-xs mr-1.5 opacity-75"></i>Skills
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')">
                    <i class="fas fa-briefcase text-xs mr-1.5 opacity-75"></i>Projects
                </x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('blogs') }}"   :active="request()->routeIs('blogs')">
                    <i class="fas fa-pen-nib text-xs mr-1.5 opacity-75"></i>Blogs
                </x-frontend.nav-link>
                @auth
                    <x-frontend.nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="fas fa-chart-line text-xs mr-1.5 opacity-75"></i>Dashboard
                    </x-frontend.nav-link>
                @endauth
                <a href="{{ route('contact') }}"
                   class="ml-2 inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold
                          bg-gradient-to-r from-brand-600 to-accent-600 text-white
                          hover:from-brand-500 hover:to-accent-500 shadow-md hover:shadow-glow-brand
                          transition-all duration-300 transform hover:-translate-y-0.5">
                    <i class="fas fa-envelope text-xs"></i>Contact
                </a>
            </div>

            {{-- Tablet Nav (768px – 1023px) --}}
            <div class="hidden md:flex lg:hidden items-center gap-0.5">
                <x-frontend.nav-link href="{{ route('home') }}"    :active="request()->routeIs('home')"    class="text-xs px-3 py-2">Home</x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('about') }}"   :active="request()->routeIs('about')"   class="text-xs px-3 py-2">About</x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('skills') }}"  :active="request()->routeIs('skills')"  class="text-xs px-3 py-2">Skills</x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')" class="text-xs px-3 py-2">Projects</x-frontend.nav-link>
                <x-frontend.nav-link href="{{ route('blogs') }}"   :active="request()->routeIs('blogs')"   class="text-xs px-3 py-2">Blogs</x-frontend.nav-link>
                @auth
                    <x-frontend.nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-xs px-3 py-2">Dashboard</x-frontend.nav-link>
                @endauth
                <a href="{{ route('contact') }}"
                   class="ml-2 inline-flex items-center gap-1 px-3 py-2 rounded-lg text-xs font-semibold
                          bg-gradient-to-r from-brand-600 to-accent-600 text-white
                          hover:from-brand-500 hover:to-accent-500 shadow-sm transition-all duration-300">
                    Contact
                </a>
            </div>

            {{-- Mobile Hamburger (< 768px) --}}
            <button id="mobile-menu-btn"
                class="md:hidden flex items-center justify-center w-10 h-10 rounded-xl
                       text-slate-600 hover:bg-slate-100 hover:text-brand-600
                       transition-all duration-200 focus:outline-none"
                aria-label="Toggle menu" aria-expanded="false">
                <i id="hamburger-icon" class="fas fa-bars text-lg"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu"
        class="md:hidden hidden border-t border-slate-100 bg-white/95 backdrop-blur-xl">
        <div class="px-4 py-3 space-y-1">
            <x-frontend.mobile-nav-link href="{{ route('home') }}"     :active="request()->routeIs('home')">
                <i class="fas fa-house w-4 mr-3 text-brand-500"></i>Home
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('about') }}"    :active="request()->routeIs('about')">
                <i class="fas fa-user w-4 mr-3 text-brand-500"></i>About
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('skills') }}"   :active="request()->routeIs('skills')">
                <i class="fas fa-code w-4 mr-3 text-brand-500"></i>Skills
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('projects') }}" :active="request()->routeIs('projects')">
                <i class="fas fa-briefcase w-4 mr-3 text-brand-500"></i>Projects
            </x-frontend.mobile-nav-link>
            <x-frontend.mobile-nav-link href="{{ route('blogs') }}"    :active="request()->routeIs('blogs')">
                <i class="fas fa-pen-nib w-4 mr-3 text-brand-500"></i>Blogs
            </x-frontend.mobile-nav-link>
            @auth
                <x-frontend.mobile-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <i class="fas fa-chart-line w-4 mr-3 text-brand-500"></i>Dashboard
                </x-frontend.mobile-nav-link>
            @endauth
            <div class="pt-2 pb-1">
                <a href="{{ route('contact') }}"
                   class="flex items-center justify-center gap-2 w-full px-4 py-3 rounded-xl font-semibold
                          bg-gradient-to-r from-brand-600 to-accent-600 text-white
                          hover:from-brand-500 hover:to-accent-500 transition-all duration-300">
                    <i class="fas fa-envelope"></i>Get In Touch
                </a>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuBtn  = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburger  = document.getElementById('hamburger-icon');
        const nav        = document.getElementById('main-nav');
        let menuOpen = false;

        // Toggle mobile menu
        menuBtn.addEventListener('click', function () {
            menuOpen = !menuOpen;
            mobileMenu.classList.toggle('hidden', !menuOpen);
            hamburger.className = menuOpen ? 'fas fa-times text-lg' : 'fas fa-bars text-lg';
            menuBtn.setAttribute('aria-expanded', menuOpen);
        });

        // Close on outside click
        document.addEventListener('click', function (e) {
            if (menuOpen && !nav.contains(e.target)) {
                menuOpen = false;
                mobileMenu.classList.add('hidden');
                hamburger.className = 'fas fa-bars text-lg';
                menuBtn.setAttribute('aria-expanded', false);
            }
        });

        // Close on nav link click (mobile)
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuOpen = false;
                mobileMenu.classList.add('hidden');
                hamburger.className = 'fas fa-bars text-lg';
            });
        });

        // Scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                nav.classList.add('bg-white/95', 'shadow-md');
                nav.classList.remove('bg-white/80', 'shadow-sm');
            } else {
                nav.classList.remove('bg-white/95', 'shadow-md');
                nav.classList.add('bg-white/80', 'shadow-sm');
            }
        }, { passive: true });
    });
</script>
@endpush
