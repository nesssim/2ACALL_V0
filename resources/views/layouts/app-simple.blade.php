<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- [Gardez tout le head existant] -->
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
                            class="text-xl font-bold bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">2Acall</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Accueil</a>
                    <a href="#services"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Services</a>
                    <a href="#emplois"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium flex items-center">
                        Emplois
                        @guest
                            <svg class="w-4 h-4 ml-1 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        @endguest
                    </a>
                    <a href="#apropos"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">À
                        propos</a>
                    <a href="#contact"
                        class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Contact</a>

                    @auth
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('dashboard') }}"
                                class="text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Dashboard</a>
                            <div class="flex items-center space-x-2">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-green-400 to-green-500 rounded-full flex items-center justify-center">
                                    <span class="text-white text-sm font-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                </div>
                                <span class="text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                            </div>
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
                    <button type="button" onclick="toggleMobileMenu()"
                        class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-4 py-2 space-y-2">
                <a href="#accueil"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Accueil</a>
                <a href="#services"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Services</a>
                <a href="#emplois"
                    class="px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium flex items-center">
                    Emplois
                    @guest
                        <svg class="w-4 h-4 ml-1 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    @endguest
                </a>
                <a href="#apropos"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">À
                    propos</a>
                <a href="#contact"
                    class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Contact</a>
                @auth
                    <div class="border-t border-gray-200 pt-2 mt-2">
                        <div class="flex items-center px-3 py-2">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-green-400 to-green-500 rounded-full flex items-center justify-center mr-3">
                                <span class="text-white text-sm font-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                            <span class="text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                        </div>
                        <a href="{{ route('dashboard') }}"
                            class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Déconnexion</button>
                        </form>
                    </div>
                @else
                    <div class="border-t border-gray-200 pt-2 mt-2">
                        <a href="{{ route('login') }}"
                            class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200 font-medium">Connexion</a>
                        <a href="{{ route('register') }}"
                            class="block px-3 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-medium text-center">S'inscrire</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        {{ $slot }}
    </main>

    <!-- [Gardez tout le JavaScript existant] -->
</body>

</html>