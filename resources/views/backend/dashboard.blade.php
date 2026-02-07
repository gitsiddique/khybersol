<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | KhyberSol Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#32f08b',
                        dark: '#000000',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-black text-white">
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center space-y-4">
            <h1 class="text-4xl font-bold tracking-tighter">Admin <span class="text-primary">Dashboard</span></h1>
            <p class="text-white/40">Welcome to the KhyberSol Control Center.</p>
            <div class="flex flex-col gap-4">
                <a href="{{ route('home') }}" class="inline-block text-primary hover:underline text-sm">Back to Website</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-400 hover:text-red-300 text-xs uppercase tracking-widest font-bold">Terminate Session</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
