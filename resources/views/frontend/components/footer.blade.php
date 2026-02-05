<!-- Footer -->
<footer class="bg-black border-t border-white/5 pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
            <!-- Brand Column -->
            <div class="md:col-span-4 space-y-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group w-fit">
                    <img src="{{ asset('frontend/imgs/logo.png') }}" alt="KhyberSol Logo"
                        class="h-8 w-auto group-hover:opacity-80 transition-opacity">
                    <span class="font-bold text-2xl tracking-tight text-white">Khyber<span
                            class="text-primary">Sol</span></span>
                </a>
                <p class="text-white/40 text-sm leading-relaxed max-w-sm font-light">
                    Forging digital excellence through innovation and precision. We build the technology that powers
                    your future.
                </p>
            </div>

            <!-- Links Section -->
            <div class="md:col-span-8 grid grid-cols-1 sm:grid-cols-3 gap-8 md:gap-4">
                <!-- Services -->
                <div class="space-y-6">
                    <h4 class="text-white font-semibold text-sm tracking-wide uppercase">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services.web-development') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">Web
                                Development</a></li>
                        <li><a href="{{ route('services.app-development') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">App
                                Development</a></li>
                        <li><a href="{{ route('services.ui-ux-design') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">UI/UX
                                Design</a></li>
                        <li><a href="{{ route('services.seo-optimization') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">SEO
                                Optimization</a></li>
                        <li><a href="{{ route('services.digital-marketing') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">Digital
                                Marketing</a></li>
                        <li><a href="{{ route('services.graphic-branding') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">Graphic
                                & Branding</a></li>
                        <li><a href="{{ route('services.ai-automation') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">AI &
                                Automation</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="space-y-6">
                    <h4 class="text-white font-semibold text-sm tracking-wide uppercase">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">About
                                Us</a></li>
                        <li><a href="{{ route('projects') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">Projects</a>
                        </li>
                        <li><a href="{{ route('blog') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">Blogs</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="text-white/40 hover:text-primary text-sm transition-colors duration-300">Contact
                                Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <h4 class="text-white font-semibold text-sm tracking-wide uppercase">Contact</h4>
                    <ul class="space-y-4">
                        <li>
                            <a href="mailto:muhammadsiddique.work@gmail.com" class="flex items-start gap-3 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-primary mt-0.5 shrink-0 group-hover:text-white transition-colors">
                                    <rect width="20" height="16" x="2" y="4" rx="2" />
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                </svg>
                                <span
                                    class="text-white/40 text-sm group-hover:text-primary transition-colors">muhammadsiddique.work@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/923365726859" target="_blank" class="flex items-start gap-3 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-primary mt-0.5 shrink-0 group-hover:text-white transition-colors">
                                    <path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21" />
                                    <path
                                        d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1" />
                                </svg>
                                <span
                                    class="text-white/40 text-sm group-hover:text-primary transition-colors">WhatsApp</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+923365726859" class="flex items-start gap-3 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-primary mt-0.5 shrink-0 group-hover:text-white transition-colors">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                                <span class="text-white/40 text-sm group-hover:text-primary transition-colors">+92 336
                                    5726859</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/search/?api=1&query=Peshawar,+Pakistan" target="_blank"
                                class="flex items-start gap-3 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-primary mt-0.5 shrink-0 group-hover:text-white transition-colors">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <span class="text-white/40 text-sm group-hover:text-primary transition-colors">Peshawar,
                                    Pakistan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-center items-center gap-4">
            <p class="text-white/30 text-xs font-medium">© 2026 KhyberSol. All rights reserved.</p>
        </div>
    </div>
</footer>