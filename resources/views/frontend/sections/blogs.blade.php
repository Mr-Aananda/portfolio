{{-- Blogs Section --}}
<section class="py-16 sm:py-20 lg:py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-brand-50 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl opacity-70"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        {{-- Section Header --}}
        @if (!request()->is('blogs'))
            <div class="text-center mb-12 sm:mb-16 reveal">
                <span class="section-badge"><i class="fas fa-pen-nib"></i> Insights</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-4 mb-3">
                    Latest <span class="gradient-text">Blogs</span>
                </h2>
                <div class="section-line"></div>
                <p class="mt-4 text-slate-500 text-base sm:text-lg max-w-xl mx-auto">
                    Recent thoughts and tutorials on web development and technology.
                </p>
            </div>
        @endif

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-10 sm:mb-14">

            {{-- Blog 1: AI Post (newest) --}}
            <article class="group card-premium overflow-hidden flex flex-col reveal delay-100">
                <div class="h-44 sm:h-48 bg-gradient-to-br from-violet-500 to-fuchsia-600 relative overflow-hidden flex-shrink-0">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center
                                    group-hover:scale-110 transition-transform duration-500">
                            <i class="fas fa-robot text-white text-2xl"></i>
                        </div>
                    </div>
                    <div class="absolute top-3 left-3">
                        <span class="px-2.5 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-semibold rounded-lg">AI & Tools</span>
                    </div>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-1">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-1.5 text-slate-400 text-xs">
                            <i class="far fa-clock"></i>
                            <span>7 min read</span>
                        </div>
                        <span class="text-slate-400 text-xs">June 15, 2025</span>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-slate-800 mb-2 leading-snug group-hover:text-brand-600 transition-colors duration-300">
                        AI-Assisted Laravel Development: GitHub Copilot & Claude in Real Projects
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4 flex-1">
                        How I integrate AI tools into my daily Laravel workflow — writing complex queries, debugging 10x faster, and boosting productivity.
                    </p>
                    <a href="{{ route('blogs') }}"
                       class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors duration-200">
                        Read More
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </article>

            {{-- Blog 2 --}}
            <article class="group card-premium overflow-hidden flex flex-col reveal delay-200">
                <div class="h-44 sm:h-48 bg-gradient-to-br from-brand-500 to-blue-600 relative overflow-hidden flex-shrink-0">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center
                                    group-hover:scale-110 transition-transform duration-500">
                            <i class="fab fa-laravel text-white text-2xl"></i>
                        </div>
                    </div>
                    <div class="absolute top-3 left-3">
                        <span class="px-2.5 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-semibold rounded-lg">Laravel</span>
                    </div>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-1">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-1.5 text-slate-400 text-xs">
                            <i class="far fa-clock"></i>
                            <span>8 min read</span>
                        </div>
                        <span class="text-slate-400 text-xs">June 10, 2025</span>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-slate-800 mb-2 leading-snug group-hover:text-brand-600 transition-colors duration-300">
                        Building Scalable Laravel APIs: Best Practices for 2025
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4 flex-1">
                        Advanced Laravel architecture, API versioning, Spatie resource transformation, and rate limiting for production-grade apps.
                    </p>
                    <a href="{{ route('blogs') }}"
                       class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors duration-200">
                        Read More
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </article>

            {{-- Blog 3 --}}
            <article class="group card-premium overflow-hidden flex flex-col reveal delay-300 sm:col-span-2 lg:col-span-1">
                <div class="h-44 sm:h-48 bg-gradient-to-br from-emerald-500 to-teal-600 relative overflow-hidden flex-shrink-0">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center
                                    group-hover:scale-110 transition-transform duration-500">
                            <i class="fab fa-vuejs text-white text-2xl"></i>
                        </div>
                    </div>
                    <div class="absolute top-3 left-3">
                        <span class="px-2.5 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-semibold rounded-lg">Vue.js</span>
                    </div>
                </div>
                <div class="p-5 sm:p-6 flex flex-col flex-1">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-1.5 text-slate-400 text-xs">
                            <i class="far fa-clock"></i>
                            <span>6 min read</span>
                        </div>
                        <span class="text-slate-400 text-xs">June 5, 2025</span>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-slate-800 mb-2 leading-snug group-hover:text-emerald-600 transition-colors duration-300">
                        Vue 3 + Pinia: State Management for Large Business Apps
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4 flex-1">
                        Managing complex application state in Vue 3 using Pinia — with real examples from ERP and management system projects.
                    </p>
                    <a href="{{ route('blogs') }}"
                       class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors duration-200">
                        Read More
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </article>
        </div>


        {{-- CTA --}}
        <div class="text-center reveal">
            <a href="{{ route('blogs') }}"
               class="inline-flex items-center gap-2.5 px-7 py-3.5
                      bg-gradient-to-r from-brand-600 to-accent-600 text-white
                      rounded-xl font-semibold text-sm sm:text-base
                      hover:from-brand-500 hover:to-accent-500 hover:shadow-glow-brand
                      transform hover:-translate-y-0.5 transition-all duration-300">
                View All Blogs
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</section>
