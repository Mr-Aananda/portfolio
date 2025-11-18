<footer class="bg-gray-900 text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 mb-6 sm:mb-8">
            <!-- Brand Section - Enhanced -->
            <div class="md:col-span-2 lg:col-span-2">
                <div class="flex flex-col sm:flex-row sm:items-start space-y-4 sm:space-y-0 sm:space-x-4 mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg overflow-hidden relative flex-shrink-0">
                        <img src="{{ Vite::asset('resources/assets/icons/icon.png') }}" alt="MR. Aananda"
                            class="w-full h-full object-cover absolute inset-0"
                            onerror="this.style.display='none'; document.getElementById('fallbackAA').style.display='flex';">
                        <span id="fallbackAA" class="text-white font-bold text-lg" style="display: none;">MR</span>
                    </div>
                    <div class="flex-1">
                        <h3
                            class="text-xl sm:text-2xl font-bold mb-2 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                            MR. Aananda
                        </h3>
                        <p class="text-gray-300 text-base sm:text-lg mb-3 font-medium">Full Stack Web Developer</p>
                        <p class="text-gray-400 leading-relaxed text-sm sm:text-base max-w-md">
                            Transforming ideas into exceptional digital experiences. Specializing in modern web
                            technologies,
                            clean architecture, and user-centric solutions.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quick Links - Enhanced -->
            <div class="mt-4 sm:mt-0">
                <h4 class="text-sm sm:text-base font-semibold mb-3 sm:mb-4 text-gray-200 uppercase tracking-wider">Quick Links</h4>
                <div class="grid grid-cols-2 gap-2 sm:gap-3">
                    <a href="{{ route('home') }}"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xs sm:text-sm py-1.5 hover:translate-x-1 transform transition-transform">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xs sm:text-sm py-1.5 hover:translate-x-1 transform transition-transform">
                        About
                    </a>
                    <a href="{{ route('skills') }}"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xs sm:text-sm py-1.5 hover:translate-x-1 transform transition-transform">
                        Skills
                    </a>
                    <a href="{{ route('projects') }}"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xs sm:text-sm py-1.5 hover:translate-x-1 transform transition-transform">
                        Projects
                    </a>
                    <a href="{{ route('blogs') }}"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xs sm:text-sm py-1.5 hover:translate-x-1 transform transition-transform">
                        Blogs
                    </a>
                    <a href="{{ route('contact') }}"
                        class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xs sm:text-sm py-1.5 hover:translate-x-1 transform transition-transform">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Connect - Enhanced -->
            <div class="mt-4 sm:mt-0">
                <h4 class="text-sm sm:text-base font-semibold mb-3 sm:mb-4 text-gray-200 uppercase tracking-wider">Connect With Me</h4>
                <div class="flex space-x-2 sm:space-x-3 mb-4">
                    <a href="https://github.com/Mr-Aananda" target="_blank"
                        class="bg-gray-800 text-gray-300 p-2 sm:p-3 rounded-xl hover:bg-gray-700 hover:text-white transition-all duration-300 transform hover:-translate-y-1 shadow-md flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12">
                        <i class="fab fa-github text-sm sm:text-base"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mr-aananda/" target="_blank"
                        class="bg-gray-800 text-gray-300 p-2 sm:p-3 rounded-xl hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:-translate-y-1 shadow-md flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12">
                        <i class="fab fa-linkedin-in text-sm sm:text-base"></i>
                    </a>
                    <a href="https://wa.me/8801971072007" target="_blank"
                        class="bg-gray-800 text-gray-300 p-2 sm:p-3 rounded-xl hover:bg-green-500 hover:text-white transition-all duration-300 transform hover:-translate-y-1 shadow-md flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12">
                        <i class="fab fa-whatsapp text-sm sm:text-base"></i>
                    </a>
                </div>

                <!-- Tech Stack -->
                <div class="bg-gray-800/50 rounded-lg p-3">
                    <p class="text-xs sm:text-sm text-gray-300 flex items-center space-x-2">
                        <i class="fas fa-code text-blue-400 text-sm sm:text-base"></i>
                        <span>Built with Laravel & Tailwind CSS</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Bar - Enhanced -->
        <div class="border-t border-gray-700 pt-4 sm:pt-6">
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-3 sm:space-y-4 lg:space-y-0">
                <p class="text-gray-400 text-xs sm:text-sm text-center lg:text-left">
                    &copy; {{ date('Y') }} <span class="text-white font-semibold">MR. Aananda</span>. All rights
                    reserved.
                </p>
                <div class="flex items-center space-x-4 sm:space-x-6 text-gray-400 text-xs sm:text-sm">
                    <a href="#" class="hover:text-blue-400 transition-colors duration-300">Privacy</a>
                    <a href="#" class="hover:text-blue-400 transition-colors duration-300">Terms</a>
                    <a href="#" class="hover:text-blue-400 transition-colors duration-300">Sitemap</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop"
        class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 lg:bottom-8 lg:right-8 w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 flex items-center justify-center z-50 opacity-0 invisible transition-opacity duration-300">
        <i class="fas fa-chevron-up text-sm sm:text-base"></i>
    </button>
</footer>

@push('scripts')
    <script>
        // Scroll to Top Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.getElementById('scrollToTop');

            // Show/hide button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    scrollToTopBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollToTopBtn.classList.remove('opacity-100', 'visible');
                    scrollToTopBtn.classList.add('opacity-0', 'invisible');
                }
            });

            // Scroll to top when clicked
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush
