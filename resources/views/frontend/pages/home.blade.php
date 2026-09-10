@extends('layouts.frontend.app')

@section('title', 'MR. Aananda - Software Engineer (Backend-Focused)')

@section('content')
    <!-- Hero Section -->
    @include('frontend.sections.hero')

    <!-- About Section -->
    @include('frontend.sections.about')

    <!-- Skills Section -->
    @include('frontend.sections.skills')

    <!-- Projects Section -->
    @include('frontend.sections.projects')

    <!-- Projects Section -->
    @include('frontend.sections.blogs')

    <!-- Contact Section -->
    @include('frontend.sections.contact')
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Animate skill bars when they come into view
            const skillBars = document.querySelectorAll('[data-percentage]');

            const skillObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const skillBar = entry.target;
                        const percentage = skillBar.getAttribute('data-percentage');
                        skillBar.style.width = percentage + '%';
                    }
                });
            }, {
                threshold: 0.5
            });

            skillBars.forEach(bar => skillObserver.observe(bar));

            // Smooth scrolling for anchor links within home page
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    if (this.getAttribute('href') !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
