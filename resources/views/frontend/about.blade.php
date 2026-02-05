<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn more about KhyberSol, a digital agency dedicated to transforming ideas into impactful digital reality through strategic design and technical mastery.">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>About Us | KhyberSol Digital Agency</title>
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

    @include('frontend.components.header')

    <!-- Hero Section -->
    <section
        class="relative h-screen w-full px-4 md:px-6 pt-24 md:pt-32 overflow-hidden flex items-center justify-center bg-black">
        <!-- Video Background Overlay -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-40">
                <source src="{{ asset('frontend/imgs/about-bg.mp4') }}" type="video/mp4">
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
                    Our Story & Vision
                </div>

                <h1
                    class="hero-title text-4xl sm:text-5xl md:text-6xl font-medium leading-[1.2] tracking-tight text-white mb-8">
                    We're a team of <span class="text-primary italic">problem solvers</span>, <br
                        class="hidden md:block">
                    designers, and developers.
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-xl mb-12 leading-relaxed font-light">
                    Based in Peshawar, KhyberSol is a full-service digital agency
                    crafting exceptional experiences that drive real-world results.
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
                        <div class="text-2xl font-medium text-white">5+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Years</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-24 px-6 relative overflow-hidden bg-black">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 items-start">
                <!-- Text Content -->
                <div class="lg:col-span-7 reveal">
                    <div class="inline-flex items-center gap-3 mb-8">
                        <span class="w-8 h-[1px] bg-primary"></span>
                        <span class="text-primary/60 text-[10px] font-bold tracking-[0.3em] uppercase">The
                            Journey</span>
                    </div>

                    <h2 class="text-4xl md:text-6xl font-medium text-white tracking-tight mb-10 leading-tight">
                        Our <span class="text-primary italic">Story.</span>
                    </h2>

                    <div class="space-y-8 max-w-2xl">
                        <p class="text-white/60 text-lg leading-relaxed font-light">
                            KhyberSol was founded with a simple mission: to help businesses in Pakistan and beyond
                            leverage
                            the power of digital technology to grow and succeed.
                        </p>
                        <p class="text-white/40 text-base leading-relaxed font-light">
                            We noticed that many businesses struggled to find reliable partners who could deliver
                            quality
                            work on time and within budget. That's why we built KhyberSol—to be the agency that
                            businesses
                            can truly rely on.
                        </p>
                        <p class="text-white/40 text-base leading-relaxed font-light">
                            Today, we've helped dozens of clients across various industries transform their digital
                            presence, from startups to established enterprises. Our team combines technical expertise
                            with
                            creative thinking to deliver solutions that not only meet but exceed expectations.
                        </p>
                    </div>
                </div>

                <!-- Minimal Stats Grid -->
                <div class="lg:col-span-5 grid grid-cols-2 gap-x-12 gap-y-16 reveal lg:mt-32 relative">
                    <!-- Decorative Center Cross (Visible on desktop) -->
                    <div class="absolute top-1/2 left-0 w-full h-px bg-white/5 -translate-y-1/2 hidden lg:block"></div>
                    <div class="absolute top-0 left-1/2 w-px h-full bg-white/5 -translate-x-1/2 hidden lg:block"></div>

                    <!-- Stat 1 -->
                    <div class="relative group lg:pl-8">
                        <div class="flex items-baseline gap-1 mb-3">
                            <span
                                class="text-5xl md:text-6xl font-medium text-white group-hover:text-primary transition-colors duration-500 counter"
                                data-target="50">0</span>
                            <span class="text-primary text-2xl font-light opacity-50">+</span>
                        </div>
                        <div class="text-white/30 text-[9px] uppercase tracking-[0.4em] font-bold leading-relaxed">
                            Projects <br> Completed
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="relative group lg:pl-16">
                        <div class="flex items-baseline gap-1 mb-3">
                            <span
                                class="text-5xl md:text-6xl font-medium text-white group-hover:text-primary transition-colors duration-500 counter"
                                data-target="30">0</span>
                            <span class="text-primary text-2xl font-light opacity-50">+</span>
                        </div>
                        <div class="text-white/30 text-[9px] uppercase tracking-[0.4em] font-bold leading-relaxed">
                            Happy <br> Clients
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="relative group lg:pl-8">
                        <div class="flex items-baseline gap-1 mb-3">
                            <span
                                class="text-5xl md:text-6xl font-medium text-white group-hover:text-primary transition-colors duration-500 counter"
                                data-target="5">0</span>
                            <span class="text-primary text-2xl font-light opacity-50">+</span>
                        </div>
                        <div class="text-white/30 text-[9px] uppercase tracking-[0.4em] font-bold leading-relaxed">
                            Years <br> Experience
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="relative group lg:pl-16">
                        <div class="flex items-baseline gap-1 mb-3">
                            <span
                                class="text-5xl md:text-6xl font-medium text-white group-hover:text-primary transition-colors duration-500">24</span>
                            <span class="text-primary/30 text-3xl font-extralight mx-1">/</span>
                            <span
                                class="text-5xl md:text-6xl font-medium text-white group-hover:text-primary transition-colors duration-500">7</span>
                        </div>
                        <div class="text-white/30 text-[9px] uppercase tracking-[0.4em] font-bold leading-relaxed">
                            Support <br> Available
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="py-10 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="reveal mb-10">
                <h2 class="text-3xl md:text-5xl font-medium tracking-tight mb-4">Meet the <span
                        class="text-primary italic">team</span></h2>
                <div class="w-12 h-1 bg-primary"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Team Member 1 -->
                <div class="reveal flex flex-col md:flex-row gap-8 items-start group">
                    <div
                        class="w-24 h-24 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/90 font-medium text-2xl shrink-0 group-hover:border-primary/50 transition-colors duration-500">
                        MS
                    </div>
                    <div class="flex-1 border-b border-white/5 pb-6">
                        <h3 class="text-xl font-bold text-white mb-1">Muhammad Siddique</h3>
                        <p class="text-primary text-xs uppercase tracking-widest font-bold mb-6">CEO & Full Stack
                            Developer</p>
                        <p class="text-white/40 text-sm leading-relaxed mb-8 max-w-md">
                            Specializing in scalable digital architecture and leading our technical vision with a focus
                            on clean, efficient solutions.
                        </p>
                        <div class="flex gap-6">
                            <a href="mailto:muhammadsiddique.work@gmail.com"
                                class="text-white/30 hover:text-primary transition-colors duration-300 text-xs uppercase tracking-widest font-bold flex items-center gap-2">
                                Email <span>→</span>
                            </a>
                            <a href="https://wa.me/923365726859"
                                class="text-white/30 hover:text-primary transition-colors duration-300 text-xs uppercase tracking-widest font-bold flex items-center gap-2">
                                WhatsApp <span>→</span>
                            </a>
                            <a href="tel:+923365726859"
                                class="text-white/30 hover:text-primary transition-colors duration-300 text-xs uppercase tracking-widest font-bold flex items-center gap-2">
                                Call <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="reveal flex flex-col md:flex-row gap-8 items-start group">
                    <div
                        class="w-24 h-24 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/90 font-medium text-2xl shrink-0 group-hover:border-primary/50 transition-colors duration-500">
                        MS
                    </div>
                    <div class="flex-1 border-b border-white/5 pb-6">
                        <h3 class="text-xl font-bold text-white mb-1">Muhammad Salman</h3>
                        <p class="text-primary text-xs uppercase tracking-widest font-bold mb-6">Co-founder & Marketing
                            Expert</p>
                        <p class="text-white/40 text-sm leading-relaxed mb-8 max-w-md">
                            Driving growth through strategic brand storytelling and ensuring our clients' products reach
                            their full potential.
                        </p>
                        <div class="flex gap-6">
                            <a href="mailto:muhammadsalman.personal@gmail.com"
                                class="text-white/30 hover:text-primary transition-colors duration-300 text-xs uppercase tracking-widest font-bold flex items-center gap-2">
                                Email <span>→</span>
                            </a>
                            <a href="https://wa.me/923119600467"
                                class="text-white/30 hover:text-primary transition-colors duration-300 text-xs uppercase tracking-widest font-bold flex items-center gap-2">
                                WhatsApp <span>→</span>
                            </a>
                            <a href="tel:+923119600467"
                                class="text-white/30 hover:text-primary transition-colors duration-300 text-xs uppercase tracking-widest font-bold flex items-center gap-2">
                                Call <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-10 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="reveal mb-10 text-center">
                <div class="inline-flex flex-col items-center">
                    <span class="text-primary/60 text-[9px] uppercase tracking-[0.5em] font-bold mb-3">Core
                        Philosophy</span>
                    <h2 class="text-xl md:text-2xl font-bold tracking-widest text-white uppercase">
                        Our <span class="text-primary">values</span>
                    </h2>
                    <div class="h-px w-6 bg-primary/40 mt-4"></div>
                </div>
            </div>

            <div
                class="grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-white/5 border border-white/5 rounded-2xl overflow-hidden reveal">
                <!-- Value 1 -->
                <div class="bg-black/60 backdrop-blur-md p-8 hover:bg-black/80 transition-all duration-500 group">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-primary text-[10px] font-bold tracking-widest">01.</span>
                        <div class="h-px w-4 bg-primary/30 group-hover:w-8 transition-all duration-500"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3 group-hover:text-primary transition-colors">
                        Purpose-Driven</h3>
                    <p class="text-white/40 text-xs leading-relaxed font-light">
                        Every project starts with understanding your goals. We focus on outcomes, not just deliverables.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="bg-black/60 backdrop-blur-md p-8 hover:bg-black/80 transition-all duration-500 group">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-primary text-[10px] font-bold tracking-widest">02.</span>
                        <div class="h-px w-4 bg-primary/30 group-hover:w-8 transition-all duration-500"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3 group-hover:text-primary transition-colors">
                        Client-Centric</h3>
                    <p class="text-white/40 text-xs leading-relaxed font-light">
                        Your success is our success. We work as an extension of your team, not just a vendor.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="bg-black/60 backdrop-blur-md p-8 hover:bg-black/80 transition-all duration-500 group">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-primary text-[10px] font-bold tracking-widest">03.</span>
                        <div class="h-px w-4 bg-primary/30 group-hover:w-8 transition-all duration-500"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3 group-hover:text-primary transition-colors">Quality
                        First</h3>
                    <p class="text-white/40 text-xs leading-relaxed font-light">
                        We never compromise on quality. Every pixel, every line of code is crafted with care.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="bg-black/60 backdrop-blur-md p-8 hover:bg-black/80 transition-all duration-500 group">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-primary text-[10px] font-bold tracking-widest">04.</span>
                        <div class="h-px w-4 bg-primary/30 group-hover:w-8 transition-all duration-500"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3 group-hover:text-primary transition-colors">Innovative
                    </h3>
                    <p class="text-white/40 text-xs leading-relaxed font-light">
                        We stay ahead of trends and technologies to deliver cutting-edge solutions.
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