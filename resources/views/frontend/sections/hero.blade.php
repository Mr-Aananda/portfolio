<!-- Hero Section -->
<section
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-indigo-100 pt-16">
    <div class="max-w-7xl mx-auto px-4 w-full">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Hi, I'm <span
                            class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent animate-fade-in">MR.
                            Aananda</span>
                    </h1>
                    <h2 class="text-2xl lg:text-3xl text-gray-700 font-medium">
                        <span class="typewriter-animation">Full Stack Web Developer</span>
                    </h2>
                </div>

                <p class="text-lg text-gray-600 leading-relaxed max-w-2xl animate-fade-in-up animate-duration-700">
                    I specialize in creating exceptional digital experiences with modern technologies.
                    Passionate about clean code, user-centric design, and scalable solutions that
                    make a real impact.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 py-4">
                    <div class="text-center transform transition-all duration-500 hover:scale-110">
                        <div class="text-2xl font-bold text-blue-600 animate-countup">20+</div>
                        <div class="text-gray-600 text-xs mt-1">Projects Done</div>
                    </div>
                    <div class="text-center transform transition-all duration-500 hover:scale-110 animate-delay-200">
                        <div class="text-2xl font-bold text-blue-600 animate-countup">4+</div>
                        <div class="text-gray-600 text-xs mt-1">Years Experience</div>
                    </div>
                    <div class="text-center transform transition-all duration-500 hover:scale-110 animate-delay-400">
                        <div class="text-2xl font-bold text-blue-600 animate-countup">30+</div>
                        <div class="text-gray-600 text-xs mt-1">Happy Clients</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ route('projects') }}"
                        class="group bg-blue-600 text-white px-8 py-3.5 rounded-xl hover:bg-blue-700 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl text-center font-semibold text-base flex items-center justify-center space-x-3 animate-slide-in-up">
                        <span>View My Work</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                    <a href="https://drive.google.com/uc?export=download&id=1mKY3N4Z9aNtJg9Oq-HT21eafCyQj3_hi"
                        download="MR_Aananda_CV.pdf"
                        class="group border-2 border-blue-600 text-blue-600 px-8 py-3.5 rounded-xl hover:bg-blue-600 hover:text-white transition-all duration-300 text-center font-semibold text-base flex items-center justify-center space-x-3 animate-slide-in-up animate-delay-150">
                        <span>Download CV</span>
                        <i class="fas fa-download group-hover:translate-y-0.5 transition-transform duration-300"></i>
                    </a>
                    <a href="https://github.com/Mr-Aananda" target="_blank"
                        class="group bg-gray-900 text-white px-8 py-3.5 rounded-xl hover:bg-gray-800 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl text-center font-semibold text-base flex items-center justify-center space-x-3 animate-slide-in-up animate-delay-300">
                        <i class="fab fa-github"></i>
                        <span>GitHub</span>
                    </a>
                </div>
            </div>

            <!-- Profile Image -->
            <div class="flex justify-center lg:justify-end">
                <div class="relative">
                    <!-- Main Profile Image -->
                    <div
                        class="w-96 h-96 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full overflow-hidden shadow-2xl border-8 border-white/80 backdrop-blur-sm transform transition-all duration-700 hover:scale-105 animate-float-slow">
                        <div class="w-full h-full flex items-center justify-center">
                            <img src="{{ Vite::asset('resources/assets/images/hero.png') }}"
                                alt="MR. Aananda - Full Stack Developer" class="w-full h-full object-cover"
                                onerror="this.style.display='none'; document.querySelector('.profile-fallback').style.display='flex';">
                            <div class="profile-fallback hidden w-full h-full items-center justify-center">
                                <i class="fas fa-user text-8xl text-white/90 animate-pulse-slow"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Tech Badges -->
                    <!-- Floating Tech Badges -->
                    <div
                        class="absolute -top-6 -right-6 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg transform rotate-12 animate-float">
                        <i class="fas fa-code text-white text-lg"></i>
                    </div>

                    <div
                        class="absolute -bottom-8 -left-8 w-20 h-20 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-3xl flex items-center justify-center shadow-lg transform -rotate-6 animate-float animate-delay-1000">
                        <i class="fas fa-database  text-white text-xl"></i>
                    </div>

                    <!-- Tech Stack Floating Badge -->
                    <div
                        class="absolute bottom-10 right-10 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg border border-white/20 animate-slide-in-right">
                        <div class="flex items-center space-x-2">
                            <i class="fab fa-laravel text-red-500 text-lg animate-bounce"></i>
                            <i class="fab fa-vuejs text-green-500 text-lg animate-bounce animate-delay-100"></i>
                            <i class="fab fa-react text-blue-500 text-lg animate-bounce animate-delay-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-fade-in-up animate-delay-1000">
            <div class="flex flex-col items-center space-y-2">
                <span class="text-gray-500 text-sm font-medium">Explore More</span>
                <div class="w-6 h-10 border-2 border-gray-400/50 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-gray-400/70 rounded-full mt-2 animate-bounce"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Professional Typewriter Animation */
    @keyframes typewriter {
        from {
            width: 0;
            opacity: 0;
        }

        to {
            width: 100%;
            opacity: 1;
        }
    }

    @keyframes blinkCursor {

        from,
        to {
            border-color: transparent
        }

        50% {
            border-color: #2563eb
        }
    }

    .typewriter-animation {
        overflow: hidden;
        border-right: 3px solid #2563eb;
        white-space: nowrap;
        margin: 0 auto;
        animation:
            typewriter 1.5s steps(20, end) 0.5s both,
            blinkCursor 0.75s step-end infinite;
    }

    /* Smooth countup animation */
    .animate-countup {
        animation: countUp 1s ease-out forwards;
    }

    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Custom animation delays */
    .animate-delay-150 {
        animation-delay: 150ms;
    }

    .animate-delay-200 {
        animation-delay: 200ms;
    }

    .animate-delay-300 {
        animation-delay: 300ms;
    }

    .animate-delay-400 {
        animation-delay: 400ms;
    }

    .animate-delay-1000 {
        animation-delay: 1000ms;
    }

    /* Slow floating animation */
    .animate-float-slow {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    /* Slow pulse animation */
    .animate-pulse-slow {
        animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
