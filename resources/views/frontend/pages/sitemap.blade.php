@extends('layouts.frontend.app')

@section('title', 'Sitemap - Mahmudur Rahman Ananda')

@section('content')
{{-- Page Header --}}
<div class="pt-24 pb-12 sm:pb-16 relative overflow-hidden"
     style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center relative z-10">
        <span class="section-badge mb-4" style="background:rgba(99,102,241,0.15);border-color:rgba(99,102,241,0.4);color:#a5b4fc;">
            <i class="fas fa-sitemap"></i> Navigation
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-4 mb-4">Sitemap</h1>
        <p class="text-slate-400 text-base sm:text-lg">Complete overview of all pages on this portfolio</p>
    </div>
</div>

<section class="py-12 sm:py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Main Pages --}}
            <div class="card-premium p-5 sm:p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-9 h-9 rounded-xl bg-brand-100 flex items-center justify-center">
                        <i class="fas fa-home text-brand-600 text-sm"></i>
                    </div>
                    <h2 class="text-base font-bold text-slate-900">Main Pages</h2>
                </div>
                <ul class="space-y-2">
                    @foreach([['home', 'Home', 'fa-house'], ['about', 'About Me', 'fa-user'], ['skills', 'Skills', 'fa-code'], ['projects', 'Projects', 'fa-briefcase'], ['blogs', 'Blog & Articles', 'fa-pen-nib'], ['contact', 'Contact', 'fa-envelope']] as [$route, $label, $icon])
                    <li>
                        <a href="{{ route($route) }}"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-brand-50 hover:text-brand-700 transition-all duration-200 group">
                            <i class="fas {{ $icon }} w-4 text-brand-400 group-hover:text-brand-600 text-xs"></i>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Featured Projects --}}
            <div class="card-premium p-5 sm:p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-9 h-9 rounded-xl bg-emerald-100 flex items-center justify-center">
                        <i class="fas fa-rocket text-emerald-600 text-sm"></i>
                    </div>
                    <h2 class="text-base font-bold text-slate-900">Featured Projects</h2>
                </div>
                <ul class="space-y-2">
                    @foreach([
                        ['http://easysale.amwey.site/', 'EasySale ERP'],
                        ['http://dms.utkorshoit.com', 'Dealership Management System'],
                        ['https://qms.e-ddl.com/', 'Quality Management System'],
                        ['https://gms.e-ddl.com/', 'Grievance Management System'],
                        ['http://bakul.amwey.site/', 'Scrap Management System'],
                        ['http://ayesh.utkorshoit.com', 'Restaurant Billing System'],
                    ] as [$url, $label])
                    <li>
                        <a href="{{ $url }}" target="_blank"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-emerald-50 hover:text-emerald-700 transition-all duration-200 group">
                            <i class="fas fa-external-link-alt w-4 text-emerald-400 group-hover:text-emerald-600 text-xs"></i>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Quick Access --}}
            <div class="card-premium p-5 sm:p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-9 h-9 rounded-xl bg-purple-100 flex items-center justify-center">
                        <i class="fas fa-link text-purple-600 text-sm"></i>
                    </div>
                    <h2 class="text-base font-bold text-slate-900">Quick Access</h2>
                </div>
                <ul class="space-y-2">
                    <li>
                        <a href="https://github.com/Mr-Aananda" target="_blank"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-purple-50 hover:text-purple-700 transition-all duration-200 group">
                            <i class="fab fa-github w-4 text-purple-400 group-hover:text-purple-600 text-sm"></i>
                            GitHub Profile
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/mr-aananda/" target="_blank"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-purple-50 hover:text-purple-700 transition-all duration-200 group">
                            <i class="fab fa-linkedin-in w-4 text-purple-400 group-hover:text-purple-600 text-sm"></i>
                            LinkedIn Profile
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/8801971072007" target="_blank"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-purple-50 hover:text-purple-700 transition-all duration-200 group">
                            <i class="fab fa-whatsapp w-4 text-purple-400 group-hover:text-purple-600 text-sm"></i>
                            WhatsApp
                        </a>
                    </li>
                    <li>
                        <a href="mailto:rmananda007@gmail.com"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-purple-50 hover:text-purple-700 transition-all duration-200 group">
                            <i class="fas fa-envelope w-4 text-purple-400 group-hover:text-purple-600 text-xs"></i>
                            Email Me
                        </a>
                    </li>
                    <li class="border-t border-slate-100 pt-2 mt-1">
                        <a href="{{ route('privacy') }}"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-purple-50 hover:text-purple-700 transition-all duration-200 group">
                            <i class="fas fa-shield-alt w-4 text-purple-400 group-hover:text-purple-600 text-xs"></i>
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}"
                           class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm text-slate-600
                                  hover:bg-purple-50 hover:text-purple-700 transition-all duration-200 group">
                            <i class="fas fa-file-contract w-4 text-purple-400 group-hover:text-purple-600 text-xs"></i>
                            Terms of Service
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Back to home --}}
        <div class="mt-10 text-center">
            <a href="{{ route('home') }}"
               class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-semibold
                      bg-gradient-to-r from-brand-600 to-accent-600 text-white
                      hover:from-brand-500 hover:to-accent-500 hover:shadow-glow-brand
                      transition-all duration-300 transform hover:-translate-y-0.5">
                <i class="fas fa-arrow-left text-xs"></i> Back to Home
            </a>
        </div>

    </div>
</section>
@endsection
