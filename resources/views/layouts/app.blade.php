<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Call Center Pro') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-md border-b border-gray-200 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="text-xl font-bold bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">Call
                            Center Pro</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Accueil</a>
                    <a href="#services"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Services</a>
                    <a href="#apropos"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">À
                        propos</a>
                    <a href="#contact"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Contact</a>

                    @auth
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('dashboard') }}"
                                class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Dashboard</a>
                            <a href="{{ route('profile.edit') }}"
                                class="flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Mon Profil</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit"
                                    class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Déconnexion</button>
                            </form>
                        </div>
                    @else
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login') }}"
                                class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Connexion</a>
                            <a href="{{ route('register') }}"
                                class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200 font-medium">S'inscrire</a>
                        </div>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button"
                        class="mobile-menu-button text-gray-700 hover:text-blue-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-menu hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-4 py-2 space-y-2">
                <a href="#accueil"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Accueil</a>
                <a href="#services"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Services</a>
                <a href="#apropos"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">À
                    propos</a>
                <a href="#contact"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Contact</a>
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Connexion</a>
                    <a href="{{ route('register') }}"
                        class="block px-3 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-medium text-center">S'inscrire</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        {{ $slot }}
    </main>

    <!-- Script pour le menu mobile -->
    <script>
        document.querySelector('.mobile-menu-button').addEventListener('click', function () {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>