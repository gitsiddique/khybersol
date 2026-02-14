<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }} | KhyberSol Insights</title>
    <meta name="description" content="{{ Str::limit(strip_tags($blog->description), 160) }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/imgs/fav.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
</head>

<body class="bg-black text-white selection:bg-primary selection:text-black">

    <!-- Header -->
    @include('frontend.components.header')

    <!-- Article Header -->
    <header class="relative w-full pt-32 pb-20 px-6 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            @if($blog->image)
                <div class="absolute inset-0 bg-cover bg-center opacity-20 blur-3xl scale-110" style="background-image: url('{{ asset('storage/' . $blog->image) }}')"></div>
            @endif
            <div class="absolute inset-0 bg-gradient-to-b from-black via-black/80 to-black z-10"></div>
            <div class="absolute inset-0 bg-[url('{{ asset('frontend/imgs/grid.svg') }}')] bg-center [mask-image:radial-gradient(white,transparent_70%)] opacity-[0.05] z-10"></div>
        </div>

        <div class="max-w-4xl mx-auto relative z-20 text-center">
            <div class="inline-flex items-center gap-3 mb-8 reveal">
                <a href="{{ route('blog') }}" class="text-xs font-bold uppercase tracking-widest text-white/40 hover:text-primary transition-colors">
                    ← Back to Blog
                </a>
                <span class="w-1 h-1 rounded-full bg-white/20"></span>
                <span class="text-xs font-bold uppercase tracking-widest text-primary">Article</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-8 reveal delay-100">
                {{ $blog->title }}
            </h1>

            <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-white/40 reveal delay-200">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>{{ $blog->created_at->format('F d, Y') }}</span>
                </div>
                <div class="w-1 h-1 rounded-full bg-white/20"></div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ ceil(str_word_count(strip_tags($blog->description)) / 200) }} min read</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 px-6 pb-24">
        <div class="max-w-4xl mx-auto">
            <!-- Featured Image -->
            @if($blog->image)
            <div class="rounded-2xl overflow-hidden border border-white/10 shadow-2xl shadow-primary/5 mb-16 reveal">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-auto">
            </div>
            @endif

            <!-- Article Body -->
            <article class="prose prose-invert prose-lg max-w-none prose-headings:font-bold prose-headings:text-white prose-p:text-white/70 prose-a:text-primary prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl prose-strong:text-white reveal">
                {!! $blog->description !!}
            </article>

            <!-- Share / Tags Section -->
            <div class="mt-16 pt-8 border-t border-white/10 reveal">
                <p class="text-white/40 text-sm font-medium uppercase tracking-widest mb-6">Share & Actions:</p>
                <div class="flex flex-wrap gap-4">
                    @php
                        $shareUrl = urlencode(route('blog.show', $blog->slug));
                        $shareTitle = urlencode($blog->title);
                    @endphp
                    
                    <!-- Twitter / X -->
                    <a href="https://twitter.com/intent/tweet?text={{ $shareTitle }}&url={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center gap-3 px-6 py-3 rounded-full bg-white/5 border border-white/10 transition-all duration-300 group hover:bg-primary hover:border-primary hover:-translate-y-1">
                        <svg class="w-5 h-5 text-white/70 transition-colors group-hover:text-black" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        <span class="text-sm font-semibold text-white/70 transition-colors group-hover:text-black">Twitter</span>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center gap-3 px-6 py-3 rounded-full bg-white/5 border border-white/10 transition-all duration-300 group hover:bg-primary hover:border-primary hover:-translate-y-1">
                        <svg class="w-5 h-5 text-white/70 transition-colors group-hover:text-black" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <span class="text-sm font-semibold text-white/70 transition-colors group-hover:text-black">LinkedIn</span>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center gap-3 px-6 py-3 rounded-full bg-white/5 border border-white/10 transition-all duration-300 group hover:bg-primary hover:border-primary hover:-translate-y-1">
                        <svg class="w-5 h-5 text-white/70 transition-colors group-hover:text-black" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        <span class="text-sm font-semibold text-white/70 transition-colors group-hover:text-black">Facebook</span>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" rel="noopener noreferrer" 
                       class="flex items-center gap-3 px-6 py-3 rounded-full bg-white/5 border border-white/10 transition-all duration-300 group hover:bg-primary hover:border-primary hover:-translate-y-1">
                        <svg class="w-5 h-5 text-white/70 transition-colors group-hover:text-black" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        <span class="text-sm font-semibold text-white/70 transition-colors group-hover:text-black">WhatsApp</span>
                    </a>
                    
                    <!-- Copy Link -->
                    <button onclick="copyToClipboard(this)" 
                        class="flex items-center gap-3 px-6 py-3 rounded-full bg-white/5 border border-white/10 transition-all duration-300 group hover:bg-primary hover:border-primary hover:-translate-y-1">
                        <svg class="w-5 h-5 text-white/70 transition-colors group-hover:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                        <span class="text-sm font-semibold text-white/70 transition-colors group-hover:text-black">Copy Link</span>
                    </button>

                    <!-- Download HTML -->
                    <button onclick="downloadArticle()" 
                        class="flex items-center gap-3 px-6 py-3 rounded-full bg-white/5 border border-white/10 transition-all duration-300 group hover:bg-primary hover:border-primary hover:-translate-y-1">
                        <svg class="w-5 h-5 text-white/70 transition-colors group-hover:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        <span class="text-sm font-semibold text-white/70 transition-colors group-hover:text-black">Download</span>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Related Articles -->
    @if($related_blogs->count() > 0)
    <section class="py-24 border-t border-white/10 bg-white/[0.02]">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">More <span class="text-primary italic">Insights</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($related_blogs as $related)
                <article class="group relative flex flex-col h-full bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-primary/50 transition-all duration-500">
                    <!-- Main Link -->
                    <a href="{{ route('blog.show', $related->slug) }}" class="absolute inset-0 z-20" aria-label="{{ $related->title }}"></a>

                    <!-- Image -->
                    <div class="aspect-video w-full overflow-hidden bg-black/50">
                        @if($related->image)
                            <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-white/20">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60"></div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 p-6 flex flex-col">
                        <h3 class="text-lg font-bold text-white mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                            {{ $related->title }}
                        </h3>
                        <p class="text-white/50 text-xs mb-4 flex-1 line-clamp-2">{{ Str::limit(strip_tags($related->description), 80) }}</p>
                        <span class="text-primary text-xs font-bold uppercase tracking-widest group-hover:translate-x-1 transition-transform inline-block">Read Article →</span>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Contact Form -->
    @include('frontend.components.contact-form')

    <!-- Footer -->
    @include('frontend.components.footer')

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Fix video rendering in blog content
            // CKEditor may insert videos as <img> tags. We replace them with <video> tags.
            document.querySelectorAll('.prose img').forEach(img => {
                const src = img.getAttribute('src');
                if (src && src.match(/\.(mp4|webm|ogg|mov)$/i)) {
                    const video = document.createElement('video');
                    video.src = src;
                    video.controls = true;
                    video.className = 'w-full rounded-xl my-8'; // Match prose styling
                    video.setAttribute('playsinline', '');
                    video.setAttribute('preload', 'metadata');
                    img.replaceWith(video);
                }
            });
        });

        function copyToClipboard(btn) {
            navigator.clipboard.writeText(window.location.href).then(() => {
                const span = btn.querySelector('span');
                const originalText = span.innerText;
                span.innerText = 'Copied!';
                btn.classList.add('bg-primary', 'text-black');
                setTimeout(() => {
                    span.innerText = originalText;
                    btn.classList.remove('bg-primary', 'text-black');
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }

        function downloadArticle() {
            const title = "{{ $blog->title }}";
            
            // Create a clone of the article to modify paths without affecting the page
            const articleClone = document.querySelector('article').cloneNode(true);
            
            // Convert relative URLs to absolute URLs for Images
            articleClone.querySelectorAll('img').forEach(img => {
                if (img.src.startsWith('/')) {
                    img.src = window.location.origin + img.getAttribute('src');
                } else {
                    img.src = img.src; // Browser automatically resolves to absolute, but explicit assignment ensures it
                }
            });

            // Convert relative URLs to absolute URLs for Videos
            articleClone.querySelectorAll('video').forEach(video => {
                if (video.src.startsWith('/')) {
                    video.src = window.location.origin + video.getAttribute('src');
                } else {
                    video.src = video.src;
                }
            });

            // Handle source elements inside video tags if any
            articleClone.querySelectorAll('source').forEach(source => {
                 if (source.src.startsWith('/')) {
                    source.src = window.location.origin + source.getAttribute('src');
                } else {
                    source.src = source.src;
                }
            });

            const content = articleClone.innerHTML;
            const html = `
                <!DOCTYPE html>
                <html>
                <head>
                    <title>${title}</title>
                    <meta charset="utf-8">
                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
                        body { 
                            font-family: 'Inter', system-ui, -apple-system, sans-serif; 
                            line-height: 1.8; 
                            max-width: 800px; 
                            margin: 0 auto; 
                            padding: 60px 20px; 
                            color: #1a1a1a; 
                            background-color: #fcfcfc;
                        }
                        header { text-align: center; margin-bottom: 60px; }
                        h1 { 
                            font-size: 3em; 
                            margin-bottom: 0.5em; 
                            color: #111; 
                            line-height: 1.2;
                            font-weight: 800;
                            letter-spacing: -0.02em;
                        }
                        .meta { color: #666; font-size: 0.9em; margin-bottom: 30px; }
                        a { color: #32f08b; text-decoration: none; border-bottom: 1px solid rgba(50, 240, 139, 0.3); transition: all 0.2s; }
                        a:hover { border-bottom-color: #32f08b; color: #1a1a1a; }
                        
                        /* Content Styling */
                        article p { margin-bottom: 1.5em; font-size: 1.1em; color: #333; }
                        article h2 { font-size: 1.8em; margin-top: 2em; margin-bottom: 0.8em; color: #111; font-weight: 700; }
                        article h3 { font-size: 1.4em; margin-top: 1.5em; margin-bottom: 0.6em; color: #111; font-weight: 600; }
                        
                        img { max-width: 100%; height: auto; border-radius: 12px; margin: 30px 0; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
                        
                        blockquote { 
                            border-left: 4px solid #32f08b; 
                            padding: 20px 30px; 
                            margin: 40px 0; 
                            background: #f4f4f4;
                            border-radius: 0 12px 12px 0;
                            font-style: italic; 
                            color: #444; 
                            font-size: 1.1em;
                        }
                        
                        ul, ol { margin: 20px 0; padding-left: 20px; }
                        li { margin-bottom: 10px; color: #333; }
                        
                        pre { 
                            background: #1a1a1a; 
                            color: #fff;
                            padding: 20px; 
                            border-radius: 8px; 
                            overflow-x: auto; 
                            font-family: 'Fira Code', monospace;
                            margin: 30px 0;
                        }

                        hr { margin: 60px 0; border: 0; border-top: 1px solid #eee; }
                        
                        .footer-link {
                            display: inline-block;
                            margin-top: 10px;
                            color: #666;
                            font-size: 0.9em;
                            border-bottom: 1px dotted #ccc;
                        }
                    </style>
                </head>
                <body>
                    <header>
                        <h1>${title}</h1>
                        <div class="meta">
                            Source: <a href="${window.location.href}">${window.location.href}</a>
                        </div>
                    </header>
                    <article>
                        ${content}
                    </article>
                    <footer>
                        <hr>
                        <p style="text-align: center; color: #888; font-size: 0.85em;">
                            Downloaded from KhyberSol Insights • ${new Date().toLocaleDateString()}
                        </p>
                    </footer>
                </body>
                </html>
            `;
            
            const blob = new Blob([html], { type: 'text/html' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${title.replace(/[^a-z0-9]/gi, '_').toLowerCase()}.html`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
</body>

</html>
