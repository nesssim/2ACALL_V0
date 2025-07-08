<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Call Center Pro') }} - Dashboard</title>
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Navbar gradient animation */
        .nav-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: 200% 200%;
            animation: gradientShift 8s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Glow effect */
        .glow-effect {
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.3);
        }

        /* Floating animation */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Fix z-index pour le dropdown */
        .dropdown-menu {
            z-index: 9999 !important;
            position: fixed !important;
        }
    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-900 min-h-screen">
    <!-- Navbar ultra moderne -->
    <nav
        class="relative overflow-hidden bg-gradient-to-r from-gray-900 via-purple-900 to-blue-900 shadow-2xl border-b-4 border-purple-500 z-50">
        <!-- Background effects -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 via-blue-600/20 to-cyan-600/20 animate-pulse">
        </div>
        <div class="absolute -top-4 -right-4 w-32 h-32 bg-gradient-to-r from-pink-400 to-purple-500 rounded-full opacity-20 animate-bounce"
            style="animation-duration: 4s;"></div>
        <div
            class="absolute -bottom-4 -left-4 w-24 h-24 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-full opacity-30 float-animation">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 flex justify-between items-center h-20">
            <!-- Brand avec effet glow -->
            <a href="{{ route('dashboard') }}"
                class="group flex items-center space-x-3 transform hover:scale-105 transition-all duration-300">
                <div class="relative">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 rounded-2xl flex items-center justify-center glow-effect transform group-hover:rotate-12 transition-all duration-300 shadow-xl">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <!-- Pulse effect -->
                    <div
                        class="absolute inset-0 w-12 h-12 bg-gradient-to-r from-cyan-400 to-purple-600 rounded-2xl animate-ping opacity-20">
                    </div>
                </div>
                <div class="text-white">
                    <span
                        class="text-2xl font-black tracking-tight bg-gradient-to-r from-white to-cyan-200 bg-clip-text text-transparent">Call
                        Center</span>
                    <div class="text-sm font-medium text-purple-200 -mt-1">Pro Dashboard</div>
                </div>
            </a>

            <!-- Navigation links avec effets modernes -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="{{ route('dashboard') }}"
                    class="group relative px-6 py-3 text-sm font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 {{ request()->routeIs('dashboard') ? 'text-white bg-white/20 shadow-lg' : 'text-purple-200 hover:text-white hover:bg-white/10' }}">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Dashboard
                    </span>
                    @if(request()->routeIs('dashboard'))
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/30 to-purple-500/30 rounded-xl blur-lg">
                        </div>
                    @endif
                </a>

                <a href="{{ route('admin.contact-messages.index') }}"
                    class="group relative px-6 py-3 text-sm font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 {{ request()->routeIs('admin.contact-messages*') ? 'text-white bg-white/20 shadow-lg' : 'text-purple-200 hover:text-white hover:bg-white/10' }}">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        Messages
                    </span>
                    @if(request()->routeIs('admin.contact-messages*'))
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/30 to-purple-500/30 rounded-xl blur-lg">
                        </div>
                    @endif
                </a>

                <a href="{{ route('admin.job-offers.index') }}"
                    class="group relative px-6 py-3 text-sm font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 {{ request()->routeIs('admin.job-offers*') ? 'text-white bg-white/20 shadow-lg' : 'text-purple-200 hover:text-white hover:bg-white/10' }}">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2" />
                        </svg>
                        Offres
                    </span>
                    @if(request()->routeIs('admin.job-offers*'))
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/30 to-purple-500/30 rounded-xl blur-lg">
                        </div>
                    @endif
                </a>
            </div>

            <!-- Profile dropdown ultra moderne -->
            <div class="relative flex items-center z-50">
                <button id="user-menu-btn"
                    class="group flex items-center space-x-3 focus:outline-none transform hover:scale-105 transition-all duration-300">
                    <div
                        class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-2xl px-4 py-2 hover:bg-white/20 transition-all duration-300">
                        <div class="relative">
                            <div
                                class="w-10 h-10 bg-gradient-to-r from-pink-400 via-purple-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-xl transform group-hover:rotate-12 transition-all duration-300">
                                <span
                                    class="text-white text-sm font-black">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            </div>
                            <!-- Online indicator -->
                            <div
                                class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-400 rounded-full border-2 border-white animate-pulse">
                            </div>
                        </div>
                        <div class="hidden sm:block text-left">
                            <div class="text-white font-semibold text-sm">{{ Auth::user()->name }}</div>
                            <div class="text-purple-200 text-xs">Administrateur</div>
                        </div>
                        <svg class="w-4 h-4 text-purple-200 transition-all duration-300 group-hover:text-white group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>

                <!-- Dropdown avec design moderne - POSITION FIXE -->
                <div id="user-dropdown"
                    class="dropdown-menu hidden w-72 bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/20 animate-fadeIn overflow-hidden"
                    style="position: fixed; z-index: 9999; top: 100px; right: 20px;">
                    <!-- Header du dropdown -->
                    <div class="bg-gradient-to-r from-purple-600 to-blue-600 p-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                <span
                                    class="text-white text-lg font-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            </div>
                            <div class="text-white">
                                <div class="font-bold">{{ Auth::user()->name }}</div>
                                <div class="text-blue-100 text-sm">{{ Auth::user()->email }}</div>
                                <div class="text-xs text-blue-200 mt-1 flex items-center">
                                    <div class="w-2 h-2 bg-green-400 rounded-full mr-1 animate-pulse"></div>
                                    En ligne
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Menu items -->
                    <div class="p-2">
                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 rounded-xl transition-all duration-300 group">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium">Mon Profil</div>
                                <div class="text-xs text-gray-500">Gérer mes informations</div>
                            </div>
                        </a>

                        <div class="border-t border-gray-100 my-2"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center space-x-3 px-4 py-3 text-red-600 hover:bg-gradient-to-r hover:from-red-50 hover:to-pink-50 rounded-xl transition-all duration-300 group">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <div class="font-medium">Déconnexion</div>
                                    <div class="text-xs text-red-400">Quitter la session</div>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content area -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    <script>
        // Enhanced dropdown toggle avec positionnement dynamique
        document.getElementById('user-menu-btn').addEventListener('click', function (e) {
            e.stopPropagation();
            const dropdown = document.getElementById('user-dropdown');
            const button = this;

            dropdown.classList.toggle('hidden');

            // Position dynamique du dropdown
            if (!dropdown.classList.contains('hidden')) {
                const buttonRect = button.getBoundingClientRect();
                dropdown.style.top = (buttonRect.bottom + 10) + 'px';
                dropdown.style.right = (window.innerWidth - buttonRect.right) + 'px';

                // Add entrance animation
                dropdown.style.transform = 'translateY(-10px)';
                dropdown.style.opacity = '0';
                setTimeout(() => {
                    dropdown.style.transform = 'translateY(0)';
                    dropdown.style.opacity = '1';
                }, 10);
            }
        });

        document.addEventListener('click', function () {
            document.getElementById('user-dropdown').classList.add('hidden');
        });

        // Prevent dropdown close when clicking inside
        document.getElementById('user-dropdown').addEventListener('click', function (e) {
            e.stopPropagation();
        });

        // Repositionner le dropdown au redimensionnement
        window.addEventListener('resize', function () {
            const dropdown = document.getElementById('user-dropdown');
            if (!dropdown.classList.contains('hidden')) {
                const button = document.getElementById('user-menu-btn');
                const buttonRect = button.getBoundingClientRect();
                dropdown.style.top = (buttonRect.bottom + 10) + 'px';
                dropdown.style.right = (window.innerWidth - buttonRect.right) + 'px';
            }
        });
    </script>
</body>

</html>