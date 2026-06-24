{{-- Footer --}}
<footer class="relative text-white overflow-hidden"
        style="background: linear-gradient(135deg, #0a0f1e 0%, #0f172a 50%, #0a0f1e 100%);">

    {{-- Decorative orbs --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute bottom-0 left-1/4 w-64 h-64 bg-brand-600/10 rounded-full blur-3xl"></div>
        <div class="absolute top-0 right-1/4 w-56 h-56 bg-accent-500/8 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:pt-16 pb-8 relative z-10">

        {{-- Main Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 mb-10 sm:mb-12">

            {{-- Brand --}}
            <div class="sm:col-span-2 lg:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-11 h-11 rounded-xl overflow-hidden bg-gradient-to-br from-brand-500 to-accent-500 flex-shrink-0 relative">
                        <img src="{{ Vite::asset('resources/assets/icons/icon.png') }}" alt="MR. Aananda"
                            class="w-full h-full object-cover absolute inset-0"
                            onerror="this.style.display='none'; document.getElementById('footer-logo-fallback').style.display='flex';">
                        <span id="footer-logo-fallback" class="hidden w-full h-full items-center justify-center">
                            <span class="text-white font-bold text-sm">MA</span>
                        </span>
                    </div>
                    <div>
                        <span class="block font-bold text-lg gradient-text leading-tight">Mahmudur Rahman Ananda</span>
                        <span class="text-slate-400 text-xs font-medium">Full Stack Web Developer</span>
                    </div>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed max-w-sm mb-5">
                    Transforming ideas into exceptional digital experiences. Specializing in modern web technologies,
                    clean architecture, and user-centric solutions.
                </p>

                {{-- Social icons --}}
                <div class="flex items-center gap-2.5">
                    <a href="https://github.com/Mr-Aananda" target="_blank"
                       class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center
                              text-slate-400 hover:bg-slate-700 hover:text-white hover:border-slate-600
                              transition-all duration-300 hover:-translate-y-0.5"
                       title="GitHub">
                        <i class="fab fa-github text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mr-aananda/" target="_blank"
                       class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center
                              text-slate-400 hover:bg-blue-600 hover:text-white hover:border-blue-600
                              transition-all duration-300 hover:-translate-y-0.5"
                       title="LinkedIn">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </a>
                    <a href="https://wa.me/8801971072007" target="_blank"
                       class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center
                              text-slate-400 hover:bg-green-500 hover:text-white hover:border-green-500
                              transition-all duration-300 hover:-translate-y-0.5"
                       title="WhatsApp">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Quick Links</h4>
                <ul class="space-y-2.5">
                    @foreach([['home', 'Home'], ['about', 'About'], ['skills', 'Skills'], ['projects', 'Projects'], ['blogs', 'Blogs'], ['contact', 'Contact']] as [$route, $label])
                        <li>
                            <a href="{{ route($route) }}"
                               class="text-slate-400 hover:text-brand-400 text-sm transition-colors duration-200
                                      flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-[10px] text-brand-500/50 group-hover:text-brand-400 transition-colors"></i>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Get In Touch --}}
            <div>
                <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Get In Touch</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="mailto:rmananda007@gmail.com"
                           class="text-slate-400 hover:text-brand-400 text-sm transition-colors duration-200 flex items-start gap-2">
                            <i class="fas fa-envelope text-brand-500/70 mt-0.5 text-xs flex-shrink-0"></i>
                            <span class="break-all">rmananda007@gmail.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+8801971072007"
                           class="text-slate-400 hover:text-brand-400 text-sm transition-colors duration-200 flex items-center gap-2">
                            <i class="fas fa-phone text-brand-500/70 text-xs flex-shrink-0"></i>
                            +880 1971 072007
                        </a>
                    </li>
                    <li class="flex items-center gap-2 text-sm text-slate-400">
                        <i class="fas fa-map-marker-alt text-brand-500/70 text-xs flex-shrink-0"></i>
                        Tongi, Gazipur, Dhaka
                    </li>
                    <li class="mt-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            Available for Work
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Divider --}}
        <div class="h-px bg-gradient-to-r from-transparent via-brand-500/30 to-transparent mb-6"></div>

        {{-- Bottom Bar --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-slate-500 text-xs sm:text-sm text-center sm:text-left order-2 sm:order-1">
                            &copy; {{ date('Y') }} <span class="text-white font-semibold">Mahmudur Rahman Ananda</span>. All rights reserved.
                Built with <span class="text-red-400">♥</span> using Laravel & Tailwind CSS.
            </p>
            <div class="flex items-center gap-4 text-slate-500 text-xs order-1 sm:order-2">
                <a href="{{ route('privacy') }}" class="hover:text-brand-400 transition-colors duration-200">Privacy</a>
                <span class="text-slate-700">·</span>
                <a href="{{ route('terms') }}" class="hover:text-brand-400 transition-colors duration-200">Terms</a>
                <span class="text-slate-700">·</span>
                <a href="{{ route('sitemap') }}" class="hover:text-brand-400 transition-colors duration-200">Sitemap</a>
            </div>
        </div>
    </div>

    {{-- Scroll to Top --}}
    <button id="scroll-to-top"
        class="fixed bottom-5 right-5 sm:bottom-7 sm:right-7
               w-10 h-10 sm:w-11 sm:h-11
               bg-gradient-to-br from-brand-500 to-accent-600 text-white
               rounded-xl shadow-lg hover:shadow-glow-brand
               flex items-center justify-center z-50
               opacity-0 invisible scale-90
               transition-all duration-300"
        aria-label="Scroll to top">
        <i class="fas fa-chevron-up text-sm"></i>
    </button>
</footer>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const scrollBtn = document.getElementById('scroll-to-top');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 400) {
                scrollBtn.classList.remove('opacity-0', 'invisible', 'scale-90');
                scrollBtn.classList.add('opacity-100', 'visible', 'scale-100');
            } else {
                scrollBtn.classList.add('opacity-0', 'invisible', 'scale-90');
                scrollBtn.classList.remove('opacity-100', 'visible', 'scale-100');
            }
        }, { passive: true });

        scrollBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
</script>
@endpush
