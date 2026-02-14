<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | KhyberSol Digital Agency</title>
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
                        <div class="text-2xl font-medium text-white">{{ $blogs->total() }}</div>
                        <div class="text-[9px] uppercase tracking-widest text-white/60">Articles</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="py-24 px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            @if($blogs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($blogs as $blog)
                        <article class="group relative flex flex-col h-full bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-primary/50 transition-all duration-500 reveal">
                            <!-- Main Link -->
                            <a href="{{ route('blog.show', $blog->slug) }}" class="absolute inset-0 z-20" aria-label="{{ $blog->title }}"></a>
                            
                            <!-- Image -->
                            <div class="aspect-video w-full overflow-hidden bg-black/50">
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-white/20">
                                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60"></div>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 p-6 flex flex-col">
                                <div class="mb-4 flex items-center gap-3 text-xs font-medium text-white/40">
                                    <span>{{ $blog->created_at->format('M d, Y') }}</span>
                                    <span class="w-1 h-1 rounded-full bg-primary/50"></span>
                                    <span class="text-primary uppercase tracking-wider">Article</span>
                                </div>

                                <h3 class="text-xl font-bold text-white mb-3 line-clamp-2 group-hover:text-primary transition-colors">
                                    {{ $blog->title }}
                                </h3>

                                <p class="text-white/60 text-sm leading-relaxed mb-6 line-clamp-3 flex-1">
                                    {{ Str::limit(strip_tags($blog->description), 120) }}
                                </p>

                                <span class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-widest group-hover:text-white transition-colors mt-auto">
                                    Read Article <span class="group-hover:translate-x-1 transition-transform">→</span>
                                </span>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center">
                    {{ $blogs->links('pagination::tailwind') }}
                </div>
            @else
                <div class="text-center py-24">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/5 mb-6">
                        <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM14 4v4h4"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">No Articles Yet</h3>
                    <p class="text-white/40 max-w-md mx-auto">We're currently crafting high-quality content. Check back soon for updates.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Contact Form -->
    @include('frontend.components.contact-form')

    <!-- Footer -->
    @include('frontend.components.footer')

    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>