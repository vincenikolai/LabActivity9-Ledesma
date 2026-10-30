<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    
    <!-- Navigation -->
    <nav class="bg-white shadow p-4 mb-6">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="/dashboard" class="font-bold text-xl text-emerald-600">Bakuna Tracker</a>
            
            <div class="flex items-center space-x-6">
                @auth
                    <div class="space-x-4">
                        <a href="/dashboard" class="hover:text-emerald-600 hover:underline">Dashboard</a>
                        <a href="/schedule" class="hover:text-emerald-600 hover:underline">Schedule</a>
                    </div>

                    <span>Hi, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="underline text-gray-600 hover:text-gray-900">Logout</button>
                    </form>
                @endauth
                
                @guest
                    <a href="{{ route('login') }}" class="underline text-gray-600 hover:text-gray-900">Sign in</a>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="max-w-6xl mx-auto p-4 mt-10 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} Barangay Matina Crossing Health Center
    </footer>

</body>
</html>