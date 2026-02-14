<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI & Automation Services | KhyberSol</title>
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
                    Intelligent Automation
                </div>

                <h1
                    class="hero-title text-5xl sm:text-6xl md:text-8xl font-medium leading-[0.95] tracking-tighter text-white mb-8">
                    FUTURE <span class="text-primary italic font-light">TECH.</span>
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-2xl mb-10 leading-relaxed font-light">
                    Harness the power of Artificial Intelligence to automate workflows, enhance customer support, and
                    unlock data-driven insights.
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

            <!-- Solution 1: AI Chatbots -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">AI
                                <br><span class="text-primary italic">Chatbots.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                24/7 intelligent customer support. Our AI agents understand natural language and resolve
                                customer queries instantly.
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
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">NLP Support</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Advanced Natural Language Processing
                                ensures chatbots understand intent and context.</p>
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
                            <h4 class="text-white text-sm font-medium mb-2">Live Handoff</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Seamless escalation to human agents
                                when complex issues require a personal touch.</p>
                        </div>
                        <!-- Feature Card 3 -->
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Multi-Channel</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Deploy across WhatsApp, Messenger,
                                Website, and SMS from a single platform.</p>
                        </div>
                        <!-- Feature Card 4 -->
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
                            <h4 class="text-white text-sm font-medium mb-2">Custom Training</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Trained on your specific knowledge
                                base, FAQs, and brand voice guidelines.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solution 2: Workflow Automation -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Workflow
                                <br><span class="text-primary italic">Automation.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Eliminate repetitive tasks. We build custom automation flows that connect your apps and
                                services to save time.
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
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Process Mining</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Identifying bottlenecks and
                                inefficiencies in your current workflows to target automation.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7" />
                                    <rect x="14" y="3" width="7" height="7" />
                                    <rect x="14" y="14" width="7" height="7" />
                                    <rect x="3" y="14" width="7" height="7" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Integration</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Connecting disparate tools (CRM, ERP,
                                Email) into a unified, automated ecosystem.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2v20" />
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Cost Reduction</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Significant reduction in operational
                                costs by replacing manual labor with automated scripts.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <polyline points="22 4 12 14.01 9 11.01" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Error Elimination</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Removing human error from data entry,
                                calculations, and repetitive file management.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solution 3: Data Intelligence -->
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
                            <h2 class="text-3xl md:text-4xl font-medium tracking-tight text-white mb-6">Data
                                <br><span class="text-primary italic">Intelligence.</span>
                            </h2>
                            <p class="text-white/40 text-sm leading-relaxed font-light mb-8">
                                Turn data into decisions. We build custom AI models that analyze your data to find
                                trends, predict outcomes, and optimize performance.
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
                                    <path d="M18 20V10" />
                                    <path d="M12 20V4" />
                                    <path d="M6 20v-6" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Predictive Analytics</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Forecasting future trends in sales,
                                customer churn, and market demand.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="3" />
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Custom Models</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Bespoke machine learning models
                                tailored to solve specific business problems.</p>
                        </div>
                        <div
                            class="p-6 bg-black/40 rounded-xl border border-white/5 hover:border-primary/20 transition-all duration-300">
                            <div
                                class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </div>
                            <h4 class="text-white text-sm font-medium mb-2">Computer Vision</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Automated image and video analysis for
                                quality control, security, or content moderation.</p>
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
                            <h4 class="text-white text-sm font-medium mb-2">Reporting Dashboards</h4>
                            <p class="text-white/30 text-[11px] leading-relaxed">Live visualization of your key metrics
                                powered by automated data pipelines.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Custom Solution CTA -->
    <section class="py-12 px-6">
        <div class="max-w-4xl mx-auto text-center reveal">
            <h2 class="text-3xl md:text-5xl font-bold mb-8">Ready to automate?</h2>
            <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
                Discover how AI can transform your business efficiency. Let's build the future together.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn-primary">Start Automating</a>
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