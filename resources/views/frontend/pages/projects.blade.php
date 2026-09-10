@extends('layouts.frontend.app')

@section('title', 'Projects - Mahmudur Rahman Ananda')

@section('content')

{{-- Page Header --}}
<div class="pt-24 pb-16 sm:pb-20 relative overflow-hidden"
     style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute top-1/4 right-1/4 w-80 h-80 bg-brand-600/15 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-accent-500/10 rounded-full blur-3xl animate-float-delayed"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="section-badge" style="background:rgba(99,102,241,0.15);border-color:rgba(99,102,241,0.4);color:#a5b4fc;">
            <i class="fas fa-briefcase"></i> Portfolio
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-white mt-4 mb-4">
            My <span class="gradient-text">Projects</span>
        </h1>
        <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto">
            Explore a collection of modern, efficient business systems designed to solve real-world challenges with practical precision.
        </p>

        {{-- Quick Stats --}}
        <div class="grid grid-cols-3 max-w-md mx-auto gap-4 mt-8">
            <div class="text-center">
                <div class="text-2xl sm:text-3xl font-extrabold text-white" data-count="30">30+</div>
                <div class="text-slate-400 text-xs mt-1">Projects Built</div>
            </div>
            <div class="text-center border-x border-white/10">
                <div class="text-2xl sm:text-3xl font-extrabold text-white" data-count="50">50+</div>
                <div class="text-slate-400 text-xs mt-1">Happy Clients</div>
            </div>
            <div class="text-center">
                <div class="text-2xl sm:text-3xl font-extrabold text-white" data-count="5">5+</div>
                <div class="text-slate-400 text-xs mt-1">Years Exp</div>
            </div>
        </div>
    </div>
</div>

{{-- Featured Projects (Full Detail Cards) --}}
<section class="py-14 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge"><i class="fas fa-star"></i> Flagship</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3 mb-2">Featured Projects</h2>
            <div class="section-line"></div>
            <p class="mt-4 text-slate-500 text-sm sm:text-base">My most impactful and comprehensive business solutions</p>
        </div>

        <div class="space-y-8 sm:space-y-10">

            {{-- EasySale --}}
            <div class="reveal card-premium overflow-hidden">
                <div class="grid lg:grid-cols-5 items-stretch">
                    <div class="lg:col-span-2 h-52 sm:h-60 lg:h-auto bg-gradient-to-br from-brand-500 to-indigo-700
                                flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20"
                             style="background-image: radial-gradient(circle at 30% 70%, rgba(255,255,255,0.5) 0%, transparent 50%);"></div>
                        <div class="text-center text-white px-8 relative z-10">
                            <div class="w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-cash-register text-4xl text-white"></i>
                            </div>
                            <span class="text-sm font-bold bg-white/20 px-3 py-1 rounded-full">Independent Flagship Product</span>
                        </div>
                    </div>
                    <div class="lg:col-span-3 p-6 sm:p-8 flex flex-col justify-center">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-brand-100 text-brand-700 text-xs font-bold rounded-lg uppercase tracking-wider">🔥 Flagship ERP & POS</span>
                            <span class="text-slate-400 text-xs">Sole Developer & Architect</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-3">EasySale — Smart ERP & POS System</h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                            A lightweight, modular ERP and POS solution built to streamline retail, wholesale, pharmacy, and electronics businesses. Key features include high-speed POS billing with weight-scale support, multi-tier pricing, inventory valuation (WAC/FIFO), batch/expiry and IMEI warranty tracking, multi-payment invoices, cash register shifts, CRM with due/loyalty points, HRM payroll, and real-time financial reporting (Z-Reports).
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach(['PHP', 'Laravel', 'Vue.js', 'Pinia', 'MySQL', 'Vite', 'Spatie RBAC', 'Bootstrap', 'Git'] as $tech)
                            <span class="px-2.5 py-1 bg-brand-50 text-brand-700 text-xs font-semibold rounded-lg border border-brand-100">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://easysale.e-ddl.com" target="_blank"
                               class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold
                                      bg-gradient-to-r from-brand-600 to-accent-600 text-white
                                      hover:from-brand-500 hover:to-accent-500 hover:shadow-glow-brand
                                      transition-all duration-300 transform hover:-translate-y-0.5">
                                <i class="fas fa-external-link-alt text-xs"></i> View Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dada Dhaka Ltd Enterprise Suite --}}
            <div class="reveal card-premium overflow-hidden">
                <div class="grid lg:grid-cols-5 items-stretch">
                    <div class="lg:col-span-2 h-52 sm:h-60 lg:h-auto bg-gradient-to-br from-emerald-500 to-teal-700
                                flex items-center justify-center relative overflow-hidden order-first lg:order-last">
                        <div class="absolute inset-0 opacity-20"
                             style="background-image: radial-gradient(circle at 70% 30%, rgba(255,255,255,0.5) 0%, transparent 50%);"></div>
                        <div class="text-center text-white px-8 relative z-10">
                            <div class="w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-industry text-4xl text-white"></i>
                            </div>
                            <span class="text-sm font-bold bg-white/20 px-3 py-1 rounded-full">Dada Dhaka Ltd</span>
                        </div>
                    </div>
                    <div class="lg:col-span-3 p-6 sm:p-8 flex flex-col justify-center order-last lg:order-first">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-lg uppercase tracking-wider">Enterprise Suite</span>
                            <span class="text-slate-400 text-xs">Senior Executive (Software)</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-3">Enterprise Web Applications Development</h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                            Designed and developed multiple internal business applications for Dada Dhaka Ltd (premier garment manufacturing group), including procurement and finance workflows, voucher processing, meeting scheduling, grievance handling, challan dispatch, and quality control systems. Built with strict role-based access, approval workflows, and automated email reporting.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach(['PHP', 'Laravel', 'Vue.js', 'Alpine.js', 'Pinia', 'JavaScript', 'Vite', 'MySQL', 'Role & Permission', 'Email Integration', 'Git'] as $tech)
                            <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-lg border border-emerald-100">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <a href="http://qms.e-ddl.com" target="_blank"
                               class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-emerald-600 hover:text-white transition-colors">
                                <i class="fas fa-check-double text-[10px]"></i> QMS
                            </a>
                            <a href="https://pms.e-ddl.com" target="_blank"
                               class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-emerald-600 hover:text-white transition-colors">
                                <i class="fas fa-shopping-cart text-[10px]"></i> PMS
                            </a>
                            <a href="http://voucher.e-ddl.com" target="_blank"
                               class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-emerald-600 hover:text-white transition-colors">
                                <i class="fas fa-file-invoice-dollar text-[10px]"></i> Voucher
                            </a>
                            <a href="http://meeting.e-ddl.com" target="_blank"
                               class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-emerald-600 hover:text-white transition-colors">
                                <i class="fas fa-calendar-alt text-[10px]"></i> Meeting
                            </a>
                            <a href="http://grievance.e-ddl.com" target="_blank"
                               class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-emerald-600 hover:text-white transition-colors">
                                <i class="fas fa-comments text-[10px]"></i> Grievance
                            </a>
                            <a href="http://challan.e-ddl.com" target="_blank"
                               class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-emerald-600 hover:text-white transition-colors">
                                <i class="fas fa-truck text-[10px]"></i> Challan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Scrap Management System (Meta Soft) --}}
            <div class="reveal card-premium overflow-hidden">
                <div class="grid lg:grid-cols-5 items-stretch">
                    <div class="lg:col-span-2 h-52 sm:h-60 lg:h-auto bg-gradient-to-br from-amber-500 to-orange-600
                                flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20"
                             style="background-image: radial-gradient(circle at 30% 70%, rgba(255,255,255,0.5) 0%, transparent 50%);"></div>
                        <div class="text-center text-white px-8 relative z-10">
                            <div class="w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-recycle text-4xl text-white"></i>
                            </div>
                            <span class="text-sm font-bold bg-white/20 px-3 py-1 rounded-full">Meta Soft</span>
                        </div>
                    </div>
                    <div class="lg:col-span-3 p-6 sm:p-8 flex flex-col justify-center">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            <span class="px-3 py-1 bg-amber-100 text-amber-800 text-xs font-bold rounded-lg uppercase tracking-wider">Enterprise ERP</span>
                            <span class="text-slate-400 text-xs">Sole Developer</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-3">Scrap Management System</h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-4">
                            A comprehensive software solution to streamline scrap handling and overall operations. Key features include managing multiple purchases for a single party consolidated into one daily invoice, stock and inventory management, POS system, car module, expense tracking, transactions, payroll, attendance tracking, due management, and detailed reporting.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            @foreach(['PHP', 'Laravel', 'Role & Permission', 'Vite', 'Spatie', 'JavaScript', 'VueJS', 'Pinia', 'MySQL', 'Git'] as $tech)
                            <span class="px-2.5 py-1 bg-amber-50 text-amber-800 text-xs font-semibold rounded-lg border border-amber-100">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://bakul.amwey.site/login" target="_blank"
                               class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold
                                      bg-gradient-to-r from-amber-600 to-orange-600 text-white
                                      hover:from-amber-500 hover:to-orange-500
                                      transition-all duration-300 transform hover:-translate-y-0.5">
                                <i class="fas fa-external-link-alt text-xs"></i> View Admin Panel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- All Projects Grid --}}
<section class="py-14 sm:py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge"><i class="fas fa-th-large"></i> Portfolio</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3 mb-2">All Projects</h2>
            <div class="section-line"></div>
            <p class="mt-4 text-slate-500 text-sm sm:text-base">Browse my complete portfolio of business management solutions</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            {{-- 1. QMS (Dada Dhaka Ltd) --}}
            <div class="reveal delay-100">
                <x-frontend.project-card
                    title="Quality Management System (QMS)"
                    description="End-to-end quality control platform for garment manufacturing: inspection workflows, defect tracking, compliance management, corrective action handling, and comprehensive audit reporting."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="http://qms.e-ddl.com"
                    githubUrl="#"
                    gradient="from-emerald-500 to-teal-600"
                />
            </div>

            {{-- 2. Purchase Management System (Dada Dhaka Ltd) --}}
            <div class="reveal delay-200">
                <x-frontend.project-card
                    title="Purchase Management System (PMS)"
                    description="Streamlined corporate procurement platform with supplier management, purchase requisition, approval hierarchy, purchase order generation, and receiving workflows."
                    :technologies="['Laravel', 'Vue.js', 'Alpine.js', 'MySQL', 'Git']"
                    demoUrl="https://pms.e-ddl.com"
                    githubUrl="#"
                    gradient="from-blue-500 to-indigo-600"
                />
            </div>

            {{-- 3. Voucher Management System (Dada Dhaka Ltd) --}}
            <div class="reveal delay-300">
                <x-frontend.project-card
                    title="Voucher Management System"
                    description="Enterprise financial voucher processing system for factory operations: automated expense vouchers, multi-level audit approvals, and financial transaction tracking."
                    :technologies="['Laravel', 'Vue.js', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="http://voucher.e-ddl.com"
                    githubUrl="#"
                    gradient="from-indigo-500 to-purple-600"
                />
            </div>

            {{-- 4. Meeting Scheduler (Dada Dhaka Ltd) --}}
            <div class="reveal delay-100">
                <x-frontend.project-card
                    title="Corporate Meeting Scheduler"
                    description="Internal conference & meeting scheduling system with room availability tracking, attendee invitations, calendar conflicts detection, and automated reminders."
                    :technologies="['Laravel', 'Vue.js', 'JavaScript', 'MySQL', 'Vite']"
                    demoUrl="http://meeting.e-ddl.com"
                    githubUrl="#"
                    gradient="from-sky-500 to-blue-600"
                />
            </div>

            {{-- 5. Grievance Management System (Dada Dhaka Ltd) --}}
            <div class="reveal delay-200">
                <x-frontend.project-card
                    title="Grievance Management System (GMS)"
                    description="Structured employee grievance platform: complaint submission, departmental escalation workflows, SLA tracking, status updates, and resolution audit dashboards."
                    :technologies="['Laravel', 'VueJS', 'Alpine.js', 'MySQL', 'Email']"
                    demoUrl="http://grievance.e-ddl.com"
                    githubUrl="#"
                    gradient="from-purple-500 to-accent-600"
                />
            </div>

            {{-- 6. Challan Management System (Dada Dhaka Ltd) --}}
            <div class="reveal delay-300">
                <x-frontend.project-card
                    title="Challan Management System"
                    description="Factory dispatch & delivery challan management: item dispatch logging, transport tracking, recipient acknowledgment, and gate pass verification."
                    :technologies="['Laravel', 'Vue.js', 'MySQL', 'Role & Permission', 'Git']"
                    demoUrl="http://challan.e-ddl.com"
                    githubUrl="#"
                    gradient="from-teal-500 to-cyan-600"
                />
            </div>

            {{-- 7. Scrap Management System (Meta Soft) --}}
            <div class="reveal delay-100">
                <x-frontend.project-card
                    title="Scrap Management System"
                    description="Comprehensive scrap handling ERP: single party consolidated daily invoices, stock control, POS, car transport module, expense tracking, payroll, and reporting."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'Spatie RBAC', 'MySQL', 'Git']"
                    demoUrl="https://bakul.amwey.site/login"
                    githubUrl="#"
                    gradient="from-amber-500 to-orange-600"
                />
            </div>

            {{-- 8. Dealership Management System (Utkorsho IT) --}}
            <div class="reveal delay-200">
                <x-frontend.project-card
                    title="Dealership Management System (DMS)"
                    description="Business operations solution for multiple dealership clients: inventory & stock control, supplier/customer transactions, employee management, and integrated SMS."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'AlpineJs', 'MySQL', 'Cron Job']"
                    demoUrl="http://dms.utkorshoit.com"
                    githubUrl="#"
                    gradient="from-blue-600 to-cyan-600"
                />
            </div>

            {{-- 9. Restaurant Management & Billing System (Utkorsho IT) --}}
            <div class="reveal delay-300">
                <x-frontend.project-card
                    title="Restaurant Management & Billing (RMS)"
                    description="Complete restaurant billing software with modern POS, inventory management, table reservation, staff management, and integrated SMS alerts."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'Spatie', 'MySQL', 'Git']"
                    demoUrl="http://ayesh.utkorshoit.com"
                    githubUrl="#"
                    gradient="from-rose-500 to-pink-600"
                />
            </div>

            {{-- 10. Utkorsho IT Dynamic Website --}}
            <div class="reveal delay-100">
                <x-frontend.project-card
                    title="Dynamic Corporate Portal & Admin"
                    description="Dynamic company portal with full CMS admin panel: product catalog, portfolio galleries, client management, inquiry handling, and SMS/email notifications."
                    :technologies="['Laravel', 'Inertia', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="http://utkorshoit.com"
                    githubUrl="#"
                    gradient="from-slate-600 to-gray-800"
                />
            </div>

            {{-- 11. Tailor Management System (MaxSOP) --}}
            <div class="reveal delay-200">
                <x-frontend.project-card
                    title="Tailor Management System"
                    description="Custom tailoring shop ERP: dynamic body measurement recording, order delivery scheduling, task distribution, customer dues tracking, and SMS notifications."
                    :technologies="['Laravel', 'ReactJS', 'JavaScript', 'MySQL', 'Git']"
                    demoUrl="http://fops.shohozsalesbd.xyz"
                    githubUrl="#"
                    gradient="from-pink-500 to-rose-600"
                />
            </div>

            {{-- 12. Coaching Management System (MaxSOP) --}}
            <div class="reveal delay-300">
                <x-frontend.project-card
                    title="Coaching Management System"
                    description="Educational institute platform: student registrations, batch scheduling, daily attendance, fee collections, exam marks, and academic progress monitoring."
                    :technologies="['Laravel', 'ReactJS', 'MySQL', 'Git']"
                    demoUrl="https://pacemakerbd.com"
                    githubUrl="#"
                    gradient="from-indigo-600 to-purple-700"
                />
            </div>

            {{-- 13. Shohoz Sales POS (MaxSOP) --}}
            <div class="reveal delay-100">
                <x-frontend.project-card
                    title="Shohoz Sales — Retail POS"
                    description="Point of Sale platform merging product barcode scanning, stock replenishment, expense & income tracking, customer SMS integration, and day-end reporting."
                    :technologies="['Laravel', 'Inertia', 'VueJS', 'Vuex', 'MySQL', 'Git']"
                    demoUrl="https://pos.shohozsalesbd.xyz"
                    githubUrl="#"
                    gradient="from-red-500 to-pink-600"
                />
            </div>

            {{-- 14. Construction Billing Application --}}
            <div class="reveal delay-200">
                <x-frontend.project-card
                    title="Construction Billing Application"
                    description="Service estimation and client proposal management with milestone billing, project expense tracking, and integrated SMS communication module."
                    :technologies="['Laravel', 'JavaScript', 'MySQL', 'Git']"
                    demoUrl="https://www.account.ranbuilders.com"
                    githubUrl="#"
                    gradient="from-teal-500 to-cyan-600"
                />
            </div>

        </div>
    </div>
</section>

{{-- Development Process --}}
<section class="py-14 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <span class="section-badge"><i class="fas fa-cogs"></i> Process</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3 mb-2">My Development Process</h2>
            <div class="section-line"></div>
            <p class="mt-4 text-slate-500 text-sm sm:text-base">A structured approach to delivering high-quality business solutions</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-8">
            @php
            $steps = [
                ['icon' => 'fas fa-lightbulb', 'color' => 'from-brand-500 to-indigo-600', 'bg' => 'bg-brand-50', 'n' => '01', 'title' => 'Requirements & Planning', 'desc' => 'Client consultation, requirement analysis, and project scope definition'],
                ['icon' => 'fas fa-database', 'color' => 'from-emerald-500 to-teal-600', 'bg' => 'bg-emerald-50', 'n' => '02', 'title' => 'Database Design', 'desc' => 'Architecture planning, DB schema design, and relationship mapping'],
                ['icon' => 'fas fa-code', 'color' => 'from-purple-500 to-accent-600', 'bg' => 'bg-purple-50', 'n' => '03', 'title' => 'Development', 'desc' => 'Backend with Laravel, frontend with Vue.js/React, and API integration'],
                ['icon' => 'fas fa-rocket', 'color' => 'from-orange-500 to-amber-600', 'bg' => 'bg-orange-50', 'n' => '04', 'title' => 'Deploy & Support', 'desc' => 'Server setup, control panel deployment, and ongoing maintenance'],
            ];
            @endphp
            @foreach($steps as $step)
            <div class="reveal text-center group">
                <div class="{{ $step['bg'] }} w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4
                             group-hover:scale-110 transition-transform duration-300 relative shadow-sm">
                    <span class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-gradient-to-br {{ $step['color'] }}
                                 flex items-center justify-center text-white text-[10px] font-bold">
                        {{ $step['n'] }}
                    </span>
                    <i class="{{ $step['icon'] }} text-2xl gradient-text"></i>
                </div>
                <h3 class="text-sm sm:text-base font-bold text-slate-900 mb-2">{{ $step['title'] }}</h3>
                <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12 reveal">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2.5 px-7 py-3.5
                      bg-gradient-to-r from-brand-600 to-accent-600 text-white
                      rounded-xl font-semibold text-sm sm:text-base
                      hover:from-brand-500 hover:to-accent-500 hover:shadow-glow-brand
                      transform hover:-translate-y-0.5 transition-all duration-300">
                Start a Project Together
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</section>

@endsection
