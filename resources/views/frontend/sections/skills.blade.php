<!-- Skills Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        @if (!request()->is('skills'))
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Technical Expertise</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-500 text-lg">
                    A comprehensive overview of my technical skills and professional competencies.
                </p>
            </div>
        @endif

        <div class="grid lg:grid-cols-2 gap-8 items-stretch"> <!-- Changed items-start to items-stretch -->
            <!-- Technical Skills -->
            <div class="space-y-6 flex flex-col">
                <div class="text-center lg:text-left">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Technical Proficiency</h3>
                    <p class="text-gray-600 text-sm">Modern web technologies and frameworks</p>
                </div>

                <div class="space-y-3 bg-white rounded-xl p-4 border border-gray-200 flex-1">
                    <x-frontend.skill-item name="Laravel & PHP" percentage="95" icon="fab fa-laravel"
                        color="from-red-500 to-pink-600" />
                    <x-frontend.skill-item name="Vue.js, JavaScript & Nuxt.js(Basic)" percentage="92"
                        icon="fab fa-vuejs" color="from-green-500 to-emerald-600" />
                    <x-frontend.skill-item name="Alpine.js, Inertia & React" percentage="75" icon="fas fa-mountain"
                        color="from-blue-500 to-cyan-600" />
                    <x-frontend.skill-item name="Tailwind & Bootstrap" percentage="90" icon="fas fa-palette"
                        color="from-teal-500 to-blue-600" />
                    <x-frontend.skill-item name="MySQL & MariaDB" percentage="90" icon="fas fa-database"
                        color="from-amber-500 to-orange-600" />
                    <x-frontend.skill-item name="cPanel & Hestia" percentage="85" icon="fas fa-server"
                        color="from-gray-500 to-gray-700" />
                    <x-frontend.skill-item name="Nest.js (Learning)" percentage="40" icon="fab fa-node-js"
                        color="from-red-500 to-red-700" />

                </div>
            </div>

            <!-- Professional Skills -->
            <div class="space-y-6 flex flex-col">
                <div class="text-center lg:text-left">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Professional Skills</h3>
                    <p class="text-gray-600 text-sm">Core competencies for team collaboration</p>
                </div>

                <!-- Professional Skills Grid -->
                <div class="grid grid-cols-2 gap-4 flex-1"> <!-- Added flex-1 -->
                    <!-- Communication -->
                    <div
                        class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 text-center group hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 h-full flex flex-col">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-comments text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 mb-1 text-base">Communication</h4>
                            <p class="text-gray-600 text-xs leading-relaxed mb-2">Clear team collaboration</p>
                        </div>
                        <div class="w-full bg-blue-200 rounded-full h-1.5">
                            <div class="bg-blue-600 h-1.5 rounded-full" style="width: 95%"></div>
                        </div>
                    </div>

                    <!-- Team Leadership -->
                    <div
                        class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4 text-center group hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 h-full flex flex-col">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-users text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 mb-1 text-base">Team Leadership</h4>
                            <p class="text-gray-600 text-xs leading-relaxed mb-2">Guiding teams to success</p>
                        </div>
                        <div class="w-full bg-green-200 rounded-full h-1.5">
                            <div class="bg-green-600 h-1.5 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>

                    <!-- Problem Solving -->
                    <div
                        class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4 text-center group hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 h-full flex flex-col">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-lightbulb text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 mb-1 text-base">Problem Solving</h4>
                            <p class="text-gray-600 text-xs leading-relaxed mb-2">Innovative solutions</p>
                        </div>
                        <div class="w-full bg-purple-200 rounded-full h-1.5">
                            <div class="bg-purple-600 h-1.5 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>

                    <!-- Project Management -->
                    <div
                        class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-4 text-center group hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 h-full flex flex-col">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-project-diagram text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 mb-1 text-base">Project Management</h4>
                            <p class="text-gray-600 text-xs leading-relaxed mb-2">Agile delivery</p>
                        </div>
                        <div class="w-full bg-orange-200 rounded-full h-1.5">
                            <div class="bg-orange-600 h-1.5 rounded-full" style="width: 80%"></div>
                        </div>
                    </div>

                    <!-- Time Management -->
                    <div
                        class="bg-gradient-to-br from-cyan-50 to-cyan-100 rounded-xl p-4 text-center group hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 h-full flex flex-col">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-clock text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 mb-1 text-base">Time Management</h4>
                            <p class="text-gray-600 text-xs leading-relaxed mb-2">Efficient task delivery</p>
                        </div>
                        <div class="w-full bg-cyan-200 rounded-full h-1.5">
                            <div class="bg-cyan-600 h-1.5 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>

                    <!-- Adaptability -->
                    <div
                        class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl p-4 text-center group hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 h-full flex flex-col">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-pink-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-105 transition-transform duration-300">
                            <i class="fas fa-sync-alt text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900 mb-1 text-base">Adaptability</h4>
                            <p class="text-gray-600 text-xs leading-relaxed mb-2">Quick learning & flexibility</p>
                        </div>
                        <div class="w-full bg-pink-200 rounded-full h-1.5">
                            <div class="bg-pink-600 h-1.5 rounded-full" style="width: 87%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
