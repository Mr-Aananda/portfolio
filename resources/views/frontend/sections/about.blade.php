<!-- About Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        @if (!request()->is('about'))
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">About Me</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-500 text-lg">
                    A blend of creativity, clean code, and modern development.
                </p>
            </div>
        @endif

        <div class="grid md:grid-cols-2 gap-12">

            <!-- Left Column -->
            <div class="flex flex-col h-full space-y-8">

                <!-- Journey Section -->
                <div class="bg-white shadow-sm p-8 rounded-2xl border border-gray-100">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-5">My Journey</h3>

                    <div class="space-y-4">
                        <p class="text-gray-600 leading-relaxed">
                            With over <span class="font-semibold text-blue-600">4 years of experience</span>, I build
                            responsive, intuitive, and scalable web applications designed for performance and
                            user satisfaction.
                        </p>

                        <p class="text-gray-600 leading-relaxed">
                            I work confidently across frontend and backend using Laravel, Vue.js, React, Tailwind,
                            and Alpine.js. My workflow centers on clean architecture, modern best practices, and
                            long-term maintainability.
                        </p>

                        <p class="text-gray-600 leading-relaxed">
                            Outside development, I enjoy exploring new technologies, building side projects,
                            contributing to the community, and spending time outdoors to recharge.
                        </p>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center p-4 rounded-xl bg-gray-50 hover:bg-blue-100/50 transition">
                        <i class="fas fa-map-marker-alt text-blue-600 mr-3 text-lg"></i>
                        <span class="text-gray-700 font-medium">Tongi, Gazipur, Dhaka</span>
                    </div>
                    <div class="flex items-center p-4 rounded-xl bg-gray-50 hover:bg-blue-100/50 transition">
                        <i class="fas fa-envelope text-blue-600 mr-3 text-lg"></i>
                        <span class="text-gray-700 font-medium">rmananda007@gmail.com</span>
                    </div>
                    <div class="flex items-center p-4 rounded-xl bg-gray-50 hover:bg-blue-100/50 transition">
                        <i class="fas fa-phone text-blue-600 mr-3 text-lg"></i>
                        <span class="text-gray-700 font-medium">+880 1971 072007</span>
                    </div>
                    <div class="flex items-center p-4 rounded-xl bg-gray-50 hover:bg-blue-100/50 transition">
                        <i class="fas fa-calendar text-blue-600 mr-3 text-lg"></i>
                        <span class="text-gray-700 font-medium">Available for work</span>
                    </div>
                </div>

            </div>

            <!-- Right Column -->
            <div class="flex flex-col h-full space-y-8">

                <!-- Stats Section -->
                <div class="p-0">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">My Achievements</h3>
                    <div class="grid grid-cols-2 gap-2">

                        <x-frontend.stats-card number="20" text="Projects Completed" bgColor="bg-blue-50"
                            class="border border-blue-200 hover:shadow-md transition h-full rounded-lg p-2" />

                        <x-frontend.stats-card number="4" text="Years Experience" bgColor="bg-green-50"
                            class="border border-green-200 hover:shadow-md transition h-full rounded-lg p-2" />

                        <x-frontend.stats-card number="30" text="Happy Clients" bgColor="bg-purple-50"
                            class="border border-purple-200 hover:shadow-md transition h-full rounded-lg p-2" />

                        <x-frontend.stats-card number="10" text="Technology Used" bgColor="bg-orange-50"
                            class="border border-orange-200 hover:shadow-md transition h-full rounded-lg p-2" />

                    </div>
                </div>

                <!-- Skills / Approach Section -->
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-xl border border-blue-200 shadow-sm">
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">My Approach</h4>
                    <p class="text-gray-600 mb-2 leading-relaxed text-sm">
                        I create solutions that are functional, visually polished, and user-centered — blending clean
                        code with thoughtful design.
                    </p>

                    <div class="flex flex-wrap gap-1">
                        <span
                            class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium border border-blue-200">
                            Responsive Design
                        </span>
                        <span
                            class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium border border-green-200">
                            Clean Code
                        </span>
                        <span
                            class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium border border-purple-200">
                            User Experience
                        </span>
                        <span
                            class="px-2 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium border border-orange-200">
                            Modern Technology
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
