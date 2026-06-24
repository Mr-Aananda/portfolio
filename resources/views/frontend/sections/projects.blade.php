{{-- Projects Section — Homepage (4 Featured) --}}
<section class="py-16 sm:py-20 lg:py-24 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-48
                bg-gradient-to-b from-brand-500/5 to-transparent pointer-events-none" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        @if (!request()->is('projects'))
            <div class="text-center mb-12 sm:mb-16 reveal">
                <span class="section-badge"><i class="fas fa-briefcase"></i> Portfolio</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-4 mb-3">
                    Featured <span class="gradient-text">Projects</span>
                </h2>
                <div class="section-line"></div>
                <p class="mt-4 text-slate-500 text-base sm:text-lg max-w-xl mx-auto">
                    Turning business needs into comprehensive digital solutions.
                </p>
            </div>
        @endif

        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 sm:gap-6">
            {{-- EasySale --}}
            <div class="reveal delay-100">
                <x-frontend.project-card
                    title="EasySale — All-in-One Business ERP"
                    description="Complete business ERP with purchase, sale, production, stock, expenses, attendance, salary, reports, due management and more."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="http://easysale.amwey.site/"
                    githubUrl="#"
                    gradient="from-brand-500 to-indigo-600"
                />
            </div>

            {{-- QMS --}}
            <div class="reveal delay-200">
                <x-frontend.project-card
                    title="Quality Management System (QMS)"
                    description="End-to-end quality control platform with inspection workflows, defect tracking, compliance management, and detailed audit reporting."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="https://qms.e-ddl.com/"
                    githubUrl="#"
                    gradient="from-emerald-500 to-teal-600"
                />
            </div>

            {{-- GMS --}}
            <div class="reveal delay-300">
                <x-frontend.project-card
                    title="Grievance Management System (GMS)"
                    description="Structured grievance handling system with complaint submission, escalation workflows, status tracking, and resolution reporting."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="https://gms.e-ddl.com/"
                    githubUrl="#"
                    gradient="from-purple-500 to-accent-600"
                />
            </div>

            {{-- Scrap --}}
            <div class="reveal delay-400">
                <x-frontend.project-card
                    title="Scrap Management System"
                    description="Comprehensive scrap handling with purchase consolidation, stock management, POS, car module, expense tracking, payroll, and reporting."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="http://bakul.amwey.site/"
                    githubUrl="#"
                    gradient="from-orange-500 to-amber-600"
                />
            </div>
        </div>

        {{-- CTA --}}
        <div class="text-center mt-10 sm:mt-14 reveal">
            <a href="{{ route('projects') }}"
               class="inline-flex items-center gap-2.5 px-7 py-3.5
                      bg-gradient-to-r from-brand-600 to-accent-600 text-white
                      rounded-xl font-semibold text-sm sm:text-base
                      hover:from-brand-500 hover:to-accent-500 hover:shadow-glow-brand
                      transform hover:-translate-y-0.5 transition-all duration-300">
                View All Projects (20+)
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</section>
