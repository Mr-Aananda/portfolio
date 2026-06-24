@extends('layouts.frontend.app')

@section('title', 'Privacy Policy - Mahmudur Rahman Ananda')

@section('content')
{{-- Page Header --}}
<div class="pt-24 pb-12 sm:pb-16 relative overflow-hidden"
     style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);">
    <div class="absolute inset-0 opacity-10 pointer-events-none"
         style="background-image: radial-gradient(circle at 20% 50%, rgba(99,102,241,0.8) 0%, transparent 60%),
                                  radial-gradient(circle at 80% 50%, rgba(168,85,247,0.6) 0%, transparent 60%);">
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center relative z-10">
        <span class="section-badge mb-4" style="background:rgba(99,102,241,0.15);border-color:rgba(99,102,241,0.4);color:#a5b4fc;">
            <i class="fas fa-shield-alt"></i> Legal
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-4 mb-4">Privacy Policy</h1>
        <p class="text-slate-400 text-base sm:text-lg">Last updated: June 2025</p>
    </div>
</div>

{{-- Content --}}
<section class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 prose prose-slate max-w-none">

        <div class="space-y-8">

            <div class="p-6 rounded-2xl bg-brand-50 border border-brand-100">
                <p class="text-slate-700 text-base leading-relaxed m-0">
                    Welcome to the portfolio website of <strong>Mahmudur Rahman Ananda</strong>. This Privacy Policy explains how I collect, use, and protect your information when you visit this website.
                </p>
            </div>

            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-brand-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-database text-brand-600 text-sm"></i>
                    </span>
                    Information I Collect
                </h2>
                <div class="space-y-2 text-slate-600 text-sm sm:text-base leading-relaxed pl-11">
                    <p>When you use the contact form on this website, I may collect:</p>
                    <ul class="space-y-1 list-disc pl-5">
                        <li>Your name and email address</li>
                        <li>Your phone number (if provided)</li>
                        <li>The message content you submit</li>
                        <li>Basic technical information like your IP address and browser type (for security purposes)</li>
                    </ul>
                    <p>I do not use cookies for tracking, and I do not collect any personal data without your explicit consent via the contact form.</p>
                </div>
            </div>

            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check-circle text-emerald-600 text-sm"></i>
                    </span>
                    How I Use Your Information
                </h2>
                <div class="space-y-2 text-slate-600 text-sm sm:text-base leading-relaxed pl-11">
                    <ul class="space-y-1 list-disc pl-5">
                        <li>To respond to your inquiries and project requests</li>
                        <li>To communicate about potential collaborations or freelance opportunities</li>
                        <li>To improve the website experience based on feedback</li>
                    </ul>
                    <p>I will never sell, rent, or share your personal information with third parties for marketing purposes.</p>
                </div>
            </div>

            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-lock text-purple-600 text-sm"></i>
                    </span>
                    Data Security
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed pl-11">
                    This website is built with Laravel and uses industry-standard security practices. All form submissions are protected with CSRF tokens. Your information is stored securely and accessed only by me for the purpose of responding to your messages.
                </p>
            </div>

            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user-shield text-orange-600 text-sm"></i>
                    </span>
                    Your Rights
                </h2>
                <div class="text-slate-600 text-sm sm:text-base leading-relaxed pl-11">
                    <p>You have the right to:</p>
                    <ul class="space-y-1 list-disc pl-5 mt-2">
                        <li>Request access to the personal data I hold about you</li>
                        <li>Request deletion of your personal data</li>
                        <li>Withdraw consent at any time</li>
                    </ul>
                    <p class="mt-3">To exercise any of these rights, please contact me at <a href="mailto:rmananda007@gmail.com" class="text-brand-600 hover:text-brand-700 font-semibold">rmananda007@gmail.com</a>.</p>
                </div>
            </div>

            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-cyan-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-external-link-alt text-cyan-600 text-sm"></i>
                    </span>
                    Third-Party Links
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed pl-11">
                    This website may contain links to external projects and live demos. I am not responsible for the privacy practices of those external websites. Please review their privacy policies independently.
                </p>
            </div>

            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-envelope text-slate-600 text-sm"></i>
                    </span>
                    Contact
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed pl-11">
                    If you have any questions about this Privacy Policy, please contact me:<br>
                    📧 <a href="mailto:rmananda007@gmail.com" class="text-brand-600 hover:underline font-semibold">rmananda007@gmail.com</a><br>
                    📞 <a href="tel:+8801971072007" class="text-brand-600 hover:underline font-semibold">+880 1971 072007</a>
                </p>
            </div>

        </div>

        <div class="mt-10 pt-8 border-t border-slate-100 flex flex-col sm:flex-row gap-4">
            <a href="{{ route('home') }}"
               class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold
                      bg-gradient-to-r from-brand-600 to-accent-600 text-white
                      hover:from-brand-500 hover:to-accent-500 transition-all duration-300">
                <i class="fas fa-arrow-left text-xs"></i> Back to Home
            </a>
            <a href="{{ route('terms') }}"
               class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold
                      border border-slate-200 text-slate-600 hover:border-brand-300 hover:text-brand-600 transition-all duration-300">
                Terms of Service <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</section>
@endsection
