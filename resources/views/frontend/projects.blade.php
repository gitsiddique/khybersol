<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="View the portfolio of KhyberSol, featuring case studies of digital excellence in web development, mobile apps, and design solutions.">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>Our Projects | KhyberSol</title>
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
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#32f08b',
                        dark: '#000000',
                        card: '#111111',
                    }
                }
            }
        }
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
                <source src="{{ asset('frontend/imgs/project-bg.mp4') }}" type="video/mp4">
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
                    Our Portfolio
                </div>

                <h1
                    class="hero-title text-4xl sm:text-5xl md:text-6xl font-medium leading-[1.2] tracking-tight text-white mb-8">
                    Case Studies of <br class="hidden md:block">
                    <span class="text-primary italic">Digital Excellence.</span>
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-xl mb-12 leading-relaxed font-light">
                    We partner with organizations to build high-performance digital products that solve complex problems
                    and
                    drive measurable growth.
                </p>

                <div class="hero-actions hero-stats flex items-center gap-8">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">50+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Projects</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">30+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Clients</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">100%</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Success</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Showcase -->
    <section class="pt-24 pb-12 px-6 relative">
        <div class="max-w-7xl mx-auto">

            <!-- Project 01: KPEZDMC -->
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-16 items-start reveal">

                <!-- Project Content Side (Left) -->
                <div class="lg:col-span-5 pt-0 lg:pt-8 order-2 lg:order-1">
                    <div class="inline-flex items-center gap-3 mb-8">
                        <span class="w-8 h-[1px] bg-primary"></span>
                        <span class="text-primary/60 text-[10px] font-bold tracking-[0.3em] uppercase">01 / Case
                            Study</span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-medium text-white tracking-tight mb-8 leading-tight">
                        KPEZDMC <br>
                        <span class="text-primary italic">Official Website.</span>
                    </h2>

                    <div class="space-y-8 mb-12">
                        <div>
                            <h4 class="text-white text-xs font-bold uppercase tracking-widest mb-3 opacity-40">Location
                            </h4>
                            <p class="text-white/70 text-sm font-light">Khyber Pakhtunkhwa, Pakistan</p>
                        </div>

                        <div>
                            <h4 class="text-white text-xs font-bold uppercase tracking-widest mb-3 opacity-40">Project
                                Scope</h4>
                            <p class="text-white/60 text-sm leading-relaxed font-light">
                                We designed and developed the official digital infrastructure for KPEZDMC (Khyber
                                Pakhtunkhwa Economic Zones Development and Management Company). A semi-government
                                organization driving industrial growth in Pakistan.
                            </p>
                        </div>

                        <div>
                            <h4 class="text-white text-xs font-bold uppercase tracking-widest mb-3 opacity-40">Core
                                Technologies</h4>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-4 py-1.5 bg-white/5 border border-white/10 text-white/60 text-[10px] font-bold rounded-full uppercase tracking-wider">Drupal
                                    10</span>
                                <span
                                    class="px-4 py-1.5 bg-white/5 border border-white/10 text-white/60 text-[10px] font-bold rounded-full uppercase tracking-wider">Custom
                                    API</span>
                                <span
                                    class="px-4 py-1.5 bg-white/5 border border-white/10 text-white/60 text-[10px] font-bold rounded-full uppercase tracking-wider">Managed
                                    Backend</span>
                                <span
                                    class="px-4 py-1.5 bg-white/5 border border-white/10 text-white/60 text-[10px] font-bold rounded-full uppercase tracking-wider">Responsive
                                    UI</span>
                            </div>
                        </div>

                        <div class="pt-8 border-t border-white/5">
                            <a href="https://kpezdmc.org.pk/" target="_blank"
                                class="group inline-flex items-center gap-4 px-10 py-5 bg-primary text-black text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-white transition-all duration-500 shadow-[0_0_30px_rgba(50,240,139,0.1)]">
                                Launch Website
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Visual Side (Right) -->
                <div class="lg:col-span-7 space-y-8 order-1 lg:order-2">
                    <!-- Main Mockup -->
                    <div
                        class="relative bg-white/[0.02] border border-white/5 rounded-[2rem] p-4 md:p-12 overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        </div>

                        <!-- Simplified Browser UI -->
                        <div
                            class="relative z-10 bg-black border border-white/10 rounded-2xl overflow-hidden shadow-2xl">
                            <div
                                class="bg-white/5 px-4 md:px-6 py-2 md:py-3 border-b border-white/10 flex items-center gap-4">
                                <div class="flex gap-1.5 md:gap-2">
                                    <div class="w-2 md:w-2.5 h-2 md:h-2.5 rounded-full bg-white/10"></div>
                                    <div class="w-2 md:w-2.5 h-2 md:h-2.5 rounded-full bg-white/10"></div>
                                    <div class="w-2 md:w-2.5 h-2 md:h-2.5 rounded-full bg-white/10"></div>
                                </div>
                                <div
                                    class="bg-white/5 rounded-full px-4 md:px-6 py-1 md:py-1.5 text-[8px] md:text-[9px] text-white/30 font-mono tracking-widest flex-1 max-w-[300px] truncate">
                                    https://kpezdmc.org.pk/
                                </div>
                            </div>
                            <!-- Mockup Content Area -->
                            <div
                                class="aspect-video bg-[#050505] p-6 md:p-16 relative flex flex-col justify-center overflow-hidden">
                                <!-- Abstract Background Element -->
                                <div
                                    class="absolute -right-20 -bottom-20 w-96 h-96 bg-primary/[0.02] rounded-full blur-3xl">
                                </div>

                                <div class="relative z-10">
                                    <div
                                        class="text-primary/40 text-[8px] md:text-[10px] font-bold uppercase tracking-[0.5em] mb-4 md:mb-6">
                                        Government Platform</div>
                                    <h3 class="text-xl md:text-4xl text-white font-medium leading-tight mb-6 md:mb-8">
                                        Economic Zones <br>
                                        Development & Management
                                    </h3>
                                    <div class="flex items-center gap-4 md:gap-6">
                                        <div class="w-12 md:w-16 h-[2px] bg-primary"></div>
                                        <div class="flex gap-2">
                                            <div class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white/20"></div>
                                            <div class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white/10"></div>
                                            <div class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white/5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Technical Stats Overlay -->
                        <div class="mt-8 md:mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8 relative z-10">
                            <div class="p-4 md:p-6 bg-white/[0.03] border border-white/5 rounded-2xl">
                                <div class="text-primary text-xl md:text-2xl font-medium mb-1">99.9%</div>
                                <div class="text-[8px] md:text-[9px] text-white/30 uppercase tracking-widest font-bold">
                                    Uptime
                                    Reliable</div>
                            </div>
                            <div class="p-4 md:p-6 bg-white/[0.03] border border-white/5 rounded-2xl">
                                <div class="text-primary text-xl md:text-2xl font-medium mb-1">Secured</div>
                                <div class="text-[8px] md:text-[9px] text-white/30 uppercase tracking-widest font-bold">
                                    Managed Drupal
                                </div>
                            </div>
                            <div class="p-4 md:p-6 bg-white/[0.03] border border-white/5 rounded-2xl">
                                <div class="text-primary text-xl md:text-2xl font-medium mb-1">Global</div>
                                <div class="text-[8px] md:text-[9px] text-white/30 uppercase tracking-widest font-bold">
                                    API Ready
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Under Construction Message -->
            <div class="mt-12 pt-8 border-t border-white/5 text-center reveal">
                <div class="inline-flex items-center gap-3 mb-6">
                    <span class="w-8 h-[1px] bg-primary/30"></span>
                    <span class="text-primary/40 text-[10px] font-bold tracking-[0.3em] uppercase">Status</span>
                    <span class="w-8 h-[1px] bg-primary/30"></span>
                </div>
                <h3 class="text-xl md:text-2xl text-white/60 font-medium mb-4">More Projects Coming Soon</h3>
                <p class="text-white/30 text-xs md:text-sm font-light max-w-md mx-auto leading-relaxed">
                    Our portfolio is currently under construction. We are documenting our latest case studies and will
                    be
                    showcasing more digital excellence shortly.
                </p>
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