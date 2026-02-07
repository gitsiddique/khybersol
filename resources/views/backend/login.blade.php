<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | KhyberSol</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('frontend/imgs/fav.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
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
    <style>
        .grid-bg {
            background-image: radial-gradient(circle at 2px 2px, rgba(255, 255, 255, 0.05) 1px, transparent 0);
            background-size: 40px 40px;
        }

        .glass-panel {
            background: rgba(17, 17, 17, 0.7);
            backdrop-filter: blur(20px);
            border: 1px border-white/10;
        }
    </style>
</head>

<body class="bg-black text-white selection:bg-primary selection:text-black overflow-hidden">
    <!-- Background Elements -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 grid-bg opacity-30"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-black"></div>
        
        <!-- Glow Effects -->
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
    </div>

    <main class="relative z-10 min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md" id="login-container">
            <!-- Logo & Brand -->
            <div class="text-center mb-10 space-y-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3 group">
                    <img src="{{ asset('frontend/imgs/logo.png') }}" alt="KhyberSol Logo"
                        class="h-10 w-auto group-hover:scale-110 transition-transform duration-500">
                    <span class="font-bold text-3xl tracking-tighter text-white">Khyber<span
                            class="text-primary">Sol</span></span>
                </a>
                <p class="text-white/40 text-sm font-light tracking-wide">Enter your credentials to access the terminal</p>
            </div>

            <!-- Login Form -->
            <div class="glass-panel p-8 rounded-2xl border border-white/10 shadow-2xl">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 rounded-xl">
                        <ul class="list-none space-y-1">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-400 text-[10px] uppercase tracking-wider font-bold text-center">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="space-y-2">
                        <label for="email" class="text-xs font-bold uppercase tracking-widest text-white/60 ml-1">Admin Email</label>
                        <div class="relative group">
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                 class="w-full bg-white/[0.03] border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary/50 focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-white/10"
                                 placeholder="abc@xyz.com">
                            <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-white/20 group-focus-within:text-primary/40 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label for="password" class="text-xs font-bold uppercase tracking-widest text-white/60 ml-1">Security Key</label>
                            <a href="#" class="text-[10px] uppercase tracking-wider text-primary hover:text-white transition-colors font-bold">Lost Access?</a>
                        </div>
                        <div class="relative group">
                            <input type="password" id="password" name="password" required
                                class="w-full bg-white/[0.03] border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary/50 focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-white/10"
                                placeholder="••••••••••••">
                            <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-white/20 group-focus-within:text-primary/40 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 px-1">
                        <input type="checkbox" id="remember" class="w-4 h-4 rounded border-white/10 bg-white/5 text-primary focus:ring-primary/20 focus:ring-offset-0 transition-all cursor-pointer">
                        <label for="remember" class="text-xs text-white/40 cursor-pointer hover:text-white transition-colors">Remember session</label>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary/90 text-black font-bold py-4 rounded-xl text-xs uppercase tracking-[0.2em] transition-all transform active:scale-[0.98] shadow-lg shadow-primary/20">
                        Initialize Dashboard
                    </button>
                </form>
            </div>

            <!-- Footer Info -->
            <div class="mt-8 text-center">
                <p class="text-white/20 text-[10px] uppercase tracking-[0.3em] font-medium">
                    Secure Terminal Access &copy; 2026 KhyberSol
                </p>
            </div>
        </div>
    </main>

    <script>
        // Entrance Animation
        gsap.from("#login-container", {
            duration: 1.2,
            y: 30,
            opacity: 0,
            ease: "expo.out"
        });

        gsap.from(".glass-panel", {
            duration: 1.5,
            scale: 0.95,
            opacity: 0,
            delay: 0.2,
            ease: "expo.out"
        });

        // Interactive Glow
        document.addEventListener('mousemove', (e) => {
            const { clientX, clientY } = e;
            const x = (clientX / window.innerWidth) * 100;
            const y = (clientY / window.innerHeight) * 100;
            
            // Subtle update to any dynamic background elements if needed
        });
    </script>
</body>

</html>
