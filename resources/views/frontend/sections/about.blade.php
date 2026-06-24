{{-- About Section --}}
<section class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
    {{-- Subtle bg decoration --}}
    <div class="absolute top-0 right-0 w-72 h-72 bg-brand-50 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl opacity-60 pointer-events-none"
        aria-hidden="true"></div>
    <div class="absolute bottom-0 left-0 w-56 h-56 bg-accent-500/5 rounded-full translate-y-1/2 -translate-x-1/2 blur-2xl pointer-events-none"
        aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        {{-- Section Header --}}
        @if (!request()->is('about'))
            <div class="text-center mb-12 sm:mb-16 reveal">
                <span class="section-badge"><i class="fas fa-user"></i> About Me</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-4 mb-3">
                    Who I <span class="gradient-text">Am</span>
                </h2>
                <div class="section-line"></div>
                <p class="mt-4 text-slate-500 text-base sm:text-lg max-w-xl mx-auto">
                    A blend of creativity, clean code, and modern development.
                </p>
            </div>
        @endif

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-start">

            {{-- ─── Left Column ─── --}}
            <div class="space-y-6 reveal-left">

                {{-- Journey card --}}
                <div class="card-premium p-6 sm:p-8 relative overflow-hidden">
                    <div
                        class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-brand-500 to-accent-500 rounded-l-2xl">
                    </div>
                    <div class="pl-2">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center">
                                <i class="fas fa-route text-brand-600"></i>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900">My Journey</h3>
                        </div>

                        <div class="space-y-4 text-slate-600 text-sm sm:text-base leading-relaxed">
                            <p>
                                With over <span class="font-semibold text-brand-600">5 years of experience</span>, I
                                build
                                responsive, intuitive, and scalable web applications designed for performance and user
                                satisfaction.
                            </p>
                            <p>
                                I work confidently across frontend and backend using <span
                                    class="font-medium text-slate-800">Laravel, Vue.js, React, Tailwind, and
                                    Alpine.js</span>.
                                My workflow centers on clean architecture, modern best practices, and long-term
                                maintainability.
                            </p>
                            <p>
                                Outside development, I enjoy exploring new technologies, building side projects,
                                contributing to the community, and spending time outdoors to recharge.
                            </p>
                        </div>

                        {{-- Approach tags --}}
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-50 text-brand-700 rounded-lg text-xs font-semibold border border-brand-100">Responsive
                                Design</span>
                            <span
                                class="px-3 py-1 bg-emerald-50 text-emerald-700 rounded-lg text-xs font-semibold border border-emerald-100">Clean
                                Code</span>
                            <span
                                class="px-3 py-1 bg-purple-50 text-purple-700 rounded-lg text-xs font-semibold border border-purple-100">UX
                                Focused</span>
                            <span
                                class="px-3 py-1 bg-orange-50 text-orange-700 rounded-lg text-xs font-semibold border border-orange-100">Modern
                                Tech</span>
                        </div>
                    </div>
                </div>

                {{-- Contact info cards --}}
                <div class="grid grid-cols-1 xs:grid-cols-2 gap-3">
                    <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100
                                hover:bg-brand-50 hover:border-brand-100 transition-all duration-300 group">
                        <div class="w-9 h-9 rounded-lg bg-brand-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-brand-600 text-sm"></i>
                        </div>
                        <span class="text-slate-700 font-medium text-sm leading-tight">Tongi, Gazipur, Dhaka</span>
                    </div>
                    <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100
                                hover:bg-brand-50 hover:border-brand-100 transition-all duration-300 group">
                        <div class="w-9 h-9 rounded-lg bg-brand-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-brand-600 text-sm"></i>
                        </div>
                        <span
                            class="text-slate-700 font-medium text-sm leading-tight truncate">rmananda007@gmail.com</span>
                    </div>
                    <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100
                                hover:bg-brand-50 hover:border-brand-100 transition-all duration-300">
                        <div class="w-9 h-9 rounded-lg bg-brand-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-brand-600 text-sm"></i>
                        </div>
                        <span class="text-slate-700 font-medium text-sm leading-tight">+880 1971 072007</span>
                    </div>
                    <div
                        class="flex items-center gap-3 p-4 rounded-xl bg-emerald-50 border border-emerald-100
                                hover:bg-emerald-100 transition-all duration-300">
                        <div class="w-9 h-9 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check-circle text-emerald-600 text-sm"></i>
                        </div>
                        <span class="text-emerald-700 font-semibold text-sm leading-tight">Available for work</span>
                    </div>
                </div>
            </div>

            {{-- ─── Right Column ─── --}}
            <div class="space-y-6 reveal-right">

                {{-- Achievements header --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 flex items-center justify-center">
                            <i class="fas fa-trophy text-brand-600"></i>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900">My Achievements</h3>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <x-frontend.stats-card number="30" text="Projects Completed" bgColor="bg-brand-50"
                            icon="fas fa-briefcase" iconColor="text-brand-500" />

                        <x-frontend.stats-card number="5" text="Years Experience" bgColor="bg-emerald-50"
                            icon="fas fa-calendar-check" iconColor="text-emerald-500" />

                        <x-frontend.stats-card number="50" text="Happy Clients" bgColor="bg-purple-50"
                            icon="fas fa-smile" iconColor="text-purple-500" />

                        <x-frontend.stats-card number="10" text="Technologies Used" bgColor="bg-orange-50"
                            icon="fas fa-layer-group" iconColor="text-orange-500" />
                    </div>
                </div>

                {{-- What I do card --}}
                <div class="card-premium p-5 sm:p-6 border-0 overflow-hidden relative"
                    style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2">
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="w-8 h-8 rounded-lg bg-white/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-star text-yellow-300 text-sm"></i>
                            </div>
                            <h4 class="text-base font-bold text-white">What I Do Best</h4>
                        </div>
                        <ul class="space-y-1.5 mb-4">
                            <li class="flex items-center gap-2 text-white/90 text-sm">
                                <i class="fas fa-check text-emerald-300 text-xs flex-shrink-0"></i>
                                Full Stack Web Application Development
                            </li>
                            <li class="flex items-center gap-2 text-white/90 text-sm">
                                <i class="fas fa-check text-emerald-300 text-xs flex-shrink-0"></i>
                                Business ERP & Management Systems
                            </li>
                            <li class="flex items-center gap-2 text-white/90 text-sm">
                                <i class="fas fa-check text-emerald-300 text-xs flex-shrink-0"></i>
                                REST API Design & Integration
                            </li>
                            <li class="flex items-center gap-2 text-white/90 text-sm">
                                <i class="fas fa-check text-emerald-300 text-xs flex-shrink-0"></i>
                                Responsive UI with Tailwind & Vue.js
                            </li>
                            <li class="flex items-center gap-2 text-white/90 text-sm">
                                <i class="fas fa-check text-emerald-300 text-xs flex-shrink-0"></i>
                                Server Deployment & Maintenance
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl font-semibold text-sm
                                  bg-white text-indigo-700 hover:bg-indigo-50 transition-all duration-300">
                            Let's Work Together
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
