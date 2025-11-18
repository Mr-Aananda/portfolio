<!-- Blogs Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        @if (!request()->is('about'))
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Latest Blogs</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-500 text-lg">
                    Recent thoughts and tutorials on web development and technology.
                </p>
            </div>
        @endif

        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <!-- Blog Post 1 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-500"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-semibold">
                            Laravel
                        </span>
                        <span class="text-gray-500 text-sm">March 15, 2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                        Laravel Best Practices 2024
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Essential practices for building maintainable and scalable Laravel applications in the current
                        year.
                    </p>
                    <a href="{{ route('blogs') }}"
                        class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                        Read More
                        <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-semibold">
                            Vue.js
                        </span>
                        <span class="text-gray-500 text-sm">March 10, 2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                        Vue 3 Composition API Guide
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Mastering the new Composition API with practical examples and real-world use cases.
                    </p>
                    <a href="{{ route('blogs') }}"
                        class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                        Read More
                        <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-500"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full font-semibold">
                            Tailwind
                        </span>
                        <span class="text-gray-500 text-sm">March 5, 2024</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                        Advanced Tailwind Patterns
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Creating reusable components and design systems with Tailwind CSS advanced features.
                    </p>
                    <a href="{{ route('blogs') }}"
                        class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center">
                        Read More
                        <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>
            </article>
        </div>

        <div class="text-center">
            <a href="{{ route('blogs') }}"
                class="inline-flex items-center bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-semibold">
                View All Blogs
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
