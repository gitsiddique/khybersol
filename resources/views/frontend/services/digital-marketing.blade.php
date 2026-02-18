<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Services | KhyberSol</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    Brand Acceleration
                </div>

                <h1
                    class="hero-title text-5xl sm:text-6xl md:text-8xl font-medium leading-[0.95] tracking-tighter text-white mb-8">
                    DIGITAL <span class="text-primary italic font-light">REACH.</span>
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-2xl mb-10 leading-relaxed font-light">
                    We amplify your brand's voice and connect you with your ideal customers. From social media
                    management to targeted ad campaigns, we drive engagement and ROI.
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

            <!-- Social Media -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Social
                                <br><span class="text-primary italic">Media.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Building communities, not just followers. We create engaging content and manage your
                                social presence to foster genuine connections.
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
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Platform Management</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Full-service management of Facebook,
                                Instagram, LinkedIn, and Twitter/X profiles.</p>
                        </div>
                        <!-- Feature Card 2 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Content Creation</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">High-quality graphics, videos, and copy
                                tailored to each platform's unique audience.</p>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Community Engagement</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Active monitoring and responding to
                                comments and messages to build brand loyalty.</p>
                        </div>
                        <!-- Feature Card 4 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="12" x2="12" y1="20" y2="10"></line>
                                    <line x1="18" x2="18" y1="20" y2="4"></line>
                                    <line x1="6" x2="6" y1="20" y2="16"></line>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Growth Analytics</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Tracking follower growth, engagement
                                rates, and reach to optimize strategy.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paid Advertising -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Paid
                                <br><span class="text-primary italic">Advertising.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Precision targeting for immediate results. We manage PPC campaigns that convert clicks
                                into customers at the lowest possible cost.
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
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" x2="22" y1="12" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Google Ads</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Search, Display, and Shopping campaigns
                                optimized for maximum conversion value.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Social Ads</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Highly targeted campaigns on Facebook,
                                Instagram, and LinkedIn to reach specific demographics.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="m21.41 11.58-9-5a1 1 0 0 0-1 0l-9 5a1 1 0 0 0 0 1.82l9 5a1 1 0 0 0 1 0l9-5a1 1 0 0 0 0-1.82Z">
                                    </path>
                                    <path d="m12 16.5-9-5"></path>
                                    <path d="m12 16.5 9-5"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Retargeting</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Bringing back visitors who left your
                                site without converting, increasing overall sales.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                    <polyline points="17 6 23 6 23 12"></polyline>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">A/B Testing</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Continuous testing of ad copy,
                                creatives, and audiences to improve performance over time.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Marketing -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Content
                                <br><span class="text-primary italic">Marketing.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Stories that sell. We create valuable content that attracts, informs, and retains your
                                target audience.
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
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" x2="8" y1="13" y2="13"></line>
                                    <line x1="16" x2="8" y1="17" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Blog Writing</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">SEO-optimized articles that drive
                                traffic and establish your brand as a thought leader.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2">
                                    </path>
                                    <path d="M18 14h-8"></path>
                                    <path d="M15 18h-5"></path>
                                    <path d="M10 6h8v4h-8V6Z"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Newsletters</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Email campaigns that nurture leads and
                                keep your existing customers engaged.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m15 12-8.5 8.5c-.83.83-2.17.83-3 0 0 0 0 0 0 0a2.12 2.12 0 0 1 0-3L12 9">
                                    </path>
                                    <path d="M17.64 15 22 10.64"></path>
                                    <path
                                        d="m20.91 11.7-1.25-1.25c-.6-.6-.93-1.4-.93-2.25V2.75A2.75 2.75 0 0 0 16 0h-2.25c-.85 0-1.65.33-2.25.93L10.25 2.2">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Copywriting</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Persuasive sales copy for landing
                                pages, ads, and brochures that drives action.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                    <path d="M3 15h18"></path>
                                    <path d="m15 8-3 3-3-3"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Video Scripts</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Engaging scripts for explainer videos,
                                social reels, and advertisements.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 px-6 border-t border-white/5 bg-black relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-5xl font-medium text-white mb-6">Why Choose <span
                        class="text-primary italic">KhyberSol?</span></h2>
                <p class="text-white/40 max-w-2xl mx-auto font-light">
                    We combine creativity with analytics to deliver marketing that moves the needle.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">01</div>
                    <h3 class="text-white text-lg font-medium mb-3">ROI Focused</h3>
                    <p class="text-white/40 text-sm leading-relaxed">We focus on metrics that matter: leads, sales, and
                        return on ad spend.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">02</div>
                    <h3 class="text-white text-lg font-medium mb-3">Omnichannel</h3>
                    <p class="text-white/40 text-sm leading-relaxed">We create cohesive strategies that work across all
                        your digital touchpoints.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">03</div>
                    <h3 class="text-white text-lg font-medium mb-3">Transparent</h3>
                    <p class="text-white/40 text-sm leading-relaxed">You'll always know exactly where your budget is
                        going and what results it's generating.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    @include('frontend.components.contact-form')

    <!-- Footer -->
    @include('frontend.components.footer')

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        // Simple reveal animation
        gsap.registerPlugin(ScrollTrigger);

        const revealElements = document.querySelectorAll('.reveal');

        revealElements.forEach(element => {
            gsap.fromTo(element,
                { y: 50, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 80%',
                    }
                }
            );
        });
    </script>
</body>

</html>