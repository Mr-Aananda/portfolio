@extends('layouts.frontend.app')

@section('title', 'Blog & Articles - Mahmudur Rahman Ananda')

@section('content')

{{-- Page Header --}}
<div class="pt-24 pb-16 sm:pb-20 relative overflow-hidden"
     style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-brand-600/15 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-56 h-56 bg-accent-500/10 rounded-full blur-3xl animate-float-delayed"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="section-badge" style="background:rgba(99,102,241,0.15);border-color:rgba(99,102,241,0.4);color:#a5b4fc;">
            <i class="fas fa-pen-nib"></i> Blog & Insights
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-white mt-4 mb-4">
            Thoughts & <span class="gradient-text">Articles</span>
        </h1>
        <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto">
            Sharing insights, tutorials, and lessons learned from real-world web development projects.
        </p>
    </div>
</div>

{{-- Featured Post --}}
<section class="py-12 sm:py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10 sm:mb-12 reveal">
            <span class="section-badge"><i class="fas fa-star"></i> Featured</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3">Featured Article</h2>
            <div class="section-line"></div>
        </div>

        <div class="reveal card-premium overflow-hidden">
            <div class="grid lg:grid-cols-2 items-stretch">
                {{-- Image side --}}
                <div class="h-56 sm:h-72 lg:h-auto bg-gradient-to-br from-brand-500 via-indigo-600 to-accent-600
                            flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 opacity-20"
                         style="background-image: radial-gradient(circle at 30% 70%, rgba(255,255,255,0.4) 0%, transparent 50%);"></div>
                    <div class="text-center text-white px-8 relative z-10">
                        <div class="w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-laravel text-4xl text-white"></i>
                        </div>
                        <span class="text-sm font-semibold bg-white/20 px-3 py-1 rounded-full">Laravel</span>
                    </div>
                </div>

                {{-- Content side --}}
                <div class="p-6 sm:p-8 lg:p-10 flex flex-col justify-center">
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="px-3 py-1 bg-brand-100 text-brand-700 text-xs font-bold rounded-lg uppercase tracking-wider">Latest</span>
                        <span class="flex items-center gap-1.5 text-slate-400 text-xs">
                            <i class="far fa-calendar"></i> June 15, 2025
                        </span>
                        <span class="flex items-center gap-1.5 text-slate-400 text-xs">
                            <i class="far fa-clock"></i> 10 min read
                        </span>
                    </div>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-slate-900 mb-4 leading-snug">
                        AI-Assisted Laravel Development: Using GitHub Copilot & Claude in Real Projects
                    </h3>
                    <p class="text-slate-500 text-sm sm:text-base leading-relaxed mb-6">
                        How I integrate AI tools like GitHub Copilot, Claude, and ChatGPT into my daily Laravel development workflow — from writing complex Eloquent queries to generating migration schemas and debugging production issues 10x faster.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-2.5 py-1 bg-brand-50 text-brand-700 text-xs font-semibold rounded-lg border border-brand-100">Laravel</span>
                        <span class="px-2.5 py-1 bg-violet-50 text-violet-700 text-xs font-semibold rounded-lg border border-violet-100">AI Tools</span>
                        <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-lg border border-emerald-100">GitHub Copilot</span>
                        <span class="px-2.5 py-1 bg-orange-50 text-orange-700 text-xs font-semibold rounded-lg border border-orange-100">Productivity</span>
                    </div>
                    <div>
                        <a href="#"
                           class="inline-flex items-center gap-2 px-5 py-3 rounded-xl font-semibold text-sm
                                  bg-gradient-to-r from-brand-600 to-accent-600 text-white
                                  hover:from-brand-500 hover:to-accent-500 hover:shadow-glow-brand
                                  transition-all duration-300 transform hover:-translate-y-0.5">
                            Read Full Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- All Articles --}}
<section class="py-12 sm:py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10 sm:mb-12 reveal">
            <span class="section-badge"><i class="fas fa-newspaper"></i> All Articles</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3">Latest Writings</h2>
            <div class="section-line"></div>
        </div>

        {{-- Category Filter --}}
        <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-10 reveal">
            @php
            $categories = ['All', 'Laravel', 'Vue.js', 'AI & Tools', 'Database', 'DevOps', 'Career'];
            @endphp
            @foreach($categories as $i => $cat)
            <button onclick="filterBlogs('{{ $cat }}')"
                    data-cat="{{ $cat }}"
                    class="blog-filter-btn {{ $i === 0 ? 'bg-gradient-to-r from-brand-600 to-accent-600 text-white shadow-glow-sm' : 'bg-white text-slate-600 border border-slate-200 hover:border-brand-300 hover:text-brand-600' }}
                           px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200">
                {{ $cat }}
            </button>
            @endforeach
        </div>

        {{-- Blog Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8" id="blog-grid">

            @php
            $posts = [
                [
                    'gradient' => 'from-brand-500 to-blue-600',
                    'icon' => 'fab fa-laravel',
                    'category' => 'Laravel',
                    'cat_color' => 'brand',
                    'date' => 'June 10, 2025',
                    'read' => '8 min',
                    'title' => 'Building Scalable Laravel APIs: Best Practices for 2025',
                    'excerpt' => 'Explore advanced Laravel architecture patterns, API versioning, resource transformation with Spatie, and rate limiting strategies for production-grade applications.',
                    'tags' => ['Laravel', 'API', 'PHP'],
                ],
                [
                    'gradient' => 'from-emerald-500 to-teal-600',
                    'icon' => 'fab fa-vuejs',
                    'category' => 'Vue.js',
                    'cat_color' => 'emerald',
                    'date' => 'May 28, 2025',
                    'read' => '6 min',
                    'title' => 'Vue 3 + Pinia: State Management for Large Business Applications',
                    'excerpt' => 'A practical guide to managing complex application state in Vue 3 using Pinia — with real examples from ERP and management system projects I have built.',
                    'tags' => ['Vue.js', 'Pinia', 'JavaScript'],
                ],
                [
                    'gradient' => 'from-violet-500 to-fuchsia-600',
                    'icon' => 'fas fa-robot',
                    'category' => 'AI & Tools',
                    'cat_color' => 'purple',
                    'date' => 'May 15, 2025',
                    'read' => '7 min',
                    'title' => '5 AI Tools That Doubled My Development Speed',
                    'excerpt' => 'A hands-on review of GitHub Copilot, Claude AI, ChatGPT, Cursor, and Pieces — how I use each tool differently and which ones give the best ROI for full-stack PHP developers.',
                    'tags' => ['AI Tools', 'Productivity', 'GitHub Copilot'],
                ],
                [
                    'gradient' => 'from-amber-500 to-orange-600',
                    'icon' => 'fas fa-database',
                    'category' => 'Database',
                    'cat_color' => 'orange',
                    'date' => 'May 5, 2025',
                    'read' => '9 min',
                    'title' => 'MySQL Performance at Scale: Indexing Strategies for ERP Systems',
                    'excerpt' => 'Practical database optimization lessons from building business ERPs with millions of rows — covering composite indexes, query analysis, and N+1 elimination in Laravel Eloquent.',
                    'tags' => ['MySQL', 'Database', 'Performance'],
                ],
                [
                    'gradient' => 'from-cyan-500 to-sky-600',
                    'icon' => 'fas fa-server',
                    'category' => 'DevOps',
                    'cat_color' => 'cyan',
                    'date' => 'April 22, 2025',
                    'read' => '10 min',
                    'title' => 'Deploying Laravel on VPS with Control Panel: A Complete Guide',
                    'excerpt' => 'Step-by-step guide to deploying and managing Laravel applications on a VPS using modern control panels — covering DNS setup, SSL, queues, cron jobs, and zero-downtime deployments.',
                    'tags' => ['DevOps', 'Server', 'Laravel'],
                ],
                [
                    'gradient' => 'from-pink-500 to-rose-600',
                    'icon' => 'fas fa-briefcase',
                    'category' => 'Career',
                    'cat_color' => 'pink',
                    'date' => 'April 10, 2025',
                    'read' => '5 min',
                    'title' => 'From Junior to Senior Developer: My 4-Year Journey in Bangladesh\'s Tech Sector',
                    'excerpt' => 'Honest reflections on my growth as a full-stack developer — the projects that shaped me, the mistakes that taught me, and advice for developers starting their careers in 2025.',
                    'tags' => ['Career', 'Growth', 'Freelancing'],
                ],
                [
                    'gradient' => 'from-indigo-500 to-brand-600',
                    'icon' => 'fas fa-code-branch',
                    'category' => 'Laravel',
                    'cat_color' => 'brand',
                    'date' => 'March 30, 2025',
                    'read' => '8 min',
                    'title' => 'Laravel Inertia.js: The Best of SPA Without the Complexity',
                    'excerpt' => 'Why I chose Inertia.js over a full SPA architecture for my management systems — covering routing, shared data, authentication, and form handling with Vue 3.',
                    'tags' => ['Laravel', 'Inertia.js', 'Vue.js'],
                ],
                [
                    'gradient' => 'from-teal-500 to-emerald-600',
                    'icon' => 'fas fa-shield-alt',
                    'category' => 'Laravel',
                    'cat_color' => 'emerald',
                    'date' => 'March 15, 2025',
                    'read' => '7 min',
                    'title' => 'Laravel Security Checklist: Protecting Your Business Applications',
                    'excerpt' => 'A practical security checklist I use for every client project — covering authentication, authorization with Spatie Permissions, SQL injection prevention, and CSRF protection.',
                    'tags' => ['Laravel', 'Security', 'Spatie'],
                ],
                [
                    'gradient' => 'from-orange-500 to-red-600',
                    'icon' => 'fas fa-chart-line',
                    'category' => 'Career',
                    'cat_color' => 'orange',
                    'date' => 'February 28, 2025',
                    'read' => '6 min',
                    'title' => 'How to Price Your Freelance Web Development Projects in Bangladesh',
                    'excerpt' => 'Practical pricing strategies for Bangladeshi freelance developers — understanding market rates, value-based pricing, project scoping, and how to avoid undercharging for complex systems.',
                    'tags' => ['Career', 'Freelancing', 'Business'],
                ],
            ];
            @endphp

            @foreach($posts as $i => $post)
            <article class="group card-premium overflow-hidden flex flex-col reveal delay-{{ ($i % 3 + 1) * 100 }}"
                     data-category="{{ $post['category'] }}">
                {{-- Gradient Header --}}
                <div class="h-44 sm:h-48 bg-gradient-to-br {{ $post['gradient'] }} relative overflow-hidden flex-shrink-0">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center
                                    group-hover:scale-110 transition-transform duration-500">
                            <i class="{{ $post['icon'] }} text-white text-2xl"></i>
                        </div>
                    </div>
                    <div class="absolute top-3 left-3">
                        <span class="px-2.5 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-semibold rounded-lg">
                            {{ $post['category'] }}
                        </span>
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-5 sm:p-6 flex flex-col flex-1">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-1.5 text-slate-400 text-xs">
                            <i class="far fa-clock"></i>
                            <span>{{ $post['read'] }} read</span>
                        </div>
                        <span class="text-slate-400 text-xs">{{ $post['date'] }}</span>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-slate-800 mb-2 leading-snug
                               group-hover:text-brand-600 transition-colors duration-300 flex-none">
                        {{ $post['title'] }}
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4 flex-1">{{ $post['excerpt'] }}</p>

                    <div class="flex flex-wrap gap-1.5 mb-4">
                        @foreach($post['tags'] as $tag)
                        <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-xs font-medium rounded-md">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <a href="#"
                       class="inline-flex items-center gap-1.5 text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors duration-200">
                        Read More
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </article>
            @endforeach

        </div>

        {{-- Load More --}}
        <div class="text-center mt-10 sm:mt-12">
            <button id="load-more-btn"
                class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl font-semibold text-sm
                       border-2 border-brand-500 text-brand-600
                       hover:bg-brand-600 hover:text-white hover:shadow-glow-brand
                       transition-all duration-300 transform hover:-translate-y-0.5">
                <i class="fas fa-plus text-xs"></i> Load More Articles
            </button>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Category filter
    window.filterBlogs = function(category) {
        const buttons = document.querySelectorAll('.blog-filter-btn');
        buttons.forEach(btn => {
            const isActive = btn.dataset.cat === category;
            btn.className = `blog-filter-btn px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 ${
                isActive
                    ? 'bg-gradient-to-r from-brand-600 to-accent-600 text-white shadow-glow-sm'
                    : 'bg-white text-slate-600 border border-slate-200 hover:border-brand-300 hover:text-brand-600'
            }`;
        });

        const articles = document.querySelectorAll('#blog-grid article');
        articles.forEach(article => {
            const cat = article.dataset.category;
            if (category === 'All' || cat === category) {
                article.style.display = '';
                setTimeout(() => article.classList.add('revealed'), 50);
            } else {
                article.style.display = 'none';
                article.classList.remove('revealed');
            }
        });
    };

    // Load More (demo)
    document.getElementById('load-more-btn')?.addEventListener('click', function() {
        this.innerHTML = '<i class="fas fa-check text-xs"></i> All articles loaded!';
        this.disabled = true;
        this.classList.add('opacity-60', 'cursor-not-allowed');
    });
});
</script>
@endpush
