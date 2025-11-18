@extends('layouts.frontend.app')

@section('title', 'Blogs - MR. Aananda')

@section('content')
    <!-- Page Header -->
    <div class="pt-24 pb-16 bg-gradient-to-r from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 text-center">My Blogs</h1>
            <p class="text-lg text-gray-600 text-center mt-4"> Sharing insights, tutorials, and thoughts on web development, technology trends, and programming best practices.</p>
        </div>
    </div>

    <!-- Featured Blog Post -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Post</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Latest insights and deep dives into technology</p>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 border border-blue-100">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <span class="inline-block bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                            Latest
                        </span>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                            Building Scalable Laravel Applications: Best Practices and Patterns
                        </h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Explore advanced Laravel architecture patterns, database optimization techniques,
                            and deployment strategies for building robust, scalable web applications that
                            can handle millions of requests.
                        </p>
                        <div class="flex items-center space-x-4 mb-4">
                            <span class="flex items-center text-gray-500 text-sm">
                                <i class="fas fa-calendar mr-2"></i>
                                March 15, 2024
                            </span>
                            <span class="flex items-center text-gray-500 text-sm">
                                <i class="fas fa-clock mr-2"></i>
                                8 min read
                            </span>
                            <span class="flex items-center text-gray-500 text-sm">
                                <i class="fas fa-tag mr-2"></i>
                                Laravel
                            </span>
                        </div>
                        <a href="#" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-semibold">
                            Read Full Article
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="flex justify-center">
                        <div class="w-full h-64 bg-gradient-to-br from-blue-400 to-purple-500 rounded-xl flex items-center justify-center text-white">
                            <i class="fas fa-laptop-code text-6xl opacity-80"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">All Articles</h2>
                <p class="text-gray-600">Browse through my latest writings and tutorials</p>
            </div>

            <!-- Categories Filter -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold transition duration-300">
                    All
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    Laravel
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    Vue.js
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    Tailwind CSS
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    DevOps
                </button>
            </div>

            <!-- Blog Posts Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500"></div>
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-3">
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-semibold">
                                Vue.js
                            </span>
                            <span class="text-gray-500 text-sm">March 10, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Vue 3 Composition API: A Complete Guide with Real-World Examples
                        </h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Master the new Composition API in Vue 3 with practical examples and learn how to build more maintainable and scalable applications.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                6 min read
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                                Read More
                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-500"></div>
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-3">
                            <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full font-semibold">
                                Tailwind CSS
                            </span>
                            <span class="text-gray-500 text-sm">March 5, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Advanced Tailwind CSS: Custom Components and Design Systems
                        </h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Learn how to create reusable components, design systems, and advanced layouts using Tailwind CSS with real project examples.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                10 min read
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                                Read More
                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-orange-400 to-red-500"></div>
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-3">
                            <span class="bg-orange-100 text-orange-800 text-xs px-3 py-1 rounded-full font-semibold">
                                DevOps
                            </span>
                            <span class="text-gray-500 text-sm">February 28, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Dockerizing Laravel Applications: From Development to Production
                        </h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Complete guide to containerizing Laravel applications with Docker, including multi-stage builds, optimization, and production deployment.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                12 min read
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                                Read More
                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 4 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-cyan-500"></div>
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-3">
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-semibold">
                                Laravel
                            </span>
                            <span class="text-gray-500 text-sm">February 20, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Laravel Livewire: Building Dynamic Interfaces Without JavaScript
                        </h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Discover how to build modern, dynamic web interfaces using Laravel Livewire while writing minimal JavaScript code.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                7 min read
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                                Read More
                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 5 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-indigo-400 to-purple-500"></div>
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-3">
                            <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full font-semibold">
                                Database
                            </span>
                            <span class="text-gray-500 text-sm">February 15, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            MySQL Performance Optimization: Indexing and Query Tuning
                        </h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Advanced techniques for optimizing MySQL database performance, including proper indexing strategies and query optimization.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                9 min read
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                                Read More
                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 6 -->
                <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-teal-400 to-green-500"></div>
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-3">
                            <span class="bg-teal-100 text-teal-800 text-xs px-3 py-1 rounded-full font-semibold">
                                API
                            </span>
                            <span class="text-gray-500 text-sm">February 10, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Building RESTful APIs with Laravel: Best Practices and Security
                        </h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Comprehensive guide to building secure, scalable RESTful APIs with Laravel, including authentication, validation, and testing.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-sm flex items-center">
                                <i class="fas fa-clock mr-1"></i>
                                11 min read
                            </span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                                Read More
                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-white text-blue-600 border-2 border-blue-600 px-8 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300 font-semibold">
                    Load More Articles
                </button>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Simple category filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.bg-white.text-gray-700'); // Category buttons

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active state from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-blue-600', 'text-white', 'border-blue-500');
                    btn.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
                });

                // Add active state to clicked button
                this.classList.remove('bg-white', 'text-gray-700', 'border-gray-300');
                this.classList.add('bg-blue-600', 'text-white', 'border-blue-500');

                // Here you would typically filter the blog posts
                // For now, we'll just show an alert
                const category = this.textContent.trim();
                alert(`Filtering by: ${category}`);
            });
        });

        // Load more functionality
        const loadMoreBtn = document.querySelector('button.bg-white.text-blue-600');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                alert('Loading more articles...');
                // Here you would typically load more posts via AJAX
            });
        }
    });
</script>
@endpush
