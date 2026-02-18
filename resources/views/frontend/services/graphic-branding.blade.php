<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic & Branding Services | KhyberSol</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/imgs/fav.png') }}">
    <script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ScrollTrigger.min.js') }}"></script>
    <script>
        // Fallback in case GSAP fails to load
        setTimeout(() => {
            const heroElements = document.querySelectorAll('.hero-tag, .hero-title, .hero-description, .hero-actions, .hero-stats');
            heroElements.forEach(el => {
                if (window.getComputedStyle(el).opacity === "0") {
                    el.style.opacity = "1";
                    el.style.transform = "translateY(0)";
                }
            });
        }, 2000);
    </script>
    @include('frontend.components.google-analytics')
</head>

<body class="grid-bg bg-black text-white selection:bg-primary selection:text-black">

    <!-- Header -->
    @include('frontend.components.header')

    <!-- Hero Section -->
    <section class="relative h-screen w-full px-4 md:px-6 overflow-hidden flex items-center justify-center bg-black">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-30">
                <source src="{{ asset('frontend/imgs/home-bg.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-black via-black/50 to-black z-10"></div>

            <!-- Minimal Grid Overlay from Home -->
            <div
                class="absolute inset-0 bg-[url('{{ asset('frontend/imgs/grid.svg') }}')] bg-center [mask-image:radial-gradient(white,transparent_85%)] opacity-[0.05] z-10">
            </div>

            <!-- Glow Effect -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/[0.05] rounded-full blur-[120px] pointer-events-none z-10">
            </div>
        </div>

        <div class="max-w-7xl mx-auto w-full relative z-30 pt-20">
            <div class="flex flex-col items-center text-center">
                <!-- Home-style Tag -->
                <div
                    class="hero-tag mb-8 py-1 px-4 border border-white/10 rounded-full text-[10px] uppercase tracking-[0.2em] text-white/60 font-bold backdrop-blur-md bg-white/[0.02]">
                    Visual Brand Identity
                </div>

                <h1
                    class="hero-title text-5xl sm:text-6xl md:text-8xl font-medium leading-[0.95] tracking-tighter text-white mb-8">
                    BRAND <span class="text-primary italic font-light">CRAFT.</span>
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-2xl mb-10 leading-relaxed font-light">
                    We create memorable brand identities, logos, and visual assets that resonate with your target
                    audience and drive recognition.
                </p>

                <div class="hero-actions flex flex-wrap items-center justify-center gap-6">
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 rounded-full border border-white/10 bg-white/[0.05] hover:bg-white/[0.1] text-white text-xs font-bold uppercase tracking-widest transition-all backdrop-blur-md">
                        Start Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-12 px-6 relative overflow-hidden bg-black">
        <div class="max-w-7xl mx-auto space-y-16">

            <!-- Solution 1: Brand Identity -->
            <div class="reveal group">
                <div
                    class="flex flex-col lg:flex-row gap-12 p-8 md:p-12 rounded-[2rem] border border-white/5 bg-white/[0.02] hover:bg-white/[0.04] transition-all duration-700">
                    <!-- Left: Info -->
                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <div>
                            <div class="inline-flex items-center gap-3 mb-6">
                                <span class="w-8 h-[1px] bg-primary"></span>
                                <span class="text-primary text-[10px] font-bold uppercase tracking-[0.3em]">Solution
                                    01</span>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Brand
                                <br><span class="text-primary italic">Identity.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                More than just a logo. We build comprehensive brand systems that communicate your values
                                and establish trust with your audience.
                            </p>
                        </div>

                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 text-xs text-white/60 hover:text-primary transition-colors uppercase tracking-widest font-bold mt-auto">
                            Get Quote <span class="text-lg">→</span>
                        </a>
                    </div>

                    <!-- Right: Features Grid -->
                    <div class="lg:w-2/3 grid sm:grid-cols-2 gap-4">
                        <!-- Feature Card 1 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Logo Design</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Unique, memorable logos that serve as
                                the cornerstone of your brand's visual identity.</p>
                        </div>
                        <!-- Feature Card 2 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <line x1="3" y1="9" x2="21" y2="9" />
                                    <line x1="9" y1="21" x2="9" y2="9" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Brand Guidelines</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Detailed style guides covering
                                typography, color palettes, and usage rules for consistency.</p>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 19l7-7 3 3-7 7-3-3z" />
                                    <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                                    <path d="M2 2l7.586 7.586" />
                                    <circle cx="11" cy="11" r="2" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Typography</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Selection and customization of
                                typefaces that convey your brand's personality and tone.</p>
                        </div>
                        <!-- Feature Card 4 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <circle cx="12" cy="12" r="4" />
                                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Visual Strategy</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Strategic planning for how your brand
                                appears across all touchpoints and channels.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: Marketing Collateral -->
            <div class="reveal group">
                <div
                    class="flex flex-col lg:flex-row gap-12 p-8 md:p-12 rounded-[2rem] border border-white/5 bg-white/[0.02] hover:bg-white/[0.04] transition-all duration-700">
                    <!-- Left: Info -->
                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <div>
                            <div class="inline-flex items-center gap-3 mb-6">
                                <span class="w-8 h-[1px] bg-primary"></span>
                                <span class="text-primary text-[10px] font-bold uppercase tracking-[0.3em]">Solution
                                    02</span>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Marketing
                                <br><span class="text-primary italic">Collateral.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Tangible brand assets that leave a lasting impression. From business cards to packaging,
                                we ensure every physical touchpoint is on-brand.
                            </p>
                        </div>

                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 text-xs text-white/60 hover:text-primary transition-colors uppercase tracking-widest font-bold mt-auto">
                            Get Quote <span class="text-lg">→</span>
                        </a>
                    </div>

                    <!-- Right: Features Grid -->
                    <div class="lg:w-2/3 grid sm:grid-cols-2 gap-4">
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="4" y="4" width="16" height="16" rx="2" ry="2" />
                                    <rect x="9" y="9" width="6" height="6" />
                                    <line x1="9" y1="1" x2="9" y2="4" />
                                    <line x1="15" y1="1" x2="15" y2="4" />
                                    <line x1="9" y1="20" x2="9" y2="23" />
                                    <line x1="15" y1="20" x2="15" y2="23" />
                                    <line x1="20" y1="9" x2="23" y2="9" />
                                    <line x1="20" y1="14" x2="23" y2="14" />
                                    <line x1="1" y1="9" x2="4" y2="9" />
                                    <line x1="1" y1="14" x2="4" y2="14" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Packaging Design</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Eye-catching packaging solutions that
                                protect your product and enhance shelf appeal.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Print Materials</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">High-quality brochures, flyers,
                                business cards, and posters designed for print perfection.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Merchandise</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Custom designs for apparel, stationery,
                                and promotional items that spread your brand.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                    <line x1="8" y1="21" x2="16" y2="21" />
                                    <line x1="12" y1="17" x2="12" y2="21" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Event Branding</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Booth designs, banners, and displays
                                that command attention at trade shows and events.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Digital Assets -->
            <div class="reveal group">
                <div
                    class="flex flex-col lg:flex-row gap-12 p-8 md:p-12 rounded-[2rem] border border-white/5 bg-white/[0.02] hover:bg-white/[0.04] transition-all duration-700">
                    <!-- Left: Info -->
                    <div class="lg:w-1/3 flex flex-col justify-between">
                        <div>
                            <div class="inline-flex items-center gap-3 mb-6">
                                <span class="w-8 h-[1px] bg-primary"></span>
                                <span class="text-primary text-[10px] font-bold uppercase tracking-[0.3em]">Solution
                                    03</span>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Digital
                                <br><span class="text-primary italic">Assets.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Optimized visual content for the digital world. We create assets that look stunning on
                                screens of all sizes.
                            </p>
                        </div>

                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 text-xs text-white/60 hover:text-primary transition-colors uppercase tracking-widest font-bold mt-auto">
                            Get Quote <span class="text-lg">→</span>
                        </a>
                    </div>

                    <!-- Right: Features Grid -->
                    <div class="lg:w-2/3 grid sm:grid-cols-2 gap-4">
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Social Graphics</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Templates and custom graphics for
                                Instagram, LinkedIn, Facebook, and Twitter.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <line x1="3" y1="9" x2="21" y2="9" />
                                    <line x1="9" y1="21" x2="9" y2="9" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Web Assets</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Icons, banners, hero images, and
                                illustrations optimized for web performance.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Email Design</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Responsive email templates that look
                                great in any inbox and drive clicks.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                    <line x1="8" y1="21" x2="16" y2="21" />
                                    <line x1="12" y1="17" x2="12" y2="21" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Presentations</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Professional pitch decks and
                                presentation templates that captivate your audience.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Custom Solution CTA -->
    <section class="py-12 px-6">
        <div class="max-w-4xl mx-auto text-center reveal">
            <h2 class="text-3xl md:text-5xl font-bold mb-8">Ready to define your brand?</h2>
            <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
                Let's create a visual identity that sets you apart. Contact us today to start your branding journey.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn-primary">Start Branding</a>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    @include('frontend.components.contact-form')

    <!-- Footer -->
    @include('frontend.components.footer')

    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>