@extends('layouts.frontend.app')

@section('title', 'Projects - MR. Aananda')

@section('content')
    <!-- Page Header -->
    <div class="pt-24 pb-16 bg-gradient-to-r from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 text-center">My Projects</h1>
            <p class="text-lg text-gray-600 text-center mt-4">Explore a collection of modern, efficient business systems designed to solve real-world challenges with practical precision.</p>
        </div>
    </div>

    <!-- Projects Filter -->
    <section class="py-8 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold transition duration-300">
                    All Projects
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    Laravel
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    Vue.js
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    React
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    Management Systems
                </button>
                <button class="bg-white text-gray-700 px-6 py-2 rounded-full font-semibold border border-gray-300 hover:border-blue-500 transition duration-300">
                    E-commerce
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Projects</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Highlighted projects that showcase my expertise in building comprehensive business solutions</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Featured Project 1 - DMS -->
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 border border-blue-100">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold mr-4">
                            Featured
                        </span>
                        <span class="text-gray-500 text-sm">Multiple Deployments</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Dealership Management System (DMS)</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Comprehensive software solution designed to streamline various business operations including inventory management,
                        stock control, supplier/customer transactions, employee management, and integrated SMS system.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">Vue.js</span>
                        <span class="bg-purple-100 text-purple-800 text-sm px-3 py-1 rounded-full">MySQL</span>
                        <span class="bg-red-100 text-red-800 text-sm px-3 py-1 rounded-full">Pinia</span>
                        <span class="bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full">Alpine.js</span>
                    </div>
                    <div class="flex space-x-4">
                        <a href="http://dms.utkorshoit.com" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-semibold" target="_blank">
                            View Live Demo
                        </a>
                        <a href="#" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-50 transition duration-300 font-semibold">
                            Case Study
                        </a>
                    </div>
                </div>

                <!-- Featured Project 2 - Restaurant Management -->
                <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl p-8 border border-green-100">
                    <div class="flex items-center mb-4">
                        <span class="bg-green-600 text-white px-4 py-1 rounded-full text-sm font-semibold mr-4">
                            Featured
                        </span>
                        <span class="text-gray-500 text-sm">Team Project - 60% Contribution</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Restaurant Management & Billing System</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Complete billing and management software integrating modern POS system with inventory management,
                        reservation handling, employee management, and integrated SMS notifications for streamlined restaurant operations.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">Vue.js</span>
                        <span class="bg-purple-100 text-purple-800 text-sm px-3 py-1 rounded-full">Spatie</span>
                        <span class="bg-red-100 text-red-800 text-sm px-3 py-1 rounded-full">MySQL</span>
                        <span class="bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full">Git</span>
                    </div>
                    <div class="flex space-x-4">
                        <a href="http://ayesh.utkorshoit.com" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-300 font-semibold" target="_blank">
                            View Live Demo
                        </a>
                        <a href="#" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-50 transition duration-300 font-semibold">
                            Case Study
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All Projects Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">All Projects</h2>
                <p class="text-gray-600">Browse through my complete portfolio of business management solutions</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Scrap Management System -->
                <x-frontend.project-card
                    title="Scrap Management System"
                    description="Comprehensive solution for scrap handling with purchase consolidation, stock management, POS, expense tracking, payroll, and detailed reporting."
                    :technologies="['Laravel', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="http://bokulstore.apsbd.xyz"
                    githubUrl="#"
                    gradient="from-orange-500 to-amber-600"
                />

                <!-- PMS & Voucher Management -->
                <x-frontend.project-card
                    title="PMS & Voucher Management"
                    description="Dual solutions for garment factories: procurement management and financial voucher system for accurate record-keeping."
                    :technologies="['Laravel', 'Vue.js', 'Pinia', 'MySQL', 'Git']"
                    demoUrl="http://voucher.e-ddl.com"
                    githubUrl="#"
                    gradient="from-purple-500 to-indigo-600"
                />

                <!-- Tailor Management System -->
                <x-frontend.project-card
                    title="Tailor Management System"
                    description="Order management with dynamic measurements handling, distributions, dues management, expenses, payroll, and SMS notifications."
                    :technologies="['Laravel', 'ReactJs', 'MySQL', 'Git']"
                    demoUrl="http://fops.shohozsalesbd.xyz"
                    githubUrl="#"
                    gradient="from-pink-500 to-rose-600"
                />

                <!-- Construction Billing -->
                <x-frontend.project-card
                    title="Construction Billing Application"
                    description="Service creation and proposal management with multiple payment options and integrated SMS communication module."
                    :technologies="['Laravel', 'JavaScript', 'MySQL', 'Git']"
                    demoUrl="https://www.account.ranbuilders.com"
                    githubUrl="#"
                    gradient="from-teal-500 to-cyan-600"
                />

                <!-- Purchase Management -->
                <x-frontend.project-card
                    title="Purchase Management System"
                    description="Streamlined procurement system with supplier management, inventory tracking, and financial reporting capabilities."
                    :technologies="['Laravel', 'Vue.js', 'MySQL', 'Git']"
                    demoUrl="https://e-ddl.com"
                    githubUrl="#"
                    gradient="from-blue-500 to-cyan-600"
                />

                <!-- Invoice Management -->
                <x-frontend.project-card
                    title="Invoice Management System"
                    description="Comprehensive invoicing solution with client management, payment tracking, and financial reporting features."
                    :technologies="['Laravel', 'JavaScript', 'MySQL', 'Git']"
                    demoUrl="#"
                    githubUrl="#"
                    gradient="from-green-500 to-emerald-600"
                />

                <!-- Coaching Management -->
                <x-frontend.project-card
                    title="Coaching Management System"
                    description="Educational platform for coaching centers with student management, attendance tracking, and progress monitoring."
                    :technologies="['Laravel', 'Mix', 'MySQL', 'Git']"
                    demoUrl="https://pacemakerbd.com"
                    githubUrl="#"
                    gradient="from-indigo-500 to-purple-600"
                />

                <!-- Shohoz Sales -->
                <x-frontend.project-card
                    title="Shohoz Sales"
                    description="Comprehensive software merging POS, inventory, expense tracking, SMS integration, and reporting functionalities."
                    :technologies="['Laravel', 'Inertia', 'VueJS', 'MySQL', 'Git']"
                    demoUrl="https://shohozsales.com"
                    githubUrl="#"
                    gradient="from-red-500 to-pink-600"
                />

                <!-- CMS Project -->
                <x-frontend.project-card
                    title="Content Management System"
                    description="Dynamic website development with admin panel, product management, galleries, and customer notifications."
                    :technologies="['Laravel', 'Inertia', 'VueJS', 'MySQL', 'Git']"
                    demoUrl="http://utkorshoit.com"
                    githubUrl="#"
                    gradient="from-gray-500 to-gray-700"
                />

                <!-- Leave Management -->
                <x-frontend.project-card
                    title="Leave Management System"
                    description="Employee leave tracking and approval system with workflow management and reporting capabilities."
                    :technologies="['Laravel', 'Vue.js', 'MySQL', 'Git']"
                    demoUrl="#"
                    githubUrl="#"
                    gradient="from-yellow-500 to-orange-500"
                />

                <!-- Quality Management -->
                <x-frontend.project-card
                    title="Quality Management System"
                    description="Quality control and assurance system with compliance tracking and audit management features."
                    :technologies="['Laravel', 'JavaScript', 'MySQL', 'Git']"
                    demoUrl="#"
                    githubUrl="#"
                    gradient="from-emerald-500 to-green-600"
                />

                <!-- Meeting Scheduler -->
                <x-frontend.project-card
                    title="Meeting Scheduler"
                    description="Automated meeting scheduling system with calendar integration and notification system."
                    :technologies="['Laravel', 'Vue.js', 'MySQL', 'Git']"
                    demoUrl="#"
                    githubUrl="#"
                    gradient="from-cyan-500 to-blue-600"
                />
            </div>
        </div>
    </section>

    <!-- Project Process -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">My Development Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A structured approach to delivering high-quality business solutions</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Requirements & Planning</h3>
                    <p class="text-gray-600 text-sm">Client consultation, requirement analysis, and project scope definition</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-database text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Database Design</h3>
                    <p class="text-gray-600 text-sm">Architecture planning, database schema design, and relationships mapping</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Development</h3>
                    <p class="text-gray-600 text-sm">Backend development with Laravel, frontend with Vue.js/React, and API integration</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-orange-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Deployment & Support</h3>
                    <p class="text-gray-600 text-sm">Server setup, cPanel deployment, and ongoing maintenance & support</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Project filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.bg-white.text-gray-700');

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

                // Filter projects based on category
                const category = this.textContent.trim();
                filterProjects(category);
            });
        });

        function filterProjects(category) {
            // This would typically filter projects via AJAX or JavaScript
            // For now, we'll just show a message
            if (category !== 'All Projects') {
                alert(`Filtering projects by: ${category}`);
            } else {
                alert('Showing all projects');
            }
        }
    });
</script>
@endpush
