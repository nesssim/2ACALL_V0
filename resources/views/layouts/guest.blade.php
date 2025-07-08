<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Call Center Pro') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
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

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 20px 20px;">
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-blue-400 rounded-full opacity-20 floating-animation"></div>
        <div class="absolute bottom-20 right-10 w-24 h-24 bg-purple-400 rounded-full opacity-20 floating-animation"
            style="animation-delay: -3s;"></div>
        <div class="absolute top-1/3 right-1/4 w-16 h-16 bg-blue-300 rounded-full opacity-15 floating-animation"
            style="animation-delay: -1s;"></div>

        <!-- Header avec logo -->
        <div class="relative z-10 pt-8 pb-6">
            <div class="max-w-md mx-auto px-4">
                <div class="text-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center space-x-3 group">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-white">Call Center Pro</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="relative z-10 flex items-center justify-center px-4 py-8">
            <div class="w-full max-w-md">
                <!-- Card d'authentification -->
                <div
                    class="bg-white/10 backdrop-blur-xl rounded-3xl p-8 border border-white/20 shadow-2xl animate-fadeInUp">
                    {{ $slot }}
                </div>

                <!-- Lien retour à l'accueil -->
                <div class="text-center mt-6">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center space-x-2 text-blue-200 hover:text-white transition-colors duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span class="text-sm font-medium">Retour à l'accueil</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>