<!-- Projects Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        @if (!request()->is('projects'))
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-3">My Projects</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-500 text-lg">
               Turning business needs into comprehensive digital solutions.
            </p>
        </div>
        @endif

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- DMS - Comprehensive Business Solution -->
            <x-frontend.project-card
                title="Dealership Management System (DMS)"
                description="Comprehensive software streamlining business operations with inventory management, stock control, supplier/customer transactions, employee management, and integrated SMS system."
                :technologies="['PHP', 'Laravel', 'VueJS', 'Pinia', 'AlpineJs', 'MySQL', 'Git']"
                demoUrl="http://dms.utkorshoit.com"
                githubUrl="#"
                gradient="from-blue-500 to-cyan-600"
            />

            <!-- Restaurant Management System -->
            <x-frontend.project-card
                title="Restaurant Management & Billing System"
                description="Complete billing and management software with modern POS, inventory management, reservation handling, employee management, and SMS notifications."
                :technologies="['PHP', 'Laravel', 'VueJS', 'Pinia', 'Spatie', 'MySQL', 'Git']"
                demoUrl="http://ayesh.utkorshoit.com"
                githubUrl="#"
                gradient="from-green-500 to-emerald-600"
            />

            <!-- Scrap Management System -->
            <x-frontend.project-card
                title="Scrap Management System"
                description="Comprehensive solution for scrap handling with purchase consolidation, stock management, POS, car module, expense tracking, payroll, and detailed reporting."
                :technologies="['PHP', 'Laravel', 'VueJS', 'Pinia', 'MySQL', 'Git']"
                demoUrl="http://bokulstore.apsbd.xyz"
                githubUrl="#"
                gradient="from-orange-500 to-amber-600"
            />
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-semibold">
                View All Projects
            </a>
        </div>
    </div>
</section>
