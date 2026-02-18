<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Get in touch with KhyberSol today. We'd love to discuss your next project and help your business grow with our digital expertise.">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>Contact Us | KhyberSol</title>
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

<body class="grid-bg">

    <!-- Header -->
    @include('frontend.components.header')

    <!-- Hero Section -->
    <section
        class="relative h-screen w-full px-4 md:px-6 pt-24 md:pt-32 overflow-hidden flex items-center justify-center bg-black">
        <!-- Video Background Overlay -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-40">
                <source src="{{ asset('frontend/imgs/contact-bg.mp4') }}" type="video/mp4">
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
                    Get In Touch
                </div>

                <h1
                    class="hero-title text-4xl sm:text-5xl md:text-6xl font-medium leading-[1.2] tracking-tight text-white mb-8">
                    Let's start a <br class="hidden md:block">
                    <span class="text-primary italic">conversation</span> today.
                </h1>

                <p
                    class="hero-description text-sm sm:text-base md:text-lg text-white/40 max-w-xl mb-12 leading-relaxed font-light">
                    Have a project in mind or just want to say hello? We'd love to hear from you. Fill out the form
                    below and we'll get back to you as soon as possible.
                </p>

                <div class="hero-actions hero-stats flex items-center gap-8">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">24h</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Response</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">100%</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Secure</div>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-medium text-white">Global</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-10 px-6">
        <div class="max-w-7xl mx-auto">
            <!--#include file="layout/contact-form.html" -->
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-10 px-6 bg-black/50">
        <div class="max-w-7xl mx-auto">
            <div class="reveal mb-12">
                <h2 class="text-3xl md:text-5xl font-medium tracking-tight mb-4 text-white">Meet our <span
                        class="text-primary italic">leadership</span></h2>
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
                            <a href="https://wa.me/923365726859" target="_blank"
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
                            <a href="https://wa.me/923119600467" target="_blank"
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

    <!-- Map & Office Hours -->
    <section class="py-10 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <!-- Map -->
                <div class="lg:col-span-8 reveal">
                    <div class="aspect-video w-full rounded-3xl overflow-hidden border border-white/5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105912.83151848525!2d71.64448558784306!3d34.14815250438183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d93198889a803b%3A0xc32832800490715e!2sCharsadda%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1711234567890!5m2!1sen!2s"
                            width="100%" height="100%"
                            style="border:0; filter: invert(90%) hue-rotate(180deg) brightness(95%) contrast(90%);"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Office Time -->
                <div class="lg:col-span-4 reveal">
                    <div class="bg-card p-10 rounded-3xl border border-white/5">
                        <div class="inline-flex items-center gap-3 mb-8">
                            <span class="w-8 h-[1px] bg-primary"></span>
                            <span
                                class="text-primary/60 text-[10px] font-bold tracking-[0.3em] uppercase">Availability</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-8">Office Hours</h3>

                        <div class="space-y-6">
                            <div class="flex justify-between items-center border-b border-white/5 pb-4">
                                <span class="text-white/60">Monday - Friday</span>
                                <span class="text-white font-medium">9:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-white/5 pb-4">
                                <span class="text-white/60">Saturday</span>
                                <span class="text-primary font-bold uppercase tracking-widest text-[10px]">Closed</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-white/60">Sunday</span>
                                <span class="text-primary font-bold uppercase tracking-widest text-[10px]">Closed</span>
                            </div>
                        </div>

                        <div class="mt-12 p-6 bg-primary/5 rounded-2xl border border-primary/10">
                            <p class="text-sm text-white/70 leading-relaxed italic">
                                "Message us on WhatsApp anytime for urgent help."
                            </p>
                        </div>
                    </div>
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