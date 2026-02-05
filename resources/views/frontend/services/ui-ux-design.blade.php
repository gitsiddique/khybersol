<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Design Services | KhyberSol</title>
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
                    Creative Design Studio
                </div>

                <h1
                    class="hero-title text-5xl sm:text-6xl md:text-8xl font-medium leading-[0.95] tracking-tighter text-white mb-8">
                    VISUAL <span class="text-primary italic font-light">IMPACT.</span>
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-2xl mb-10 leading-relaxed font-light">
                    We craft intuitive, engaging, and beautiful digital experiences. Our user-centric design approach
                    ensures that your product is not only stunning but also easy to use and highly effective.
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

            <!-- User Research -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">User
                                <br><span class="text-primary italic">Research.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Understanding your audience is the first step. We conduct deep user research to uncover
                                needs, behaviors, and pain points.
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
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Persona Building</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Creating detailed user personas to
                                guide design decisions and ensure relevance to your target audience.</p>
                        </div>
                        <!-- Feature Card 2 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Usability Testing</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Real-world testing with actual users to
                                identify friction points and optimize the experience.</p>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                    </path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Journey Mapping</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Visualizing the user's path through
                                your product to ensure a logical and satisfying flow.</p>
                        </div>
                        <!-- Feature Card 4 -->
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
                            <h4 class="text-white text-sm font-medium mb-2">Competitor Analysis</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Evaluating market competitors to
                                identify opportunities for differentiation and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interface Design -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Interface
                                <br><span class="text-primary italic">Design.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Pixel-perfect UI design that brings your brand to life. We create visually stunning
                                interfaces that are consistent, accessible, and responsive.
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
                                    <circle cx="13.5" cy="6.5" r=".5" />
                                    <circle cx="17.5" cy="10.5" r=".5" />
                                    <circle cx="8.5" cy="7.5" r=".5" />
                                    <circle cx="6.5" cy="12.5" r=".5" />
                                    <path
                                        d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.92 0 1.7-.39 2.3-1.03a1.5 1.5 0 0 0 .14-1.97l-1.12-1.5a1.5 1.5 0 0 1 .15-1.97l.13-.12a1.5 1.5 0 0 1 1.97-.15l1.51 1.13a1.5 1.5 0 0 0 1.97-.14c.64-.6 1.03-1.38 1.03-2.3 0-5.5-4.5-10-10-10z" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Visual Systems</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Developing comprehensive design systems
                                including typography, color palettes, and component libraries.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m12 19 7-7 3 3-7 7-3-3z"></path>
                                    <path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                    <path d="m2 2 7.586 7.586"></path>
                                    <circle cx="11" cy="11" r="2"></circle>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Iconography</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Custom icon sets that match your brand
                                identity and enhance navigation clarity.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                    <path d="M3 9h18"></path>
                                    <path d="M9 21V9"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Responsive Layouts</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Designs that adapt flawlessly to any
                                screen size, from large desktops to small mobile devices.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Accessibility</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Ensuring your product is usable by
                                everyone, following WCAG standards for inclusivity.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prototyping & Interaction -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Prototyping
                                <br><span class="text-primary italic">Interaction.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Bringing designs to life before development. We create interactive prototypes and define
                                motion design to validate concepts and delight users.
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
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">High-Fidelity Prototypes</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Realistic simulations of the final
                                product that allow stakeholders to experience the flow.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 12h10"></path>
                                    <path d="M9 4v16"></path>
                                    <path d="m3 9-1 3 1 3"></path>
                                    <path d="M12 6h8"></path>
                                    <path d="M16 2v8"></path>
                                    <path d="m19 5 1 3-1 3"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Motion Design</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Adding subtle animations and
                                transitions that guide attention and enhance the feeling of quality.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Micro-interactions</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Designing the small, functional moments
                                that give users feedback and control.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path>
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Design Handoff</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Providing developers with everything
                                they need to implement the design accurately and efficiently.</p>
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
                    Design is in our DNA. We don't just decorate; we solve problems through visual thinking.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">01</div>
                    <h3 class="text-white text-lg font-medium mb-3">Data-Driven</h3>
                    <p class="text-white/40 text-sm leading-relaxed">Our designs are backed by research and data, not
                        just intuition.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">02</div>
                    <h3 class="text-white text-lg font-medium mb-3">Collaborative</h3>
                    <p class="text-white/40 text-sm leading-relaxed">We work closely with you as an extension of your
                        team.</p>
                </div>
                <div class="p-8 rounded-2xl bg-white/[0.02] border border-white/5 text-center reveal">
                    <div class="text-4xl font-bold text-primary mb-4">03</div>
                    <h3 class="text-white text-lg font-medium mb-3">Future-Proof</h3>
                    <p class="text-white/40 text-sm leading-relaxed">We design with scalability in mind, ready for
                        future iterations.</p>
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