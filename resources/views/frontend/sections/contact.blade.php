{{-- Contact Section --}}
<section class="py-16 sm:py-20 lg:py-24 bg-slate-50 relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute top-0 left-0 w-96 h-96 bg-brand-500/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-accent-500/5 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        {{-- Section Header --}}
        @if (!request()->is('contact'))
            <div class="text-center mb-12 sm:mb-16 reveal">
                <span class="section-badge"><i class="fas fa-envelope"></i> Contact</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-4 mb-3">
                    Let's <span class="gradient-text">Connect</span>
                </h2>
                <div class="section-line"></div>
                <p class="mt-4 text-slate-500 text-base sm:text-lg max-w-xl mx-auto">
                    Let's build something amazing together.
                </p>
            </div>
        @endif

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">

            {{-- ─── Left: Contact Info (dark panel) ─── --}}
            <div class="reveal-left rounded-2xl overflow-hidden flex flex-col"
                 style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);">
                <div class="p-6 sm:p-8 lg:p-10 flex flex-col h-full">
                    <div class="mb-6 sm:mb-8">
                        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3">Let's Start a Conversation</h2>
                        <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                            I'm passionate about turning ideas into reality. Whether you have a project in mind or just
                            want to chat about technology, I'd love to hear from you.
                        </p>
                    </div>

                    {{-- Contact items --}}
                    <div class="space-y-4 flex-1">
                        <a href="mailto:rmananda007@gmail.com"
                           class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10
                                  hover:bg-brand-500/10 hover:border-brand-500/30 transition-all duration-300 group">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-500 to-accent-500
                                        flex items-center justify-center flex-shrink-0
                                        group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-envelope text-white text-sm"></i>
                            </div>
                            <div class="min-w-0">
                                <h3 class="font-semibold text-white text-sm mb-0.5">Email</h3>
                                <p class="text-brand-300 text-sm truncate">rmananda007@gmail.com</p>
                                <p class="text-slate-500 text-xs mt-0.5">I'll respond within 24 hours</p>
                            </div>
                        </a>

                        <a href="tel:+8801971072007"
                           class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10
                                  hover:bg-emerald-500/10 hover:border-emerald-500/30 transition-all duration-300 group">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-green-600
                                        flex items-center justify-center flex-shrink-0
                                        group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-phone text-white text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white text-sm mb-0.5">Phone</h3>
                                <p class="text-emerald-400 text-sm">+880 1971 072007</p>
                                <p class="text-slate-500 text-xs mt-0.5">Sun–Thurs, 6pm to 12pm</p>
                            </div>
                        </a>

                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/10">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-accent-600
                                        flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-white text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white text-sm mb-0.5">Location</h3>
                                <p class="text-slate-400 text-sm">Tongi, Gazipur, Dhaka</p>
                                <p class="text-slate-500 text-xs mt-0.5">Available for remote work worldwide</p>
                            </div>
                        </div>
                    </div>

                    {{-- Social links --}}
                    <div class="mt-6 pt-6 border-t border-white/10">
                        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-3">Follow Me</p>
                        <div class="flex items-center gap-3">
                            <a href="https://github.com/Mr-Aananda" target="_blank"
                               class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-slate-300
                                      hover:bg-slate-800 hover:text-white hover:scale-110 transition-all duration-300"
                               title="GitHub">
                                <i class="fab fa-github text-sm"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/mr-aananda/" target="_blank"
                               class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-slate-300
                                      hover:bg-blue-600 hover:text-white hover:scale-110 transition-all duration-300"
                               title="LinkedIn">
                                <i class="fab fa-linkedin-in text-sm"></i>
                            </a>
                            <a href="https://wa.me/8801971072007" target="_blank"
                               class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-slate-300
                                      hover:bg-green-500 hover:text-white hover:scale-110 transition-all duration-300"
                               title="WhatsApp">
                                <i class="fab fa-whatsapp text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ─── Right: Contact Form ─── --}}
            <div class="reveal-right">
                <div class="bg-white rounded-2xl shadow-card border border-slate-100 p-6 sm:p-8 h-full flex flex-col">
                    <div class="mb-6">
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-1">Send a Message</h3>
                        <p class="text-slate-500 text-sm">Fill out the form below and I'll get back to you.</p>
                    </div>

                    @if(session('success'))
                        <div class="mb-5 p-4 rounded-xl bg-emerald-50 border border-emerald-200 flex items-start gap-3 text-emerald-800 text-sm animate-fade-in-up">
                            <i class="fas fa-check-circle mt-0.5 text-base text-emerald-500 flex-shrink-0"></i>
                            <div>
                                <span class="font-semibold">Success!</span> {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5 flex-1 flex flex-col" id="contact-form">
                        @csrf
                        <div class="grid xs:grid-cols-2 gap-4">
                            <div>
                                <label for="contact-name" class="block text-sm font-semibold text-slate-700 mb-1.5">Your Name</label>
                                <input type="text" id="contact-name" name="name"
                                    class="w-full px-4 py-3 rounded-xl border text-slate-900 text-sm
                                           focus:outline-none focus:ring-2 transition-all duration-300 bg-slate-50 placeholder-slate-400
                                           @error('name') border-rose-400 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:border-brand-500 focus:ring-brand-500/20 @enderror"
                                    placeholder="Your full name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-rose-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                                        <i class="fas fa-exclamation-circle text-xs"></i> {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label for="contact-email" class="block text-sm font-semibold text-slate-700 mb-1.5">Email Address</label>
                                <input type="email" id="contact-email" name="email"
                                    class="w-full px-4 py-3 rounded-xl border text-slate-900 text-sm
                                           focus:outline-none focus:ring-2 transition-all duration-300 bg-slate-50 placeholder-slate-400
                                           @error('email') border-rose-400 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:border-brand-500 focus:ring-brand-500/20 @enderror"
                                    placeholder="your@email.com" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-rose-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                                        <i class="fas fa-exclamation-circle text-xs"></i> {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="contact-subject" class="block text-sm font-semibold text-slate-700 mb-1.5">Subject</label>
                            <input type="text" id="contact-subject" name="subject"
                                class="w-full px-4 py-3 rounded-xl border text-slate-900 text-sm
                                       focus:outline-none focus:ring-2 transition-all duration-300 bg-slate-50 placeholder-slate-400
                                       @error('subject') border-rose-400 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:border-brand-500 focus:ring-brand-500/20 @enderror"
                                placeholder="What's this about?" value="{{ old('subject') }}">
                            @error('subject')
                                <p class="text-rose-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle text-xs"></i> {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex-1 flex flex-col">
                            <label for="contact-message" class="block text-sm font-semibold text-slate-700 mb-1.5">Message</label>
                            <textarea id="contact-message" name="message"
                                class="flex-1 w-full min-h-[160px] px-4 py-3 rounded-xl border text-slate-900 text-sm
                                       focus:outline-none focus:ring-2 transition-all duration-300 bg-slate-50 placeholder-slate-400 resize-none
                                       @error('message') border-rose-400 focus:ring-rose-200 focus:border-rose-500 @else border-slate-200 focus:border-brand-500 focus:ring-brand-500/20 @enderror"
                                placeholder="Tell me about your project or idea...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-rose-500 text-xs mt-1.5 font-medium flex items-center gap-1">
                                    <i class="fas fa-exclamation-circle text-xs"></i> {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button type="submit" id="submit-btn"
                            class="group w-full py-4 rounded-xl font-bold text-base text-white
                                   bg-gradient-to-r from-brand-600 to-accent-600
                                   hover:from-brand-500 hover:to-accent-500
                                   hover:shadow-glow-brand transform hover:-translate-y-0.5
                                   transition-all duration-300 flex items-center justify-center gap-3">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane text-sm group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
