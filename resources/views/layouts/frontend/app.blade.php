<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MR. Aananda — Software Engineer (Backend-Focused) specializing in Laravel, PHP, REST APIs, and Vue.js. Building scalable enterprise applications.">
    <meta name="keywords" content="Software Engineer, Backend Developer, Laravel, PHP, Vue.js, MySQL, REST APIs, Bangladesh, Portfolio">
    <meta name="author" content="Mahmudur Rahman Ananda">
    <meta property="og:title" content="MR. Aananda - Software Engineer (Backend-Focused)">
    <meta property="og:description" content="Backend-focused Software Engineer skilled in Laravel, PHP, Vue.js, REST APIs, and MySQL.">
    <meta property="og:type" content="website">
    <title>@yield('title', 'MR. Aananda - Software Engineer (Backend-Focused)')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/assets/icons/icon.png') }}">

    <!-- Fonts: Inter + JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons & CDN preconnect -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Preload critical hero image -->
    <link rel="preload" as="image" href="{{ Vite::asset('resources/assets/images/hero.webp') }}" type="image/webp">

    <!-- Vite Assets (CSS + JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-900">

    <!-- Navigation -->
    <x-frontend.navigation />

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-frontend.footer />

    <!-- Global Reveal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Intersection Observer for scroll reveal animations
            const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('revealed');
                        }, (entry.target.dataset.delay || 0));
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

            revealElements.forEach(el => revealObserver.observe(el));

            // Skill bar animation
            const skillBars = document.querySelectorAll('[data-percentage]');
            const skillObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const bar = entry.target;
                        const percentage = bar.getAttribute('data-percentage');
                        setTimeout(() => { bar.style.width = percentage + '%'; }, 300);
                        skillObserver.unobserve(bar);
                    }
                });
            }, { threshold: 0.4 });
            skillBars.forEach(bar => skillObserver.observe(bar));

            // Animated counter
            const counters = document.querySelectorAll('[data-count]');
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.getAttribute('data-count'));
                        const duration = 1500;
                        const step = target / (duration / 16);
                        let current = 0;
                        const timer = setInterval(() => {
                            current += step;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            el.textContent = Math.floor(current) + '+';
                        }, 16);
                        counterObserver.unobserve(el);
                    }
                });
            }, { threshold: 0.5 });
            counters.forEach(counter => counterObserver.observe(counter));
        });
    </script>

    @stack('scripts')
</body>
</html>
