<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Development Services | KhyberSol</title>
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
                    Expert Mobile Engineering
                </div>

                <h1
                    class="hero-title text-5xl sm:text-6xl md:text-8xl font-medium leading-[0.95] tracking-tighter text-white mb-8">
                    APP <span class="text-primary italic font-light">CRAFT.</span>
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-2xl mb-10 leading-relaxed font-light">
                    We architect, design, and develop high-performance mobile ecosystems. From high-conversion business
                    apps to complex enterprise-grade applications, we deliver digital excellence at scale.
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

            <!-- iOS Development -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">iOS
                                <br><span class="text-primary italic">Development.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Premium native experiences for the Apple ecosystem. We build intuitive, high-speed apps
                                that leverage the full power of iOS.
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
                            <h4 class="text-white text-sm font-medium mb-2">Native Performance</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Swift-based development ensuring
                                maximum speed, smoothness, and reliability on all Apple devices.</p>
                        </div>
                        <!-- Feature Card 2 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 18h.01" />
                                    <rect width="14" height="20" x="5" y="2" rx="2" ry="2" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Human Interface</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Adhering strictly to Apple's Human
                                Interface Guidelines for a familiar and intuitive user experience.</p>
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
                            <h4 class="text-white text-sm font-medium mb-2">App Store Optimization</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Strategic positioning to help your app
                                rank higher and gain more visibility in the App Store.</p>
                        </div>
                        <!-- Feature Card 4 -->
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
                            <h4 class="text-white text-sm font-medium mb-2">Secure Data</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Enterprise-grade security protocols to
                                protect user data and ensure compliance with privacy standards.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Android Development -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Android
                                <br><span class="text-primary italic">Development.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Scalable applications for the world's most popular mobile OS. We build robust Android
                                apps that run smoothly on thousands of devices.
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
                                    <path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z" />
                                    <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                    <path d="M12 2v2" />
                                    <path d="M12 22v-2" />
                                    <path d="m17 20.66-1-1.73" />
                                    <path d="M11 10.27 7 3.34" />
                                    <path d="m20.66 17-1.73-1" />
                                    <path d="m3.34 7 1.73 1" />
                                    <path d="M14 12h8" />
                                    <path d="M2 12h2" />
                                    <path d="m20.66 7-1.73 1" />
                                    <path d="m3.34 17 1.73-1" />
                                    <path d="m17 3.34-1 1.73" />
                                    <path d="m11 13.73-4 6.93" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Material Design</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Implementing Google's Material Design
                                principles for a clean, modern, and user-friendly interface.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="20" height="14" x="2" y="3" rx="2" />
                                    <line x1="8" x2="16" y1="21" y2="21" />
                                    <line x1="12" x2="12" y1="17" y2="21" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Device Compatibility</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Ensuring your app looks and works great
                                across the fragmented Android ecosystem of devices.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                    <polyline points="7 10 12 15 17 10" />
                                    <line x1="12" x2="12" y1="15" y2="3" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Google Play Launch</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Full support with the Google Play Store
                                submission process, including guidelines and asset preparation.</p>
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
                            <h4 class="text-white text-sm font-medium mb-2">Kotlin & Java</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Expert coding in modern Kotlin or
                                robust Java to build stable, maintainable, and high-performance apps.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cross-Platform Solutions -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Cross-Platform
                                <br><span class="text-primary italic">Solutions.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                One codebase, everywhere. We use Flutter and React Native to deploy your app to both iOS
                                and Android simultaneously without compromising quality.
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
                                    <path d="m5 8 5-5 5 5" />
                                    <path d="m12 13 5 5 5-5" />
                                    <path d="m5 18 5 5 5-5" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">React Native</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Leverage the power of React to build
                                native-like apps with a shared codebase for faster time-to-market.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2" />
                                    <polyline points="2 17 12 22 22 17" />
                                    <polyline points="2 12 12 17 22 12" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Flutter</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Google's UI toolkit for building
                                beautiful, natively compiled applications from a single codebase.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="12" />
                                    <line x1="12" x2="12.01" y1="16" y2="16" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Cost Effective</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Significantly reduce development and
                                maintenance costs by managing a single project for multiple platforms.</p>
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
                                    <path d="M22 6l-10 7L2 6" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Unified Support</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Streamlined updates and support
                                processes, ensuring your app stays current on all platforms simultaneously.</p>
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
                    We don't just build apps; we build businesses. Our mobile solutions are designed to deliver
                    measurable ROI.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">01</div>
                    <h3 class="text-white text-lg font-medium mb-3">User-Centric Design</h3>
                    <p class="text-white/40 text-sm leading-relaxed">We prioritize the user journey, ensuring every tap
                        and swipe feels natural and intuitive.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">02</div>
                    <h3 class="text-white text-lg font-medium mb-3">Scalable Architecture</h3>
                    <p class="text-white/40 text-sm leading-relaxed">Built to grow with you. Our apps handle millions of
                        users without breaking a sweat.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">03</div>
                    <h3 class="text-white text-lg font-medium mb-3">Post-Launch Support</h3>
                    <p class="text-white/40 text-sm leading-relaxed">We stay with you after launch, providing updates,
                        maintenance, and optimization.</p>
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