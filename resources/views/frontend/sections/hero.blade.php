{{-- ============================================================
     Hero Section — Premium Dark Design
     ============================================================ --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16"
         style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 40%, #0c1445 70%, #0f172a 100%);">

    {{-- Animated background orbs --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 sm:w-96 sm:h-96
                    bg-brand-600/20 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 sm:w-80 sm:h-80
                    bg-accent-500/15 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                    w-48 h-48 sm:w-64 sm:h-64 bg-indigo-400/10 rounded-full blur-2xl animate-float"></div>

        {{-- Grid overlay --}}
        <div class="absolute inset-0 opacity-[0.03]"
             style="background-image: linear-gradient(rgba(99,102,241,0.8) 1px, transparent 1px),
                                      linear-gradient(90deg, rgba(99,102,241,0.8) 1px, transparent 1px);
                    background-size: 60px 60px;">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-12 sm:py-16 lg:py-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- ─── Text Content ─── --}}
            <div class="space-y-6 sm:space-y-8 text-center lg:text-left order-2 lg:order-1">

                {{-- Badge --}}
                <div class="flex justify-center lg:justify-start reveal" data-delay="0">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-wider
                                 bg-brand-500/10 border border-brand-500/30 text-brand-300">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        Available for Work
                    </span>
                </div>

                {{-- Name --}}
                <div class="reveal delay-100" data-delay="100">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl font-extrabold text-white leading-[1.1] mb-3">
                        Hi, I'm<br>
                        <span class="gradient-text">MR. Aananda</span>
                    </h1>
                    <h2 class="text-xl sm:text-2xl text-slate-300 font-medium mt-4">
                        <span class="typewriter-text">Full Stack Web Developer</span>
                    </h2>
                </div>

                {{-- Description --}}
                <p class="text-slate-400 text-base sm:text-lg leading-relaxed max-w-xl mx-auto lg:mx-0 reveal delay-200" data-delay="200">
                    I specialize in creating exceptional digital experiences with modern technologies.
                    Passionate about clean code, user-centric design, and scalable solutions that make a real impact.
                </p>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-3 sm:gap-4 py-2 reveal delay-300" data-delay="300">
                    <div class="text-center p-3 sm:p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="text-2xl sm:text-3xl font-extrabold text-white" data-count="30">30+</div>
                        <div class="text-slate-400 text-xs sm:text-sm mt-1 font-medium">Projects Done</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="text-2xl sm:text-3xl font-extrabold text-white" data-count="5">5+</div>
                        <div class="text-slate-400 text-xs sm:text-sm mt-1 font-medium">Years Exp</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300">
                        <div class="text-2xl sm:text-3xl font-extrabold text-white" data-count="50">50+</div>
                        <div class="text-slate-400 text-xs sm:text-sm mt-1 font-medium">Happy Clients</div>
                    </div>
                </div>

                {{-- CTA Buttons --}}
                <div class="flex flex-col xs:flex-row gap-3 justify-center lg:justify-start reveal delay-400" data-delay="400">
                    <a href="{{ route('projects') }}"
                       class="group inline-flex items-center justify-center gap-2.5 px-6 py-3.5
                              bg-gradient-to-r from-brand-600 to-accent-600 text-white
                              rounded-xl font-semibold text-sm sm:text-base
                              hover:from-brand-500 hover:to-accent-500 hover:shadow-glow-brand
                              transform hover:-translate-y-0.5 transition-all duration-300">
                        <i class="fas fa-briefcase text-sm"></i>
                        View My Work
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                    <a href="https://drive.google.com/uc?export=download&id=1mKY3N4Z9aNtJg9Oq-HT21eafCyQj3_hi"
                       download="MR_Aananda_CV.pdf"
                       class="group inline-flex items-center justify-center gap-2.5 px-6 py-3.5
                              border border-white/20 text-white rounded-xl font-semibold text-sm sm:text-base
                              hover:bg-white/10 hover:border-white/40 backdrop-blur-sm
                              transform hover:-translate-y-0.5 transition-all duration-300">
                        <i class="fas fa-download text-sm"></i>
                        Download CV
                    </a>
                </div>

                {{-- Social Links --}}
                <div class="flex items-center gap-3 justify-center lg:justify-start reveal delay-500" data-delay="500">
                    <span class="text-slate-500 text-sm font-medium">Follow me:</span>
                    <a href="https://github.com/Mr-Aananda" target="_blank"
                       class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-slate-300
                              hover:bg-slate-800 hover:text-white hover:scale-110 transition-all duration-300"
                       title="GitHub">
                        <i class="fab fa-github text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mr-aananda/" target="_blank"
                       class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-slate-300
                              hover:bg-blue-600 hover:text-white hover:scale-110 transition-all duration-300"
                       title="LinkedIn">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </a>
                    <a href="https://wa.me/8801971072007" target="_blank"
                       class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-slate-300
                              hover:bg-green-500 hover:text-white hover:scale-110 transition-all duration-300"
                       title="WhatsApp">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

            {{-- ─── Profile Image ─── --}}
            <div class="flex justify-center lg:justify-end order-1 lg:order-2">
                <div class="relative">
                    {{-- Glow ring --}}
                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-brand-500 to-accent-500 blur-2xl opacity-30 scale-110 animate-pulse-glow"></div>

                    {{-- Profile circle --}}
                    <div class="relative w-52 h-52 sm:w-64 sm:h-64 md:w-72 md:h-72 lg:w-80 lg:h-80
                                rounded-full overflow-hidden
                                border-4 border-white/20 shadow-2xl animate-float-slow">
                        <img src="{{ Vite::asset('resources/assets/images/hero.png') }}"
                             alt="MR. Aananda — Full Stack Developer"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'; document.getElementById('hero-fallback').style.display='flex';">
                        <div id="hero-fallback" class="hidden w-full h-full items-center justify-center
                                                        bg-gradient-to-br from-brand-500 to-accent-600">
                            <i class="fas fa-user text-6xl sm:text-8xl text-white/80"></i>
                        </div>
                    </div>

                    {{-- Floating tech badge — top right --}}
                    <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4
                                w-12 h-12 sm:w-14 sm:h-14
                                bg-gradient-to-br from-brand-500 to-accent-500 rounded-2xl
                                flex items-center justify-center shadow-glow-brand float-badge">
                        <i class="fas fa-code text-white text-base sm:text-lg"></i>
                    </div>

                    {{-- Floating tech badge — bottom left --}}
                    <div class="absolute -bottom-3 -left-3 sm:-bottom-5 sm:-left-5
                                w-14 h-14 sm:w-16 sm:h-16
                                bg-gradient-to-br from-slate-700 to-slate-900 rounded-2xl
                                flex items-center justify-center shadow-xl float-badge-delay">
                        <i class="fas fa-database text-emerald-400 text-base sm:text-lg"></i>
                    </div>

                    {{-- Tech stack pill --}}
                    <div class="absolute bottom-6 -right-2 sm:-right-6
                                glass rounded-2xl px-3 py-2 shadow-lg float-badge">
                        <div class="flex items-center gap-1.5">
                            <i class="fab fa-laravel text-red-500 text-base"></i>
                            <i class="fab fa-vuejs text-emerald-500 text-base"></i>
                            <i class="fab fa-react text-sky-400 text-base"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2
                    text-slate-500 opacity-70 hidden sm:flex animate-bounce-slow">
            <span class="text-xs font-medium tracking-widest uppercase">Scroll</span>
            <div class="w-5 h-8 border-2 border-slate-500/60 rounded-full flex justify-center pt-1.5">
                <div class="w-1 h-2 bg-slate-400 rounded-full animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
