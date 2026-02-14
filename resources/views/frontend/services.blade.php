<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the comprehensive digital services offered by KhyberSol, including web development, app development, UI/UX design, AI automation, and more.">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>Our Services | KhyberSol</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/imgs/fav.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
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

<body class="grid-bg">

    <!-- Header -->
    @include('frontend.components.header')

    <!-- Hero Section -->
    <section
        class="relative h-screen w-full px-4 md:px-6 pt-24 md:pt-32 overflow-hidden flex items-center justify-center bg-black">
        <!-- Video Background Overlay -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-40">
                <source src="{{ asset('frontend/imgs/services-bg.MOV') }}" type="video/quicktime">
                <source src="{{ asset('frontend/imgs/services-bg.MOV') }}" type="video/mp4">
            </video>
            <!-- Dark Overlay for readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/80 z-10"></div>
        </div>

        <!-- Minimal Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-20">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/[0.05] rounded-full blur-[120px]">
            </div>
            <div
                class="absolute inset-0 bg-[url('{{ asset('frontend/imgs/grid.svg') }}')] bg-center [mask-image:radial-gradient(white,transparent_85%)] opacity-[0.03]">
            </div>
        </div>

        <div class="max-w-5xl mx-auto w-full relative z-30">
            <div class="flex flex-col items-center text-center">
                <div
                    class="hero-tag mb-6 py-1 px-3 border border-white/20 rounded-full text-[10px] uppercase tracking-[0.2em] text-white/70 font-bold backdrop-blur-sm">
                    Expert Solutions
                </div>

                <h1
                    class="hero-title text-4xl sm:text-5xl md:text-6xl font-medium leading-[1.2] tracking-tight text-white mb-8">
                    Comprehensive <span class="text-primary italic">digital services</span> <br class="hidden md:block">
                    for modern businesses.
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-xl mb-12 leading-relaxed font-light">
                    From design to development, marketing to maintenance—we offer end-to-end digital solutions to help
                    your business thrive online.
                </p>

                <div class="hero-actions hero-stats flex items-center gap-8">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">10+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Services</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">24/7</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Support</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">100%</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Quality</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-px bg-white/5 border border-white/5 rounded-3xl overflow-hidden reveal">
                <!-- Service 1: Web Development -->
                <div id="web-dev"
                    class="bg-black/60 backdrop-blur-md p-8 md:p-12 hover:bg-black/80 transition-all duration-500 group">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <span
                                class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Development</span>
                        </div>

                        <h3
                            class="text-3xl font-medium tracking-tight text-white mb-6 group-hover:text-primary transition-colors">
                            Web Development</h3>

                        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
                            We build everything from high-converting business websites and e-commerce platforms to
                            complex web applications. Our solutions are designed to perform, scale, and deliver results
                            for your brand.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 mt-auto">
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Business Sites
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> E-Commerce
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Web Apps
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Portals & LMS
                            </div>
                        </div>

                        <a href="{{ route('services.web-development') }}"
                            class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-[0.2em] group/link">
                            Explore Solution
                            <span class="group-hover/link:translate-x-2 transition-transform duration-300">→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 2: App Development -->
                <div id="app-dev"
                    class="bg-black/60 backdrop-blur-md p-8 md:p-12 hover:bg-black/80 transition-all duration-500 group border-l border-white/5">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Mobile</span>
                        </div>

                        <h3
                            class="text-3xl font-medium tracking-tight text-white mb-6 group-hover:text-primary transition-colors">
                            App Development</h3>

                        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
                            High-performance mobile applications for iOS and Android. Our expert developers use
                            cutting-edge technologies like React Native and Flutter to create seamless user experiences.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 mt-auto">
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Native iOS
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Android
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Cross-Platform
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> App Store SEO
                            </div>
                        </div>

                        <a href="{{ route('services.app-development') }}"
                            class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-[0.2em] group/link">
                            Explore Solution
                            <span class="group-hover/link:translate-x-2 transition-transform duration-300">→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 3: UI/UX Design -->
                <div id="uiux"
                    class="bg-black/60 backdrop-blur-md p-8 md:p-12 hover:bg-black/80 transition-all duration-500 group border-t border-white/5">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span
                                class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Creative</span>
                        </div>

                        <h3
                            class="text-3xl font-medium tracking-tight text-white mb-6 group-hover:text-primary transition-colors">
                            UI/UX Design</h3>

                        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
                            Great design isn't just about looks—it's about creating intuitive experiences that users
                            love. We combine aesthetics with functionality to deliver designs that convert.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 mt-auto">
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> User Research
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Prototyping
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Brand Systems
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Motion Design
                            </div>
                        </div>

                        <a href="{{ route('services.ui-ux-design') }}"
                            class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-[0.2em] group/link">
                            Explore Solution
                            <span class="group-hover/link:translate-x-2 transition-transform duration-300">→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 4: SEO Optimization -->
                <div id="seo"
                    class="bg-black/60 backdrop-blur-md p-8 md:p-12 hover:bg-black/80 transition-all duration-500 group border-t border-l border-white/5">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <span
                                class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Visibility</span>
                        </div>

                        <h3
                            class="text-3xl font-medium tracking-tight text-white mb-6 group-hover:text-primary transition-colors">
                            SEO Strategy</h3>

                        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
                            Get found by the right people at the right time. Our data-driven SEO strategies help you
                            climb search rankings and drive qualified organic traffic to your site.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 mt-auto">
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Technical SEO
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Keywords
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Content Audits
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> ROI Reporting
                            </div>
                        </div>

                        <a href="{{ route('services.seo-optimization') }}"
                            class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-[0.2em] group/link">
                            Explore Solution
                            <span class="group-hover/link:translate-x-2 transition-transform duration-300">→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 5: Digital Marketing -->
                <div id="marketing"
                    class="bg-black/60 backdrop-blur-md p-8 md:p-12 hover:bg-black/80 transition-all duration-500 group border-t border-white/5">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                            </div>
                            <span class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Growth</span>
                        </div>

                        <h3
                            class="text-3xl font-medium tracking-tight text-white mb-6 group-hover:text-primary transition-colors">
                            Digital Marketing</h3>

                        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
                            Grow your brand and reach your audience effectively. We combine strategy, creative, and data
                            to deliver marketing campaigns that drive measurable ROI.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 mt-auto">
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> SMM & Ads
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> PPC Campaigns
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Automation
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Performance
                            </div>
                        </div>

                        <a href="{{ route('services.digital-marketing') }}"
                            class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-[0.2em] group/link">
                            Explore Solution
                            <span class="group-hover/link:translate-x-2 transition-transform duration-300">→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 6: Graphic Design -->
                <div id="branding"
                    class="bg-black/60 backdrop-blur-md p-8 md:p-12 hover:bg-black/80 transition-all duration-500 group border-t border-l border-white/5">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <span
                                class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Visuals</span>
                        </div>

                        <h3
                            class="text-3xl font-medium tracking-tight text-white mb-6 group-hover:text-primary transition-colors">
                            Graphic & Branding</h3>

                        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
                            Powerful visual identities that resonate with your audience. From logos to complete brand
                            guidelines, we help you stand out from the competition.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 mt-auto">
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Logo Design
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Guidelines
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Print Media
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Social Assets
                            </div>
                        </div>

                        <a href="{{ route('services.graphic-branding') }}"
                            class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-[0.2em] group/link">
                            Explore Solution
                            <span class="group-hover/link:translate-x-2 transition-transform duration-300">→</span>
                        </a>
                    </div>
                </div>

                <!-- Service 7: AI & Automation -->
                <div id="ai"
                    class="bg-black/60 backdrop-blur-md p-8 md:p-12 hover:bg-black/80 transition-all duration-500 group border-t border-white/5">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                            <span class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Future</span>
                        </div>

                        <h3
                            class="text-3xl font-medium tracking-tight text-white mb-6 group-hover:text-primary transition-colors">
                            AI & Automation</h3>

                        <p class="text-white/50 text-sm leading-relaxed mb-8 font-light">
                            Deploy intelligent AI chatbots and automate complex workflows to enhance customer engagement
                            and drive unprecedented efficiency in your operations.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10 mt-auto">
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> AI Chatbots
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Workflow Auto
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Custom Models
                            </div>
                            <div
                                class="flex items-center gap-3 text-[11px] text-white/60 uppercase tracking-widest border border-white/5 bg-white/[0.02] p-3 rounded-lg">
                                <span class="w-1 h-1 bg-primary rounded-full"></span> Data Insights
                            </div>
                        </div>

                        <a href="{{ route('services.ai-automation') }}"
                            class="inline-flex items-center gap-2 text-white text-xs font-bold uppercase tracking-[0.2em] group/link">
                            Explore Solution
                            <span class="group-hover/link:translate-x-2 transition-transform duration-300">→</span>
                        </a>
                    </div>
                </div>

                <!-- Empty slot or Placeholder for 8th service (future) -->
                <div
                    class="bg-black/40 backdrop-blur-md p-8 md:p-12 border-t border-l border-white/5 flex items-center justify-center text-center">
                    <div>
                        <div class="text-primary/20 text-4xl font-bold mb-4 italic">Next.</div>
                        <p class="text-white/20 text-[10px] uppercase tracking-widest">More services coming soon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Solution CTA -->
    <section class="py-12 px-6">
        <div class="max-w-4xl mx-auto text-center reveal">
            <h2 class="text-3xl md:text-5xl font-bold mb-8">Need a custom solution?</h2>
            <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
                Don't see exactly what you need? We offer custom solutions tailored to your specific requirements. Let's
                talk.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn-primary">Start a Conversation</a>
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