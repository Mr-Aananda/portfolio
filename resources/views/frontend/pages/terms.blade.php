@extends('layouts.frontend.app')

@section('title', 'Terms of Service - Mahmudur Rahman Ananda')

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
            <i class="fas fa-file-contract"></i> Legal
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white mt-4 mb-4">Terms of Service</h1>
        <p class="text-slate-400 text-base sm:text-lg">Last updated: June 2025</p>
    </div>
</div>

{{-- Content --}}
<section class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="space-y-8">

            <div class="p-6 rounded-2xl bg-brand-50 border border-brand-100">
                <p class="text-slate-700 text-base leading-relaxed m-0">
                    By accessing and using this portfolio website of <strong>Mahmudur Rahman Ananda</strong>, you agree to comply with and be bound by the following terms and conditions of use.
                </p>
            </div>

            @php
            $sections = [
                ['icon' => 'fas fa-laptop-code', 'bgClass' => 'bg-brand-100', 'textClass' => 'text-brand-600', 'title' => 'Use of Website', 'content' => 'This portfolio website is intended solely for the purpose of showcasing my professional work, skills, and projects. You are welcome to browse the content for informational purposes. Any unauthorized use of the content or projects displayed here is strictly prohibited.'],
                ['icon' => 'fas fa-copyright', 'bgClass' => 'bg-emerald-100', 'textClass' => 'text-emerald-600', 'title' => 'Intellectual Property', 'content' => 'All content on this website — including but not limited to text, code samples, design, and project descriptions — is the intellectual property of Mahmudur Rahman Ananda unless otherwise stated. You may not reproduce, distribute, or create derivative works without explicit written permission.'],
                ['icon' => 'fas fa-comments', 'bgClass' => 'bg-purple-100', 'textClass' => 'text-purple-600', 'title' => 'Contact & Inquiries', 'content' => 'When you submit the contact form, you agree that the information provided is accurate and that you are not submitting spam or malicious content. I reserve the right to not respond to inquiries that are inappropriate or outside the scope of my services.'],
                ['icon' => 'fas fa-project-diagram', 'bgClass' => 'bg-orange-100', 'textClass' => 'text-orange-600', 'title' => 'Project Demos & Links', 'content' => 'Live demo links to client projects are provided for demonstration purposes only. These projects are owned by their respective clients. I do not claim ownership of client projects, only the development work performed. Demo access may be limited or changed without notice.'],
                ['icon' => 'fas fa-shield-alt', 'bgClass' => 'bg-cyan-100', 'textClass' => 'text-cyan-600', 'title' => 'Disclaimer of Warranties', 'content' => 'This website and its content are provided "as is" without any warranties, expressed or implied. I do not warrant that the website will be error-free or uninterrupted. The information provided is for general informational purposes.'],
                ['icon' => 'fas fa-gavel', 'bgClass' => 'bg-slate-100', 'textClass' => 'text-slate-600', 'title' => 'Governing Law', 'content' => 'These terms are governed by the laws of Bangladesh. Any disputes arising from your use of this website shall be subject to the exclusive jurisdiction of the courts of Bangladesh.'],
            ];
            @endphp

            @foreach($sections as $i => $section)
            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg {{ $section['bgClass'] }} flex items-center justify-center flex-shrink-0">
                        <i class="{{ $section['icon'] }} {{ $section['textClass'] }} text-sm"></i>
                    </span>
                    {{ $i + 1 }}. {{ $section['title'] }}
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed pl-11">{{ $section['content'] }}</p>
            </div>
            @endforeach

            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <h2 class="text-xl font-bold text-slate-900 mb-2">Changes to These Terms</h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    I reserve the right to update these Terms of Service at any time. Changes will be effective immediately upon posting. Continued use of the website constitutes your acceptance of the revised terms.
                </p>
                <p class="text-slate-600 text-sm sm:text-base mt-3">
                    For questions, contact: <a href="mailto:rmananda007@gmail.com" class="text-brand-600 hover:underline font-semibold">rmananda007@gmail.com</a>
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
            <a href="{{ route('privacy') }}"
               class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold
                      border border-slate-200 text-slate-600 hover:border-brand-300 hover:text-brand-600 transition-all duration-300">
                Privacy Policy <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</section>
@endsection
