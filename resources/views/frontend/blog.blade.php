<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | KhyberSol Digital Agency</title>
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
                <source src="{{ asset('frontend/imgs/blog-bg.mp4') }}" type="video/mp4">
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
                    KhyberSol Insights
                </div>

                <h1
                    class="hero-title text-4xl sm:text-5xl md:text-6xl font-medium leading-[1.2] tracking-tight text-white mb-8">
                    Our latest <span class="text-primary italic">articles</span> <br class="hidden md:block">
                    and industry trends.
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-xl mb-12 leading-relaxed font-light">
                    Thoughts, trends, and tutorials from our team of experts in design, development, and marketing.
                </p>

                <div class="hero-actions hero-stats flex items-center gap-8">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">100+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Articles</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">Weekly</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Updates</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">5k+</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Readers</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Coming Soon Section -->
    <section class="py-24 md:py-32 px-6 relative overflow-hidden">
        <div class="max-w-4xl mx-auto text-center reveal">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                <span class="text-[10px] uppercase tracking-widest text-white/50 font-bold">Status</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-medium text-white mb-6">
                Coming <span class="text-primary italic">Soon</span>
            </h2>
            <p class="text-white/40 text-base md:text-lg font-light max-w-xl mx-auto mb-10 leading-relaxed">
                We're currently crafting high-quality content about design, technology, and digital growth. Stay tuned
                for our first articles.
            </p>
            <a href="{{ route('home') }}"
                class="inline-flex items-center gap-2 text-primary hover:text-white transition-colors text-sm font-bold uppercase tracking-widest">
                <span>← Back to Home</span>
            </a>
        </div>
    </section>

    <!-- Contact Form -->
    @include('frontend.components.contact-form')

    <!-- Footer -->
    @include('frontend.components.footer')

    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>