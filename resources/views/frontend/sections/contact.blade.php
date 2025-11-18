<!-- Contact Section -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Section Header -->
        @if (!request()->is('contact'))
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Contact Me</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-500 text-lg">
                    Let’s build something amazing together.
                </p>
            </div>
        @endif

        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Let's Start a Conversation</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        I'm passionate about turning ideas into reality. Whether you have a project in mind or just want
                        to chat about technology, I'd love to hear from you.
                    </p>
                </div>

                <!-- Contact Details -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-blue-50 border border-blue-100">
                        <div class="bg-blue-600 text-white p-3 rounded-lg">
                            <i class="fas fa-envelope text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-lg">Email</h3>
                            <p class="text-gray-600">rmananda007@gmail.com</p>
                            <p class="text-sm text-gray-500 mt-1">I'll respond within 24 hours</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-green-50 border border-green-100">
                        <div class="bg-green-600 text-white p-3 rounded-lg">
                            <i class="fas fa-phone text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-lg">Phone</h3>
                            <p class="text-gray-600">+880 1971 072007</p>
                            <p class="text-sm text-gray-500 mt-1">Sun-Thurs from 6pm to 12pm</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-purple-50 border border-purple-100">
                        <div class="bg-purple-600 text-white p-3 rounded-lg">
                            <i class="fas fa-map-marker-alt text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-lg">Location</h3>
                            <p class="text-gray-600">Tongi, Gazipur, Dhaka</p>
                            <p class="text-sm text-gray-500 mt-1">Available for remote work worldwide</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div>
                    <h3 class="font-semibold text-gray-900 text-lg mb-4">Follow Me</h3>
                    <div class="flex space-x-4">
                        <a href="https://github.com/Mr-Aananda" target="_blank"
                            class="bg-gray-900 text-white p-3 rounded-lg hover:bg-gray-800 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            <i class="fab fa-github text-lg"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mr-aananda/" target="_blank"
                            class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                        <a href="https://wa.me/8801971072007" target="_blank"
                            class="bg-green-500 text-white p-3 rounded-lg hover:bg-green-600 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form - Increased Height -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200 h-full min-h-[600px] flex flex-col">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Send a Message</h3>
                <form class="space-y-6 flex-1 flex flex-col">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2 font-semibold">Your Name</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-300 bg-white"
                                placeholder="Enter your name">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2 font-semibold">Your Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-300 bg-white"
                                placeholder="Enter your email">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-gray-700 mb-2 font-semibold">Subject</label>
                        <input type="text" id="subject"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-300 bg-white"
                            placeholder="What is this regarding?">
                    </div>

                    <div class="flex-1">
                        <label for="message" class="block text-gray-700 mb-2 font-semibold">Message</label>
                        <textarea id="message"
                            class="w-full h-full min-h-[200px] px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition duration-300 bg-white resize-none"
                            placeholder="Tell me about your project..."></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-4 px-6 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            Send Message
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
