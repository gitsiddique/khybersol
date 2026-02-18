<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="KhyberSol is a leading digital agency specializing in web development, app development, UI/UX design, and AI automation. We craft exceptional digital experiences that transform businesses.">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>KhyberSol | Digital Solutions that Transform Businesses</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/imgs/fav.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
    @include('frontend.components.google-analytics')
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
                <source src="{{ asset('frontend/imgs/home-bg.mp4') }}" type="video/mp4" media="(min-width: 768px)">
            </video>
            <!-- Dark Overlay to ensure text readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/80 z-10"></div>
        </div>

        <!-- Minimal Background Elements (Glow & Grid) -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-20">
            <!-- Very subtle glows -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/[0.05] rounded-full blur-[120px]">
            </div>

            <!-- Minimal Grid Overlay -->
            <div
                class="absolute inset-0 bg-[url('{{ asset('frontend/imgs/grid.svg') }}')] bg-center [mask-image:radial-gradient(white,transparent_85%)] opacity-[0.03]">
            </div>
        </div>

        <div class="max-w-5xl mx-auto w-full relative z-30">
            <div class="flex flex-col items-center text-center">
                <!-- Small Label -->
                <div
                    class="hero-tag mb-6 py-1 px-3 border border-white/10 rounded-full text-[10px] uppercase tracking-[0.2em] text-white/40 font-bold backdrop-blur-sm">
                    Digital Agency & Design Studio
                </div>

                <!-- Minimal Title -->
                <h1
                    class="hero-title text-4xl sm:text-5xl md:text-6xl font-medium leading-[1.2] tracking-tight text-white mb-8">
                    Crafting <span class="text-primary italic">exceptional</span> digital <br class="hidden md:block">
                    experiences through design & code.
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-xl mb-12 leading-relaxed font-light">
                    We partner with forward-thinking brands to build high-performance
                    products that stand out in the digital landscape.
                </p>

                <!-- Minimal Action Buttons -->
                <div class="hero-actions flex flex-col sm:flex-row items-center gap-6 mb-24">
                    <a href="{{ route('projects') }}"
                        class="text-white text-sm font-medium group flex items-center gap-2">
                        View our work
                        <span class="w-8 h-[1px] bg-primary transition-all group-hover:w-12"></span>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="px-8 py-3 rounded-full border border-white/10 bg-white/[0.02] hover:bg-white/[0.05] text-white text-sm font-medium transition-all backdrop-blur-md">
                        Get in touch
                    </a>
                </div>

                <!-- Simple Stats -->
                <div class="hero-stats flex flex-wrap justify-center gap-x-12 gap-y-6 w-full opacity-60">
                    <div class="text-center">
                        <div class="text-xl md:text-2xl font-medium text-white mb-1">50+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/40">Projects</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xl md:text-2xl font-medium text-white mb-1">98%</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/40">Success</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xl md:text-2xl font-medium text-white mb-1">12+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/40">Experts</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Teaser -->
    <section class="py-16 px-6 bg-black relative overflow-hidden">
        <!-- Background accents -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/[0.03] rounded-full blur-[100px] -mr-64 -mt-64">
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 items-center">
                <!-- Content Side -->
                <div class="lg:col-span-7 reveal">
                    <div class="inline-flex items-center gap-3 mb-8">
                        <span class="w-8 h-[1px] bg-primary"></span>
                        <span class="text-primary/60 text-[10px] font-bold tracking-[0.3em] uppercase">About</span>
                    </div>

                    <h2 class="text-4xl md:text-6xl font-medium tracking-tight text-white mb-10 leading-[1.1]">
                        Transforming ideas into <br>
                        <span class="text-primary italic">impactful</span> digital reality.
                    </h2>

                    <div class="space-y-6 max-w-2xl">
                        <p class="text-white/50 text-lg leading-relaxed font-light">
                            We build high-performance digital products that help businesses grow. From custom websites
                            to mobile experiences, we turn your complex ideas into simple, beautiful, and effective
                            solutions.
                        </p>
                        <p class="text-white/40 text-base leading-relaxed font-light">
                            Based in Pakistan and serving clients worldwide, we combine strategic thinking with
                            world-class design and engineering. We don't just build software—we build your digital
                            future.
                        </p>
                    </div>

                    <div class="mt-12 flex items-center gap-10">
                        <a href="{{ route('about') }}"
                            class="group inline-flex items-center gap-3 text-white text-xs font-bold uppercase tracking-[0.2em]">
                            Our Story
                            <span
                                class="w-10 h-10 border border-white/10 rounded-full flex items-center justify-center group-hover:bg-primary group-hover:border-primary group-hover:text-black transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </a>

                    </div>
                </div>

                <!-- Visual/Stats Side -->
                <div class="lg:col-span-5 grid grid-cols-1 gap-6 reveal">
                    <div
                        class="group p-10 bg-white/[0.02] border border-white/5 rounded-[2rem] hover:bg-white/[0.04] transition-all duration-500">
                        <div class="flex items-start justify-between mb-8">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9.75 17L9 21l-1 1h8l-1-1-.75-4M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span
                                class="text-white/10 text-5xl font-bold group-hover:text-primary/10 transition-colors italic">01</span>
                        </div>
                        <h3 class="text-2xl font-medium text-white mb-4">Strategic Design</h3>
                        <p class="text-white/40 text-sm leading-relaxed font-light">
                            We don't just make things look pretty. We design intuitive, user-centric interfaces that
                            tell your brand story and drive meaningful engagement.
                        </p>
                    </div>

                    <div
                        class="group p-10 bg-white/[0.02] border border-white/5 rounded-[2rem] hover:bg-white/[0.04] transition-all duration-500">
                        <div class="flex items-start justify-between mb-8">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.172-1.172a4 4 0 115.656 5.656L10 17.657" />
                                </svg>
                            </div>
                            <span
                                class="text-white/10 text-5xl font-bold group-hover:text-primary/10 transition-colors italic">02</span>
                        </div>
                        <h3 class="text-2xl font-medium text-white mb-4">Technical Mastery</h3>
                        <p class="text-white/40 text-sm leading-relaxed font-light">
                            Our engineering team builds robust, scalable, and secure applications using the latest
                            technologies to ensure your business is future-ready.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Teaser -->
    <section class="py-16 px-6 relative overflow-hidden">
        <!-- Background accents -->
        <div
            class="absolute top-1/2 left-0 w-[500px] h-[500px] bg-primary/[0.03] rounded-full blur-[100px] -ml-64 -translate-y-1/2">
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col items-center text-center mb-16 reveal">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center justify-center gap-3 mb-6">
                        <span class="w-8 h-[1px] bg-primary"></span>
                        <span class="text-primary/60 text-[10px] font-bold tracking-[0.3em] uppercase">Expertise</span>
                        <span class="w-8 h-[1px] bg-primary"></span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-medium tracking-tight text-white leading-[1.1]">
                        Everything you need to <br>
                        <span class="text-primary italic">succeed online.</span>
                    </h2>
                </div>
            </div>

            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-px bg-white/5 border border-white/5 rounded-[2rem] overflow-hidden reveal">
                <!-- Web Development -->
                <div class="group bg-black/40 backdrop-blur-md p-10 hover:bg-black/80 transition-all duration-500">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white mb-4 group-hover:text-primary transition-colors">Web
                        Development</h3>
                    <p class="text-white/40 text-[10px] leading-relaxed font-light mb-8">
                        High-converting websites, e-commerce stores, and custom web applications.
                    </p>
                    <a href="{{ route('services.web-development') }}"
                        class="inline-flex items-center gap-2 text-[10px] text-white/20 group-hover:text-white transition-colors uppercase tracking-widest font-bold">
                        Details <span>→</span>
                    </a>
                </div>

                <!-- App Development -->
                <div
                    class="group bg-black/40 backdrop-blur-md p-10 hover:bg-black/80 transition-all duration-500 border-l border-white/5 md:border-l-0 lg:border-l">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white mb-4 group-hover:text-primary transition-colors">App
                        Development</h3>
                    <p class="text-white/40 text-[10px] leading-relaxed font-light mb-8">
                        Native and cross-platform mobile apps for iOS and Android devices.
                    </p>
                    <a href="{{ route('services.app-development') }}"
                        class="inline-flex items-center gap-2 text-[10px] text-white/20 group-hover:text-white transition-colors uppercase tracking-widest font-bold">
                        Details <span>→</span>
                    </a>
                </div>

                <!-- UI/UX Design -->
                <div
                    class="group bg-black/40 backdrop-blur-md p-10 hover:bg-black/80 transition-all duration-500 border-t border-white/5 md:border-t-0 lg:border-l">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white mb-4 group-hover:text-primary transition-colors">UI/UX
                        Design</h3>
                    <p class="text-white/40 text-[10px] leading-relaxed font-light mb-8">
                        User-centric design that delivers intuitive and beautiful interfaces.
                    </p>
                    <a href="{{ route('services.ui-ux-design') }}"
                        class="inline-flex items-center gap-2 text-[10px] text-white/20 group-hover:text-white transition-colors uppercase tracking-widest font-bold">
                        Details <span>→</span>
                    </a>
                </div>

                <!-- AI & Automation -->
                <div
                    class="group bg-black/40 backdrop-blur-md p-10 hover:bg-black/80 transition-all duration-500 border-t border-white/5 lg:border-t-0 lg:border-l">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white mb-4 group-hover:text-primary transition-colors">AI &
                        Automation</h3>
                    <p class="text-white/40 text-[10px] leading-relaxed font-light mb-8">
                        Intelligent chatbots and automated workflows to scale your business.
                    </p>
                    <a href="{{ route('services.ai-automation') }}"
                        class="inline-flex items-center gap-2 text-[10px] text-white/20 group-hover:text-white transition-colors uppercase tracking-widest font-bold">
                        Details <span>→</span>
                    </a>
                </div>

                <!-- View All Services -->
                <a href="{{ route('services') }}"
                    class="group bg-primary/5 backdrop-blur-md p-10 hover:bg-primary transition-all duration-500 flex flex-col items-center justify-center text-center border-t border-white/5 lg:border-t-0 lg:border-l">
                    <div
                        class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center text-primary mb-6 group-hover:bg-black group-hover:text-primary transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white group-hover:text-black transition-colors mb-2">View More
                    </h3>
                    <p class="text-white/40 text-[10px] uppercase tracking-[0.2em] font-bold group-hover:text-black/60">
                        All Services
                    </p>
                </a>
            </div>
        </div>
    </section>

    <!-- Technology Slider Section -->
    <section class="py-8 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Compact Central Title -->
            <div class="flex flex-col items-center justify-center text-center mb-8">
                <h2 class="text-sm font-bold uppercase tracking-[0.3em] text-white/30">
                    Our <span class="text-primary/60">Tech</span> Stack
                </h2>
            </div>

            <!-- Slider Wrapper with Mask -->
            <div class="relative tech-slider-wrapper">
                <!-- Fade Masks -->
                <div class="absolute left-0 top-0 w-32 h-full bg-gradient-to-r from-transparent to-transparent z-20">
                </div>
                <div class="absolute right-0 top-0 w-32 h-full bg-gradient-to-l from-transparent to-transparent z-20">
                </div>

                <div class="tech-slider flex whitespace-nowrap overflow-hidden">
                    <div class="tech-slide flex items-center gap-20 px-10">
                        <!-- Set 1 -->
                        <a href="https://wordpress.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/wordpress.svg"
                                    class="w-7 h-7 filter invert opacity-80 transition-all duration-500"
                                    alt="WordPress">
                            </div>
                            <span
                                class="text-white/40 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">WordPress</span>
                        </a>
                        <a href="https://elementor.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/elementor.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Elementor">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Elementor</span>
                        </a>
                        <a href="https://laravel.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/laravel.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Laravel">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Laravel</span>
                        </a>
                        <a href="https://www.drupal.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/drupal.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Drupal">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Drupal</span>
                        </a>
                        <a href="https://react.dev" target="_blank" class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/react.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="React">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">React</span>
                        </a>
                        <a href="https://nodejs.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/nodedotjs.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Node JS">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Node
                                JS</span>
                        </a>
                        <a href="https://nextjs.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/nextdotjs.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Next JS">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Next
                                JS</span>
                        </a>
                        <a href="https://reactnative.dev" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/react.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="React Native">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">React
                                Native</span>
                        </a>
                        <a href="https://flutter.dev" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/flutter.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Flutter">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Flutter</span>
                        </a>
                        <a href="https://sass-lang.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/sass.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Sass">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Sass</span>
                        </a>
                        <a href="https://www.javascript.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/javascript.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="JavaScript">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">JavaScript</span>
                        </a>
                        <a href="https://www.php.net" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/php.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="PHP">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">PHP</span>
                        </a>
                        <a href="https://www.python.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/python.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Python">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Python</span>
                        </a>
                        <a href="https://learn.microsoft.com/en-us/dotnet/csharp/" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/csharp.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="C#">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">C#</span>
                        </a>
                        <a href="https://tailwindcss.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/tailwindcss.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Tailwind CSS">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Tailwind
                                CSS</span>
                        </a>
                        <a href="https://getbootstrap.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/bootstrap.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Bootstrap">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Bootstrap</span>
                        </a>
                        <a href="https://www.mysql.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/mysql.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="MySQL">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">MySQL</span>
                        </a>
                        <a href="https://cpanel.net" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/cpanel.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="C-Panel">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">C-Panel</span>
                        </a>
                        <a href="https://git-scm.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/git.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Git">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Git</span>
                        </a>
                        <a href="https://getcomposer.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/composer.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Composer">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Composer</span>
                        </a>
                        <a href="https://www.ddev.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/ddev.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="DDEV">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">DDEV</span>
                        </a>
                        <a href="https://www.docker.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/docker.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Docker">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Docker</span>
                        </a>
                        <a href="https://sites.google.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/google.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Google Site">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Google
                                Site</span>
                        </a>
                        <a href="https://www.wix.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/wix.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Wix">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Wix</span>
                        </a>
                        <a href="https://www.trae.ai/" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/codeium.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Trae IDE">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Trae
                                IDE</span>
                        </a>
                        <a href="https://code.visualstudio.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/visualstudiocode.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="VS Code">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">VS
                                Code</span>
                        </a>
                        <a href="https://www.canva.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/canva.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Canva">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Canva</span>
                        </a>
                        <a href="https://www.adobe.com/products/photoshop.html" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/adobephotoshop.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Photoshop">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Photoshop</span>
                        </a>
                    </div>

                    <!-- Duplicate for seamless loop -->
                    <div class="tech-slide flex items-center gap-20 px-10">
                        <a href="https://wordpress.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/wordpress.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="WordPress">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">WordPress</span>
                        </a>
                        <a href="https://elementor.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/elementor.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Elementor">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Elementor</span>
                        </a>
                        <a href="https://laravel.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/laravel.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Laravel">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Laravel</span>
                        </a>
                        <a href="https://www.drupal.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/drupal.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Drupal">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Drupal</span>
                        </a>
                        <a href="https://react.dev" target="_blank" class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/react.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="React">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">React</span>
                        </a>
                        <a href="https://nodejs.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/nodedotjs.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Node JS">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Node
                                JS</span>
                        </a>
                        <a href="https://nextjs.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/nextdotjs.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Next JS">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Next
                                JS</span>
                        </a>
                        <a href="https://reactnative.dev" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/react.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="React Native">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">React
                                Native</span>
                        </a>
                        <a href="https://flutter.dev" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/flutter.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Flutter">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Flutter</span>
                        </a>
                        <a href="https://sass-lang.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/sass.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Sass">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Sass</span>
                        </a>
                        <a href="https://www.javascript.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/javascript.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="JavaScript">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">JavaScript</span>
                        </a>
                        <a href="https://www.php.net" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/php.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="PHP">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">PHP</span>
                        </a>
                        <a href="https://www.python.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/python.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Python">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Python</span>
                        </a>
                        <a href="https://learn.microsoft.com/en-us/dotnet/csharp/" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/csharp.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="C#">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">C#</span>
                        </a>
                        <a href="https://tailwindcss.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/tailwindcss.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Tailwind CSS">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Tailwind
                                CSS</span>
                        </a>
                        <a href="https://getbootstrap.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/bootstrap.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Bootstrap">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Bootstrap</span>
                        </a>
                        <a href="https://www.mysql.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/mysql.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="MySQL">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">MySQL</span>
                        </a>
                        <a href="https://cpanel.net" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/cpanel.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="C-Panel">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">C-Panel</span>
                        </a>
                        <a href="https://git-scm.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/git.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Git">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Git</span>
                        </a>
                        <a href="https://getcomposer.org" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/composer.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Composer">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Composer</span>
                        </a>
                        <a href="https://www.ddev.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/ddev.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="DDEV">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">DDEV</span>
                        </a>
                        <a href="https://www.docker.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/docker.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Docker">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Docker</span>
                        </a>
                        <a href="https://sites.google.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/google.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Google Site">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Google
                                Site</span>
                        </a>
                        <a href="https://www.wix.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/wix.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Wix">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Wix</span>
                        </a>
                        <a href="https://www.trae.ai/" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/codeium.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Trae IDE">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Trae
                                IDE</span>
                        </a>
                        <a href="https://code.visualstudio.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/visualstudiocode.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="VS Code">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">VS
                                Code</span>
                        </a>
                        <a href="https://www.canva.com" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/canva.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500" alt="Canva">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Canva</span>
                        </a>
                        <a href="https://www.adobe.com/products/photoshop.html" target="_blank"
                            class="flex flex-col items-center gap-4 group/item">
                            <div
                                class="w-16 h-16 rounded-2xl bg-white/[0.03] border border-white/5 flex items-center justify-center transition-all duration-500">
                                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/adobephotoshop.svg"
                                    class="w-7 h-7 filter invert opacity-30 transition-all duration-500"
                                    alt="Photoshop">
                            </div>
                            <span
                                class="text-white/20 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">Photoshop</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .tech-slider {
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: 0;
        }

        .tech-slide {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: space-around;
            min-width: 100%;
            animation: scroll 25s linear infinite;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .tech-slider:hover .tech-slide {
            animation-play-state: paused;
        }

        /* Responsive adjustments for the technology slider */
        @media (max-width: 768px) {
            .tech-slide {
                gap: 3rem !important;
                /* Reduce gap on mobile */
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
                animation-duration: 20s;
                /* Slightly faster on small screens to feel more dynamic */
            }

            .tech-slide .group\/item .w-16 {
                width: 3.5rem !important;
                height: 3.5rem !important;
            }

            .tech-slide .group\/item img {
                width: 1.5rem !important;
                height: 1.5rem !important;
            }

            .tech-slide .group\/item span {
                font-size: 8px !important;
            }

            /* Adjust fade masks for mobile */
            .tech-slider-wrapper .absolute.w-32 {
                width: 4rem !important;
            }
        }
    </style>

    <!-- Featured Work Section -->
    <section class="relative min-h-screen w-full bg-black flex items-center overflow-hidden py-16 px-6">
        <div class="max-w-6xl mx-auto w-full relative z-10">
            <!-- Section Header -->
            <div class="mb-16 reveal">
                <div class="inline-flex items-center gap-3 mb-6">
                    <span class="w-8 h-[1px] bg-primary"></span>
                    <span class="text-primary/60 text-[10px] font-bold tracking-[0.3em] uppercase">Featured Case
                        Study</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-medium text-white tracking-tight">
                    Government of <span class="text-primary italic">Khyber Pakhtunkhwa, Pakistan.</span>
                </h2>
            </div>

            <!-- Project Structural Grid -->
            <div class="grid lg:grid-cols-12 gap-12 items-start">

                <!-- Left: Information Panel -->
                <div class="lg:col-span-5 reveal">
                    <div class="space-y-10">
                        <div>
                            <h3 class="text-white text-lg font-medium mb-4">KPEZDMC Official Platform</h3>
                            <p class="text-white/50 text-sm leading-relaxed font-light">
                                We developed the official digital presence for the Khyber Pakhtunkhwa Economic Zones
                                Development and Management Company. This platform serves as the central hub for
                                industrial growth and economic zone management in the region.
                            </p>
                        </div>

                        <!-- Key Features List -->
                        <div class="grid grid-cols-1 gap-6">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white text-xs font-bold uppercase tracking-wider mb-1">Secure
                                        Architecture</h4>
                                    <p class="text-white/40 text-[11px] leading-normal">High-security Drupal
                                        infrastructure for government data protection.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16m-7 6h7" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white text-xs font-bold uppercase tracking-wider mb-1">Content
                                        Management</h4>
                                    <p class="text-white/40 text-[11px] leading-normal">Custom CMS tools for easy
                                        internal updates and document management.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white text-xs font-bold uppercase tracking-wider mb-1">Dynamic
                                        Performance</h4>
                                    <p class="text-white/40 text-[11px] leading-normal">Optimized for fast loading
                                        across international networks.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Simple CTA -->
                        <div class="pt-6 flex items-center gap-6">
                            <a href="https://kpezdmc.org.pk/" target="_blank"
                                class="text-primary text-[10px] font-bold uppercase tracking-[0.2em] group flex items-center gap-2">
                                Visit Website <span>→</span>
                            </a>
                            <a href="{{ route('projects') }}"
                                class="text-white/30 hover:text-white text-[10px] font-bold uppercase tracking-[0.2em] transition-colors">
                                View Case Study
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual Representation -->
                <div class="lg:col-span-7 reveal">
                    <div class="relative bg-white/[0.02] border border-white/5 rounded-2xl p-4 md:p-8">
                        <!-- Simplified Browser UI -->
                        <div class="bg-black border border-white/10 rounded-xl overflow-hidden shadow-2xl">
                            <div class="bg-white/5 px-4 py-2 border-b border-white/10 flex items-center gap-4">
                                <div class="flex gap-1.5">
                                    <div class="w-2 h-2 rounded-full bg-white/10"></div>
                                    <div class="w-2 h-2 rounded-full bg-white/10"></div>
                                    <div class="w-2 h-2 rounded-full bg-white/10"></div>
                                </div>
                                <div
                                    class="bg-white/5 rounded-full px-4 py-1 text-[8px] text-white/20 font-mono tracking-wider flex-1 max-w-[200px]">
                                    https://kpezdmc.org.pk/
                                </div>
                            </div>
                            <!-- Mockup Content -->
                            <div
                                class="aspect-video bg-gradient-to-br from-black to-[#0a0a0a] p-12 relative flex flex-col justify-center">
                                <div class="relative z-10">
                                    <span
                                        class="text-primary/40 text-[9px] font-bold uppercase tracking-[0.4em] mb-4 block">Official
                                        Web Platform</span>
                                    <h4 class="text-2xl text-white font-medium leading-tight mb-6">
                                        Economic Zones <br>
                                        Development Company
                                    </h4>
                                    <div class="flex gap-4">
                                        <div class="w-10 h-1 text-primary bg-primary/20 rounded-full"></div>
                                        <div class="w-4 h-1 bg-white/10 rounded-full"></div>
                                    </div>
                                </div>
                                <!-- Background visual -->
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-[0.03] pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-64 h-64 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Stats Badge -->
                        <div
                            class="absolute -bottom-6 right-8 bg-black border border-white/10 p-6 rounded-xl shadow-xl flex gap-8 backdrop-blur-xl">
                            <div>
                                <div class="text-primary text-xl font-medium mb-0.5">Drupal</div>
                                <div class="text-[9px] text-white/30 uppercase tracking-widest font-bold">Infrastructure
                                </div>
                            </div>
                            <div class="w-[1px] bg-white/5"></div>
                            <div>
                                <div class="text-primary text-xl font-medium mb-0.5">Secure</div>
                                <div class="text-[9px] text-white/30 uppercase tracking-widest font-bold">Deployment
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="py-16 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <div class="reveal">
                <div class="text-primary font-bold text-sm mb-4 tracking-widest uppercase">Our Process</div>
                <h2 class="text-3xl md:text-5xl font-bold mb-16">How we turn ideas into <span
                        class="text-primary">digital reality</span></h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8 reveal">
                <div class="relative">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary font-bold text-xl border border-primary/20">
                        01</div>
                    <h3 class="text-xl font-bold mb-3">Discovery</h3>
                    <p class="text-gray-400 text-sm">We deeply understand your business, target audience, and project
                        goals.</p>
                </div>
                <div class="relative">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary font-bold text-xl border border-primary/20">
                        02</div>
                    <h3 class="text-xl font-bold mb-3">Strategy & Design</h3>
                    <p class="text-gray-400 text-sm">We create wireframes, prototypes, and UI designs aligned with your
                        brand.</p>
                </div>
                <div class="relative">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary font-bold text-xl border border-primary/20">
                        03</div>
                    <h3 class="text-xl font-bold mb-3">Development</h3>
                    <p class="text-gray-400 text-sm">Our developers bring the design to life using modern, scalable
                        technologies.</p>
                </div>
                <div class="relative">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary font-bold text-xl border border-primary/20">
                        04</div>
                    <h3 class="text-xl font-bold mb-3">Launch & Support</h3>
                    <p class="text-gray-400 text-sm">We deploy your project and provide ongoing maintenance and support.
                    </p>
                </div>
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