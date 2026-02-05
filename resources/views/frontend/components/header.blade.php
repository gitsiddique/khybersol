<nav class="floating-nav">
    <!-- Desktop Logo -->
    <a href="{{ route('home') }}" class="flex items-center gap-2 group hidden md:flex">
        <img src="{{ asset('frontend/imgs/logo.png') }}" alt="KhyberSol Logo" class="h-8 w-8 object-contain">
        <span class="text-xl font-extrabold tracking-tight">Khyber<span class="text-primary">Sol</span></span>
    </a>

    <!-- Mobile Logo -->
    <a href="{{ route('home') }}" class="flex items-center gap-2 md:hidden">
        <img src="{{ asset('frontend/imgs/logo.png') }}" alt="KhyberSol Logo" class="h-8 w-8 object-contain">
        <span class="text-xl font-extrabold tracking-tight">Khyber<span class="text-primary">Sol</span></span>
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center px-1 py-1">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
        <a href="{{ route('about') }}" class="nav-link">About</a>
        <div class="nav-item-dropdown">
            <a href="{{ route('services') }}" class="nav-link has-dropdown">
                Services
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </a>
            <div class="dropdown-menu">
                <a href="{{ route('services.web-development') }}" class="dropdown-link">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-code-2">
                            <path d="m18 16 4-4-4-4" />
                            <path d="m6 8-4 4 4 4" />
                            <path d="m14.5 4-5 16" />
                        </svg>
                    </div>
                    <span>Web Development</span>
                </a>
                <a href="{{ route('services.app-development') }}" class="dropdown-link">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-smartphone">
                            <rect width="14" height="20" x="5" y="2" rx="2" ry="2" />
                            <path d="M12 18h.01" />
                        </svg>
                    </div>
                    <span>App Development</span>
                </a>
                <a href="{{ route('services.ui-ux-design') }}" class="dropdown-link">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-palette">
                            <circle cx="13.5" cy="6.5" r=".5" />
                            <circle cx="17.5" cy="10.5" r=".5" />
                            <circle cx="8.5" cy="7.5" r=".5" />
                            <circle cx="6.5" cy="12.5" r=".5" />
                            <path
                                d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.92 0 1.7-.39 2.3-1.03a1.5 1.5 0 0 0 .14-1.97l-1.12-1.5a1.5 1.5 0 0 1 .15-1.97l.13-.12a1.5 1.5 0 0 1 1.97-.15l1.51 1.13a1.5 1.5 0 0 0 1.97-.14c.64-.6 1.03-1.38 1.03-2.3 0-5.5-4.5-10-10-10z" />
                        </svg>
                    </div>
                    <span>UI/UX Design</span>
                </a>
                <a href="{{ route('services.seo-optimization') }}" class="dropdown-link">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-search-code">
                            <path d="m13 13.5 2-2.5-2-2.5" />
                            <path d="m21 21-4.3-4.3" />
                            <path d="M9 8.5 7 11l2 2.5" />
                            <circle cx="11" cy="11" r="8" />
                        </svg>
                    </div>
                    <span>SEO Optimization</span>
                </a>
                <a href="{{ route('services.digital-marketing') }}" class="dropdown-link">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-megaphone">
                            <path d="m3 11 18-5v12L3 14v-3z" />
                            <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />
                        </svg>
                    </div>
                    <span>Digital Marketing</span>
                </a>
                <a href="{{ route('services.graphic-branding') }}" class="dropdown-link">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-brush">
                            <path d="m9 18 5-4.5-5-4.5" />
                            <path d="M2 21h20" />
                            <path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16" />
                        </svg>
                    </div>
                    <span>Graphic & Branding</span>
                </a>
                <a href="{{ route('services.ai-automation') }}" class="dropdown-link">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-bot">
                            <path d="M12 8V4H8" />
                            <rect width="16" height="12" x="4" y="8" rx="2" />
                            <path d="M2 14h2" />
                            <path d="M20 14h2" />
                            <path d="M15 13v2" />
                            <path d="M9 13v2" />
                        </svg>
                    </div>
                    <span>AI & Automation</span>
                </a>
            </div>
        </div>
        <a href="{{ route('projects') }}" class="nav-link">Projects</a>
        <a href="{{ route('blog') }}" class="nav-link">Blogs</a>
    </div>

    <!-- Right Actions -->
    <div class="flex items-center gap-4">
        <!-- Contact Us Button (Desktop) -->
        <a href="{{ route('contact') }}" class="btn-start hidden md:flex">
            Contact Us
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-arrow-right">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
            </svg>
        </a>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden p-2 text-white" aria-label="Open Menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-menu">
                <line x1="4" x2="20" y1="12" y2="12" />
                <line x1="4" x2="20" y1="6" y2="6" />
                <line x1="4" x2="20" y1="18" y2="18" />
            </svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div class="menu-overlay" id="menu-overlay"></div>

<div id="mobile-menu">
    <div class="flex justify-between items-center mb-10">
        <a href="{{ route('home') }}" class="flex items-center gap-2 text-lg font-extrabold tracking-tight">
            <img src="{{ asset('frontend/imgs/logo.png') }}" alt="KhyberSol Logo" class="h-7 w-7 object-contain">
            Khyber<span class="text-primary">Sol</span>
        </a>
        <button id="close-menu" class="p-1 text-primary transition-colors" aria-label="Close Menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg>
        </button>
    </div>

    <div class="flex flex-col gap-4">
        <a href="{{ route('home') }}" class="menu-link">Home</a>
        <a href="{{ route('about') }}" class="menu-link">About</a>
        <div class="mobile-nav-item">
            <button class="menu-link has-dropdown w-full flex justify-between items-center" id="mobile-services-toggle">
                Services
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down transition-transform duration-300">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>
            <div class="mobile-submenu" id="mobile-services-menu">
                <a href="{{ route('services.web-development') }}" class="mobile-submenu-link">Web Development</a>
                <a href="{{ route('services.app-development') }}" class="mobile-submenu-link">App Development</a>
                <a href="{{ route('services.ui-ux-design') }}" class="mobile-submenu-link">UI/UX Design</a>
                <a href="{{ route('services.seo-optimization') }}" class="mobile-submenu-link">SEO Optimization</a>
                <a href="{{ route('services.digital-marketing') }}" class="mobile-submenu-link">Digital Marketing</a>
                <a href="{{ route('services.graphic-branding') }}" class="mobile-submenu-link">Graphic & Branding</a>
                <a href="{{ route('services.ai-automation') }}" class="mobile-submenu-link">AI & Automation</a>
            </div>
        </div>
        <a href="{{ route('projects') }}" class="menu-link">Projects</a>
        <a href="{{ route('blog') }}" class="menu-link">Blogs</a>
    </div>

    <div class="mt-auto pt-8 border-t border-white/5">
        <a href="{{ route('contact') }}" class="btn-primary w-full justify-center py-3 text-sm">
            Contact Us
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-arrow-right">
                <path d="M5 12h14" />
                <path d="m12 5 7 7-7 7" />
            </svg>
        </a>
    </div>
</div>