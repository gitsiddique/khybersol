<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Services | KhyberSol</title>
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
                    Expert Web Engineering
                </div>

                <h1
                    class="hero-title text-5xl sm:text-6xl md:text-8xl font-medium leading-[0.95] tracking-tighter text-white mb-8">
                    WEB <span class="text-primary italic font-light">CRAFT.</span>
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-2xl mb-10 leading-relaxed font-light">
                    We architect, design, and develop high-performance web ecosystems. From high-conversion business
                    platforms to complex enterprise-grade applications, we deliver digital excellence at scale.
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

            <!-- Corporate Websites -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Corporate
                                <br><span class="text-primary italic">Websites.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                High-performance digital presence for modern brands. We focus on conversion
                                architecture, brand authority, and seamless user experiences.
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
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Brand Identity</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Custom visual design that aligns with
                                your corporate identity and speaks directly to your target demographic.</p>
                        </div>
                        <!-- Feature Card 2 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Lead Generation</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Strategic placement of call-to-actions
                                and optimized user flows to maximize visitor-to-lead conversion rates.</p>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2v20" />
                                    <path d="M2 12h20" />
                                    <path d="m4.93 4.93 14.14 14.14" />
                                    <path d="m19.07 4.93-14.14 14.14" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Performance Tech</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Utilizing modern frameworks to ensure
                                sub-second load times and flawless performance across all device types.</p>
                        </div>
                        <!-- Feature Card 4 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M20 7h-9" />
                                    <path d="M14 17H5" />
                                    <circle cx="17" cy="17" r="3" />
                                    <circle cx="7" cy="7" r="3" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">CMS Flexibility</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Easy-to-use content management systems
                                (Headless or Integrated) that empower your team to update content effortlessly.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commerce Platforms -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Commerce
                                <br><span class="text-primary italic">Platforms.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Scalable retail ecosystems built for high-volume transactions. We engineer secure,
                                intuitive, and high-performance online stores.
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
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Transaction Security</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">PCI-compliant payment integrations and
                                robust security protocols to protect sensitive customer data and build trust.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                                    <line x1="12" x2="12" y1="22.08" y2="12" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Inventory Intel</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Real-time inventory tracking, automated
                                stock alerts, and multi-channel synchronization for seamless operations.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="8" cy="21" r="1" />
                                    <circle cx="19" cy="21" r="1" />
                                    <path
                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">UX Checkout</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Frictionless multi-step or single-page
                                checkout experiences designed to reduce cart abandonment and increase AOV.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="12" x2="12" y1="20" y2="10" />
                                    <line x1="18" x2="18" y1="20" y2="4" />
                                    <line x1="6" x2="6" y1="20" y2="16" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Analytics Engine</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Deep integration with sales analytics
                                and customer behavior tracking to drive data-informed marketing decisions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enterprise Apps -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Enterprise
                                <br><span class="text-primary italic">Apps.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Complex digital products and data-driven systems. We build robust SaaS platforms and
                                internal business tools.
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
                                    <rect width="8" height="8" x="2" y="2" rx="2" />
                                    <path
                                        d="M14 2c.6 0 1.1.2 1.5.5L20 6.5c.4.4.5.9.5 1.5v9c0 1.1-.9 2-2 2h-6c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <path d="M10 22v-2" />
                                    <path d="M4 22v-2" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Scalable Infra</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Cloud-native architecture designed to
                                scale horizontally, ensuring your application grows as your user base expands.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" x2="22" y1="12" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">API Ecosystems</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Secure and well-documented RESTful or
                                GraphQL APIs for seamless integration with third-party services.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Data Security</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Implementation of advanced encryption,
                                role-based access control (RBAC), and continuous monitoring.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Real-time Systems</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">WebSocket integrations and reactive
                                programming for real-time dashboards and notifications.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-12 px-6 bg-black">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-end justify-between mb-12 gap-6 reveal">
                <div class="max-w-xl">
                    <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-4">Why <span
                            class="text-primary italic">Choose Us.</span></h2>
                    <p class="text-white/40 text-sm font-light leading-relaxed">Excellence in every line of code,
                        focused on your business growth and digital presence.</p>
                </div>
                <div class="hidden md:block h-[1px] flex-grow bg-white/10 mx-12 mb-4"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
                <!-- Cards with glassmorphism to match home -->
                <div
                    class="bg-white/[0.02] border border-white/5 p-8 rounded-[1.5rem] hover:bg-white/[0.04] hover:border-primary/20 transition-all duration-500 group">
                    <div
                        class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="text-white text-sm font-medium mb-3">Performance</h4>
                    <p class="text-white/30 text-[11px] leading-relaxed">Lightning-fast load times and core web vitals
                        optimization.</p>
                </div>
                <div
                    class="bg-white/[0.02] border border-white/5 p-8 rounded-[1.5rem] hover:bg-white/[0.04] hover:border-primary/20 transition-all duration-500 group">
                    <div
                        class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h4 class="text-white text-sm font-medium mb-3">Security</h4>
                    <p class="text-white/30 text-[11px] leading-relaxed">Enterprise-grade security protocols and data
                        protection.</p>
                </div>
                <div
                    class="bg-white/[0.02] border border-white/5 p-8 rounded-[1.5rem] hover:bg-white/[0.04] hover:border-primary/20 transition-all duration-500 group">
                    <div
                        class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                    </div>
                    <h4 class="text-white text-sm font-medium mb-3">Modern Stack</h4>
                    <p class="text-white/30 text-[11px] leading-relaxed">Built with the latest technologies for
                        long-term scalability.</p>
                </div>
                <div
                    class="bg-white/[0.02] border border-white/5 p-8 rounded-[1.5rem] hover:bg-white/[0.04] hover:border-primary/20 transition-all duration-500 group">
                    <div
                        class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 013 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                        </svg>
                    </div>
                    <h4 class="text-white text-sm font-medium mb-3">Support</h4>
                    <p class="text-white/30 text-[11px] leading-relaxed">Dedicated maintenance and continuous technical
                        support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-12 px-6 bg-black">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 reveal">
                <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white">Our <span
                        class="text-primary italic">Process.</span></h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 reveal">
                <div
                    class="bg-white/[0.02] p-8 rounded-[1.5rem] border border-white/5 group hover:bg-white/[0.04] transition-all duration-500">
                    <span class="text-[10px] text-primary/60 font-bold uppercase tracking-widest block mb-4">Step
                        01</span>
                    <h4 class="text-white text-sm font-medium mb-3 group-hover:text-primary transition-colors">Discovery
                    </h4>
                    <p class="text-white/20 text-[11px] leading-relaxed">Deep dive into your business goals, target
                        audience, and project requirements.</p>
                </div>
                <div
                    class="bg-white/[0.02] p-8 rounded-[1.5rem] border border-white/5 group hover:bg-white/[0.04] transition-all duration-500">
                    <span class="text-[10px] text-primary/60 font-bold uppercase tracking-widest block mb-4">Step
                        02</span>
                    <h4 class="text-white text-sm font-medium mb-3 group-hover:text-primary transition-colors">Strategy
                    </h4>
                    <p class="text-white/20 text-[11px] leading-relaxed">Defining the tech stack, sitemap, and user
                        experience flow for maximum impact.</p>
                </div>
                <div
                    class="bg-white/[0.02] p-8 rounded-[1.5rem] border border-white/5 group hover:bg-white/[0.04] transition-all duration-500">
                    <span class="text-[10px] text-primary/60 font-bold uppercase tracking-widest block mb-4">Step
                        03</span>
                    <h4 class="text-white text-sm font-medium mb-3 group-hover:text-primary transition-colors">Execution
                    </h4>
                    <p class="text-white/20 text-[11px] leading-relaxed">Agile development with clean code, regular
                        updates, and quality assurance.</p>
                </div>
                <div
                    class="bg-white/[0.02] p-8 rounded-[1.5rem] border border-white/5 group hover:bg-white/[0.04] transition-all duration-500">
                    <span class="text-[10px] text-primary/60 font-bold uppercase tracking-widest block mb-4">Step
                        04</span>
                    <h4 class="text-white text-sm font-medium mb-3 group-hover:text-primary transition-colors">Launch
                    </h4>
                    <p class="text-white/20 text-[11px] leading-relaxed">Deployment, final performance checks, and
                        transition to ongoing support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <!-- Contact Form -->
            @include('frontend.components.contact-form')
        </div>
    </section>

    <!-- Footer -->
    @include('frontend.components.footer')

    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>