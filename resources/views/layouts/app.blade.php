<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', '2Acall') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Enhanced Navigation -->
    <nav id="navbar" class="fixed w-full bg-white/80 backdrop-blur-xl border-b border-gray-200/50 z-50 transition-all duration-500 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Enhanced Logo with Animation -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="group flex items-center space-x-3">
                        <div class="relative w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-3 shadow-lg">
                            <!-- Animated background pulse -->
                            <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-400 to-purple-400 animate-pulse opacity-75"></div>
                            <svg class="relative w-5 h-5 text-white drop-shadow-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-xl font-black bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                            2Acall
                        </span>
                    </a>
                </div>

                <!-- Enhanced Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil" class="nav-link relative text-gray-700 hover:text-blue-600 transition-all duration-300 font-medium py-2 group">
                        <span class="relative z-10">Accueil</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#services" class="nav-link relative text-gray-700 hover:text-blue-600 transition-all duration-300 font-medium py-2 group">
                        <span class="relative z-10">Services</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#apropos" class="nav-link relative text-gray-700 hover:text-blue-600 transition-all duration-300 font-medium py-2 group">
                        <span class="relative z-10">À propos</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    <a href="#testimonials" class="nav-link relative text-gray-700 hover:text-blue-600 transition-all duration-300 font-medium py-2 group">
                        <span class="relative z-10">Témoignages</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600 group-hover:w-full transition-all duration-300"></div>
                    </a>
                    
                    <!-- Enhanced Offer Button (keeping existing logic) -->
                    @guest
                        <a href="#emplois" class="offers-btn relative overflow-hidden bg-gray-100 rounded-xl px-4 py-2.5 text-gray-700 hover:text-blue-600 transition-all duration-300 font-medium group border border-gray-200 hover:border-blue-300">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-50 to-purple-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <span class="relative z-10 flex items-center">
                                <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                                </svg>
                                Offres
                            </span>
                            <div class="absolute -top-1 -right-1 w-3 h-3 bg-green-400 rounded-full animate-pulse shadow-lg"></div>
                        </a>
                    @endguest
                    @auth
                        <a href="#emplois" class="offers-btn-auth relative overflow-hidden px-4 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-medium group shadow-lg hover:shadow-xl transition-all duration-300">
                            <!-- Animated background shine -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                            <span class="relative z-10 flex items-center">
                                <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                                </svg>
                                Offres
                            </span>
                            <!-- Animated particles -->
                            <div class="absolute inset-0 overflow-hidden rounded-xl">
                                <div class="absolute top-1 left-1 w-1 h-1 bg-white rounded-full animate-ping"></div>
                                <div class="absolute bottom-1 right-1 w-1 h-1 bg-white rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
                            </div>
                        </a>
                    @endauth
                    
                    <a href="#contact" class="nav-link relative text-gray-700 hover:text-blue-600 transition-all duration-300 font-medium py-2 group">
                        <span class="relative z-10">Contact</span>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600 group-hover:w-full transition-all duration-300"></div>
                    </a>

                    <!-- Enhanced Auth Section -->
                    @auth
                        <div class="flex items-center space-x-3 pl-4 border-l border-gray-200">
                            <div class="relative group">
                                <button class="profile-dropdown-btn flex items-center space-x-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-xl transition-all duration-300 group border border-transparent hover:border-gray-200">
                                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center shadow-sm">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">{{ Auth::user()->first_name ?? 'Profil' }}</span>
                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <!-- Dropdown Menu -->
                                <div class="profile-dropdown absolute right-0 top-full mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 opacity-0 invisible transform scale-95 transition-all duration-200 origin-top-right">
                                    <div class="py-2">
                                        <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200">
                                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            Mon Profil
                                        </a>
                                        <hr class="my-1 border-gray-100">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full flex items-center px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-200 text-left">
                                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg>
                                                Déconnexion
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center space-x-3 pl-4 border-l border-gray-200">
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 transition-colors duration-300 font-medium">
                                Connexion
                            </a>
                            <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2.5 rounded-full hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 font-medium relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                <span class="relative z-10">S'inscrire</span>
                            </a>
                        </div>
                    @endauth
                </div>

                <!-- Enhanced Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button relative w-10 h-10 text-gray-700 hover:text-blue-600 focus:outline-none transition-colors duration-300 rounded-lg hover:bg-gray-50">
                        <span class="sr-only">Ouvrir le menu</span>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="hamburger w-6 h-6 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path class="line-1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
                                <path class="line-2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                                <path class="line-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Enhanced Mobile Navigation -->
        <div class="mobile-menu max-h-0 overflow-hidden md:hidden bg-white/95 backdrop-blur-lg border-t border-gray-200/50 transition-all duration-500 ease-in-out">
            <div class="px-4 py-4 space-y-1">
                <a href="#accueil" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                    Accueil
                </a>
                <a href="#services" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                    Services
                </a>
                <a href="#apropos" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                    À propos
                </a>
                <a href="#testimonials" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                    Témoignages
                </a>
                <a href="#emplois" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                    Offres
                </a>
                <a href="#contact" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                    Contact
                </a>
                @auth
                    <hr class="my-3 border-gray-200">
                    <a href="{{ route('profile.edit') }}" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                        Mon Profil
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="mobile-nav-link w-full text-left block px-4 py-3 text-gray-700 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all duration-300 font-medium">
                            Déconnexion
                        </button>
                    </form>
                @else
                    <hr class="my-3 border-gray-200">
                    <a href="{{ route('login') }}" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 font-medium">
                        Connexion
                    </a>
                    <a href="{{ route('register') }}" class="mobile-nav-link block px-4 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-medium text-center mt-2">
                        S'inscrire
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        {{ $slot }}
    </main>

    <!-- Enhanced Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            const hamburger = document.querySelector('.hamburger');
            const profileDropdownBtn = document.querySelector('.profile-dropdown-btn');
            const profileDropdown = document.querySelector('.profile-dropdown');

            // Navbar scroll effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-white/95', 'shadow-lg');
                    navbar.classList.remove('bg-white/80');
                } else {
                    navbar.classList.add('bg-white/80');
                    navbar.classList.remove('bg-white/95', 'shadow-lg');
                }
            });

            // Mobile menu toggle with animation
            let mobileMenuOpen = false;
            mobileMenuButton.addEventListener('click', () => {
                mobileMenuOpen = !mobileMenuOpen;
                
                if (mobileMenuOpen) {
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                    hamburger.style.transform = 'rotate(90deg)';
                } else {
                    mobileMenu.style.maxHeight = '0px';
                    hamburger.style.transform = 'rotate(0deg)';
                }
            });

            // Profile dropdown
            if (profileDropdownBtn && profileDropdown) {
                profileDropdownBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    profileDropdown.classList.toggle('opacity-0');
                    profileDropdown.classList.toggle('invisible');
                    profileDropdown.classList.toggle('scale-95');
                });

                document.addEventListener('click', () => {
                    profileDropdown.classList.add('opacity-0', 'invisible', 'scale-95');
                });
            }

            // Enhanced smooth scrolling with offset
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const offsetTop = target.offsetTop - 80; // Account for navbar height
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        if (mobileMenuOpen) {
                            mobileMenuOpen = false;
                            mobileMenu.style.maxHeight = '0px';
                            hamburger.style.transform = 'rotate(0deg)';
                        }
                    }
                });
            });

            // Active link highlighting
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            function highlightActiveLink() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    if (scrollY >= sectionTop) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('text-blue-600');
                    link.querySelector('div').style.width = '0';
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('text-blue-600');
                        link.querySelector('div').style.width = '100%';
                    }
                });
            }

            window.addEventListener('scroll', highlightActiveLink);
        });
    </script>

    <!-- Enhanced CSS -->
    <style>
        /* Navbar enhancements */
        .mobile-menu {
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hamburger {
            transition: transform 0.3s ease;
        }

        /* Profile dropdown animations */
        .profile-dropdown {
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Mobile nav links animation */
        .mobile-nav-link {
            transform: translateX(-10px);
            opacity: 0;
            animation: slideInLeft 0.3s ease forwards;
        }

        .mobile-nav-link:nth-child(1) { animation-delay: 0.1s; }
        .mobile-nav-link:nth-child(2) { animation-delay: 0.2s; }
        .mobile-nav-link:nth-child(3) { animation-delay: 0.3s; }
        .mobile-nav-link:nth-child(4) { animation-delay: 0.4s; }
        .mobile-nav-link:nth-child(5) { animation-delay: 0.5s; }
        .mobile-nav-link:nth-child(6) { animation-delay: 0.6s; }

        @keyframes slideInLeft {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Enhanced button hover effects */
        .offers-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.1), transparent);
            transition: left 0.6s;
        }

        .offers-btn:hover::before {
            left: 100%;
        }

        .offers-btn-auth::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .offers-btn-auth:hover::before {
            left: 100%;
        }
    </style>
</body>

</html>