{{-- Skills Section --}}
<section class="py-16 sm:py-20 lg:py-24 relative overflow-hidden"
         style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);">

    {{-- Bg decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-accent-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- Section Header --}}
        @if (!request()->is('skills'))
            <div class="text-center mb-12 sm:mb-16 reveal">
                <span class="section-badge" style="background: rgba(99,102,241,0.15); border-color: rgba(99,102,241,0.4); color: #a5b4fc;">
                    <i class="fas fa-code"></i> Technical Expertise
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-4 mb-3">
                    My <span class="gradient-text">Skills</span>
                </h2>
                <div class="section-line"></div>
                <p class="mt-4 text-slate-400 text-base sm:text-lg max-w-xl mx-auto">
                    A comprehensive overview of my technical skills and professional competencies.
                </p>
            </div>
        @endif

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">

            {{-- ─── Technical Skills ─── --}}
            <div class="reveal-left">
                <div class="mb-5">
                    <h3 class="text-xl sm:text-2xl font-bold text-white mb-1">Technical Proficiency</h3>
                    <p class="text-slate-400 text-sm">Modern web technologies & frameworks</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-3 sm:p-6 space-y-2">
                    <x-frontend.skill-item name="Laravel, PHP & RESTful APIs"        percentage="95" icon="fab fa-laravel"   color="from-red-500 to-pink-600" />
                    <x-frontend.skill-item name="Vue.js, Pinia, Inertia & Nuxt.js"   percentage="92" icon="fab fa-vuejs"     color="from-emerald-500 to-green-600" />
                    <x-frontend.skill-item name="Alpine.js, React.js & JavaScript"   percentage="88" icon="fab fa-js"        color="from-yellow-500 to-amber-600" />
                    <x-frontend.skill-item name="MySQL, SQLite & Eloquent ORM"       percentage="92" icon="fas fa-database"  color="from-amber-500 to-orange-600" />
                    <x-frontend.skill-item name="Tailwind CSS & Bootstrap"           percentage="90" icon="fas fa-palette"   color="from-teal-500 to-cyan-600" />
                    <x-frontend.skill-item name="Queues, Caching & Task Scheduling"  percentage="88" icon="fas fa-cogs"      color="from-blue-500 to-indigo-600" />
                    <x-frontend.skill-item name="AI-Assisted Dev & Problem Solving"  percentage="86" icon="fas fa-robot"     color="from-violet-500 to-fuchsia-600" />
                    <x-frontend.skill-item name="Git, Vite & Modular Architecture"   percentage="88" icon="fab fa-git-alt"   color="from-orange-500 to-red-600" />
                </div>
            </div>

            {{-- ─── Professional Skills ─── --}}
            <div class="reveal-right">
                <div class="mb-5">
                    <h3 class="text-xl sm:text-2xl font-bold text-white mb-1">Professional Skills</h3>
                    <p class="text-slate-400 text-sm">Core competencies for team collaboration</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    {{-- Communication --}}
                    <div class="group p-3 sm:p-5 rounded-2xl bg-white/5 border border-white/10
                                hover:bg-brand-500/10 hover:border-brand-500/30
                                transition-all duration-300 hover:-translate-y-1 flex flex-col items-center text-center">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600
                                    flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-comments text-white text-base sm:text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-white text-xs sm:text-sm mb-1">Communication</h4>
                        <p class="text-slate-400 text-[10px] sm:text-xs mb-3 leading-relaxed">Clear team collaboration</p>
                        <div class="w-full bg-white/10 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-400 h-1.5 rounded-full" style="width: 95%"></div>
                        </div>
                        <span class="text-blue-400 text-xs font-bold mt-1">95%</span>
                    </div>

                    {{-- Team Leadership --}}
                    <div class="group p-3 sm:p-5 rounded-2xl bg-white/5 border border-white/10
                                hover:bg-emerald-500/10 hover:border-emerald-500/30
                                transition-all duration-300 hover:-translate-y-1 flex flex-col items-center text-center">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-green-600
                                    flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-users text-white text-base sm:text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-white text-xs sm:text-sm mb-1">Team Leadership</h4>
                        <p class="text-slate-400 text-[10px] sm:text-xs mb-3 leading-relaxed">Guiding teams to success</p>
                        <div class="w-full bg-white/10 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-emerald-500 to-green-400 h-1.5 rounded-full" style="width: 85%"></div>
                        </div>
                        <span class="text-emerald-400 text-xs font-bold mt-1">85%</span>
                    </div>

                    {{-- Problem Solving --}}
                    <div class="group p-3 sm:p-5 rounded-2xl bg-white/5 border border-white/10
                                hover:bg-purple-500/10 hover:border-purple-500/30
                                transition-all duration-300 hover:-translate-y-1 flex flex-col items-center text-center">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-purple-500 to-violet-600
                                    flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-lightbulb text-white text-base sm:text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-white text-xs sm:text-sm mb-1">Problem Solving</h4>
                        <p class="text-slate-400 text-[10px] sm:text-xs mb-3 leading-relaxed">Innovative solutions</p>
                        <div class="w-full bg-white/10 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-purple-500 to-violet-400 h-1.5 rounded-full" style="width: 92%"></div>
                        </div>
                        <span class="text-purple-400 text-xs font-bold mt-1">92%</span>
                    </div>

                    {{-- Project Management --}}
                    <div class="group p-3 sm:p-5 rounded-2xl bg-white/5 border border-white/10
                                hover:bg-orange-500/10 hover:border-orange-500/30
                                transition-all duration-300 hover:-translate-y-1 flex flex-col items-center text-center">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-orange-500 to-amber-600
                                    flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-project-diagram text-white text-base sm:text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-white text-xs sm:text-sm mb-1">Project Management</h4>
                        <p class="text-slate-400 text-[10px] sm:text-xs mb-3 leading-relaxed">Agile delivery</p>
                        <div class="w-full bg-white/10 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-orange-500 to-amber-400 h-1.5 rounded-full" style="width: 80%"></div>
                        </div>
                        <span class="text-orange-400 text-xs font-bold mt-1">80%</span>
                    </div>

                    {{-- Time Management --}}
                    <div class="group p-3 sm:p-5 rounded-2xl bg-white/5 border border-white/10
                                hover:bg-cyan-500/10 hover:border-cyan-500/30
                                transition-all duration-300 hover:-translate-y-1 flex flex-col items-center text-center">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-sky-600
                                    flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-clock text-white text-base sm:text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-white text-xs sm:text-sm mb-1">Time Management</h4>
                        <p class="text-slate-400 text-[10px] sm:text-xs mb-3 leading-relaxed">Efficient task delivery</p>
                        <div class="w-full bg-white/10 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-cyan-500 to-sky-400 h-1.5 rounded-full" style="width: 90%"></div>
                        </div>
                        <span class="text-cyan-400 text-xs font-bold mt-1">90%</span>
                    </div>

                    {{-- Adaptability --}}
                    <div class="group p-3 sm:p-5 rounded-2xl bg-white/5 border border-white/10
                                hover:bg-pink-500/10 hover:border-pink-500/30
                                transition-all duration-300 hover:-translate-y-1 flex flex-col items-center text-center">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600
                                    flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-sync-alt text-white text-base sm:text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-white text-xs sm:text-sm mb-1">Adaptability</h4>
                        <p class="text-slate-400 text-[10px] sm:text-xs mb-3 leading-relaxed">Quick learning & flexibility</p>
                        <div class="w-full bg-white/10 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-pink-500 to-rose-400 h-1.5 rounded-full" style="width: 87%"></div>
                        </div>
                        <span class="text-pink-400 text-xs font-bold mt-1">87%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
