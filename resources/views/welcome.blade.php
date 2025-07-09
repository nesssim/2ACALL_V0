<x-app-layout>
    <!-- Optimized Hero Section -->
    <section id="accueil" class="relative py-24 lg:py-32 flex items-center overflow-hidden">
        <!-- Video Background (with preload="none" for better performance) -->
        <div class="absolute inset-0 z-0">
            <video autoplay loop muted playsinline preload="none" class="w-full h-full object-cover"
                poster="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2070&auto=format&fit=crop">
                <source src="https://cdn.coverr.co/videos/coverr-a-man-working-on-his-laptop-5548/1080p.mp4"
                    type="video/mp4">
            </video>
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-indigo-900/70 to-purple-900/80"></div>
        </div>

        <!-- Reduced number of background elements for better performance -->
        <div
            class="absolute top-0 left-0 w-80 h-80 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full filter blur-3xl opacity-20 animate-pulse">
        </div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full filter blur-3xl opacity-20 animate-pulse"
            style="animation-delay: 2s;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <!-- Left Column: Text Content (Optimized) -->
                <div class="text-white text-center lg:text-left">
                    <div
                        class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-5 border border-white/20">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-200">Disponible 24/7 pour votre succès</span>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-black leading-tight mb-5" id="hero-headline">
                        Votre Centre d'Appel
                        <span
                            class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">Professionnel</span>
                    </h1>

                    <p class="text-xl text-blue-100 mb-8 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Solutions complètes de télémarketing, support client et gestion d'appels. Augmentez votre
                        productivité avec nos services experts.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contact"
                            class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-full text-base font-semibold hover:shadow-lg hover:shadow-blue-500/25 transform hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center group">
                            Commencer Maintenant
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>

                        <a href="#services"
                            class="border-2 border-white text-white px-6 py-3 rounded-full text-base font-semibold hover:bg-white hover:text-blue-900 hover:shadow-lg hover:shadow-white/25 transform hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center backdrop-blur-sm">
                            Découvrir nos Services
                        </a>
                    </div>
                </div>

                <!-- Right Column: Simplified Interactive Card -->
                <div class="relative h-96 lg:h-[400px] hidden md:block" style="perspective: 1000px;">
                    <div id="interactive-card"
                        class="absolute inset-0 bg-white/5 backdrop-blur-xl rounded-3xl p-6 border border-white/10 shadow-2xl transition-transform duration-300"
                        style="transform-style: preserve-3d;">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <div class="text-sm text-gray-400">Activités en Direct</div>
                        </div>

                        <!-- Simplified Feed Items -->
                        <div class="space-y-4 h-full overflow-hidden">
                            <div class="flex items-center space-x-4 p-3 bg-white/5 rounded-lg border border-white/5">
                                <div
                                    class="w-10 h-10 bg-green-500/20 rounded-full flex items-center justify-center border border-green-500">
                                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Ticket #5821 Résolu</h3>
                                    <p class="text-blue-200 text-xs">Support Technique • Client: Acme Inc.</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 bg-white/5 rounded-lg border border-white/5">
                                <div
                                    class="w-10 h-10 bg-blue-500/20 rounded-full flex items-center justify-center border border-blue-500">
                                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Appel Entrant</h3>
                                    <p class="text-blue-200 text-xs">Campagne "Promo Été" • 3min 12s</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 bg-white/5 rounded-lg border border-white/5">
                                <div
                                    class="w-10 h-10 bg-purple-500/20 rounded-full flex items-center justify-center border border-purple-500">
                                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Nouvel Agent Connecté</h3>
                                    <p class="text-blue-200 text-xs">Équipe Support Niveau 2</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 bg-white/5 rounded-lg border border-white/5">
                                <div
                                    class="w-10 h-10 bg-yellow-500/20 rounded-full flex items-center justify-center border border-yellow-500">
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Avis Client 5 Étoiles</h3>
                                    <p class="text-blue-200 text-xs">"Service exceptionnel !"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compact Scroll Indicator -->
        <div class="absolute bottom-5 left-1/2 -translate-x-1/2 z-20">
            <a href="#services" class="text-white/80 hover:text-white animate-bounce flex flex-col items-center">
                <span class="text-xs mb-1">Découvrir</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- Optimized CSS with only essential animations -->
    <style>
        #hero-headline span {
            display: inline-block;
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #hero-headline {
            animation: fade-in-up 0.8s ease-out forwards;
        }
    </style>

    <!-- Optimized JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 3D Card - Optimized implementation
            const card = document.getElementById('interactive-card');
            const cardContainer = card?.parentElement;

            if (cardContainer) {
                // More efficient event handling with requestAnimationFrame
                let ticking = false;
                let rotateX = 0, rotateY = 0;

                cardContainer.addEventListener('mousemove', (e) => {
                    if (!ticking) {
                        window.requestAnimationFrame(() => {
                            const rect = cardContainer.getBoundingClientRect();
                            const x = e.clientX - rect.left;
                            const y = e.clientY - rect.top;
                            const centerX = rect.width / 2;
                            const centerY = rect.height / 2;

                            rotateX = (y - centerY) / 25;
                            rotateY = (centerX - x) / 25;

                            card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                            ticking = false;
                        });

                        ticking = true;
                    }
                });

                cardContainer.addEventListener('mouseleave', () => {
                    // Smooth reset with animation
                    card.style.transition = 'transform 0.5s ease-out';
                    card.style.transform = 'rotateX(0deg) rotateY(0deg)';

                    // Remove transition after animation completes
                    setTimeout(() => {
                        card.style.transition = 'transform 0.3s';
                    }, 500);
                });
            }
        });
    </script>
    <!-- Optimized Services Section -->
    <section id="services" class="py-16 bg-white relative overflow-hidden">
        <!-- Simplified Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div
                class="absolute top-0 left-0 w-72 h-72 bg-blue-500 rounded-full filter blur-2xl transform -translate-x-1/3 -translate-y-1/3">
            </div>
            <div
                class="absolute bottom-0 right-0 w-72 h-72 bg-purple-500 rounded-full filter blur-2xl transform translate-x-1/3 translate-y-1/3">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <div class="inline-block relative mb-4">
                    <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-3 relative">
                        Nos <span
                            class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">Services</span>
                        <!-- Single decorative element -->
                        <div
                            class="absolute -top-3 -right-3 w-6 h-6 bg-yellow-400 rounded-full animate-pulse hidden md:block">
                        </div>
                    </h2>
                    <div
                        class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full">
                    </div>
                </div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Des solutions <span class="font-bold text-blue-600">révolutionnaires</span> pour tous vos besoins en
                    communication client
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 - Support Client -->
                <div class="group relative">
                    <!-- Streamlined background effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl blur-md opacity-20 group-hover:opacity-30 transition-opacity duration-300">
                    </div>

                    <div
                        class="relative bg-white rounded-2xl p-6 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-blue-100 group-hover:border-blue-300 overflow-hidden h-full">
                        <div class="relative z-10">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-all duration-300 shadow-md">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>

                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition-colors duration-300">
                                Support Client
                                <div
                                    class="w-8 h-0.5 bg-blue-500 rounded-full mt-2 group-hover:w-full transition-all duration-300">
                                </div>
                            </h3>

                            <p class="text-gray-600 mb-5 leading-relaxed">
                                Service client <span class="font-bold text-blue-600">professionnel 24/7</span> pour
                                répondre à toutes les questions de vos clients avec excellence.
                            </p>

                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Support multilingue</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Disponibilité 24/7</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Formation continue</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Service 2 - Télémarketing -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl blur-md opacity-20 group-hover:opacity-30 transition-opacity duration-300">
                    </div>

                    <div
                        class="relative bg-white rounded-2xl p-6 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-purple-100 group-hover:border-purple-300 overflow-hidden h-full">
                        <div class="relative z-10">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-all duration-300 shadow-md">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z">
                                    </path>
                                </svg>
                            </div>

                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-700 transition-colors duration-300">
                                Télémarketing
                                <div
                                    class="w-8 h-0.5 bg-purple-500 rounded-full mt-2 group-hover:w-full transition-all duration-300">
                                </div>
                            </h3>

                            <p class="text-gray-600 mb-5 leading-relaxed">
                                Campagnes de télémarketing <span class="font-bold text-purple-600">personnalisées</span>
                                pour développer votre business et atteindre vos objectifs.
                            </p>

                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Prospection qualifiée</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Suivi personnalisé</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Reporting détaillé</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Service 3 - Formation Professionnelle -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-400 to-teal-600 rounded-2xl blur-md opacity-20 group-hover:opacity-30 transition-opacity duration-300">
                    </div>

                    <div
                        class="relative bg-white rounded-2xl p-6 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-emerald-100 group-hover:border-emerald-300 overflow-hidden h-full">
                        <!-- NEW badge -->
                        <div
                            class="absolute top-3 right-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-2 py-0.5 rounded-full shadow-sm">
                            NOUVEAU
                        </div>

                        <div class="relative z-10">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-emerald-600 to-teal-700 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-all duration-300 shadow-md">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>

                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-emerald-700 transition-colors duration-300">
                                Formation Professionnelle
                                <div
                                    class="w-8 h-0.5 bg-emerald-500 rounded-full mt-2 group-hover:w-full transition-all duration-300">
                                </div>
                            </h3>

                            <p class="text-gray-600 mb-5 leading-relaxed">
                                Programmes de formation <span class="font-bold text-emerald-600">sur-mesure</span> pour
                                développer les compétences de vos équipes.
                            </p>

                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Techniques de communication</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Gestion de la relation client</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div>
                                    <span class="font-medium">Certifications reconnues</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Streamlined Call to Action -->
            <div class="mt-12">
                <div
                    class="bg-gradient-to-r from-blue-600 via-purple-600 to-teal-600 rounded-2xl p-8 text-white relative overflow-hidden">
                    <!-- Single subtle animation -->
                    <div class="absolute top-0 left-0 w-full h-full">
                        <div
                            class="absolute top-0 left-0 w-24 h-24 bg-white rounded-full opacity-10 -translate-x-1/2 -translate-y-1/2 animate-pulse">
                        </div>
                        <div class="absolute bottom-0 right-0 w-24 h-24 bg-white rounded-full opacity-10 translate-x-1/2 translate-y-1/2 animate-pulse"
                            style="animation-delay: 1s"></div>
                    </div>

                    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold mb-2">Prêt à transformer votre business ?</h3>
                            <p class="text-lg opacity-90">Découvrez comment nos services peuvent propulser votre
                                entreprise.</p>
                        </div>
                        <button
                            class="whitespace-nowrap bg-white text-gray-900 font-bold px-6 py-3 rounded-full hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-md">
                            Commencer maintenant
                            <svg class="inline-block w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Stats Section -->
    <section class="py-16 relative overflow-hidden">
        <!-- Creative gradient background -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-indigo-700 to-purple-700"></div>

        <!-- Subtle geometric patterns -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full"
                style="background-image: radial-gradient(circle at 20px 20px, rgba(255,255,255,0.3) 2px, transparent 0); background-size: 40px 40px;">
            </div>
        </div>

        <!-- Simplified glowing elements -->
        <div class="absolute -top-20 -left-20 w-64 h-64 bg-blue-400 opacity-20 rounded-full filter blur-2xl"></div>
        <div class="absolute -bottom-10 right-10 w-48 h-48 bg-purple-400 opacity-20 rounded-full filter blur-2xl"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Stats Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-4">

                <!-- Stat 1: Clients Satisfaits -->
                <div class="relative group">
                    <!-- Hover effect background -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10">
                    </div>

                    <!-- Card with layered design -->
                    <div
                        class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center relative overflow-hidden transition-all duration-300 group-hover:transform group-hover:-translate-y-1 group-hover:shadow-xl">
                        <!-- Decorative icon -->
                        <div class="absolute -right-3 -top-3 w-16 h-16 text-white/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-full h-full">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </div>

                        <!-- Number with counter animation -->
                        <div class="text-4xl font-black text-white mb-1 relative inline-block" id="stat1">
                            <span
                                class="inline-block transform transition-transform duration-500 group-hover:scale-110">500+</span>
                        </div>

                        <!-- Label -->
                        <div class="text-blue-100 font-medium tracking-wide text-sm">
                            CLIENTS SATISFAITS
                        </div>
                    </div>
                </div>

                <!-- Stat 2: Appels par Mois -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10">
                    </div>

                    <div
                        class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center relative overflow-hidden transition-all duration-300 group-hover:transform group-hover:-translate-y-1 group-hover:shadow-xl">
                        <div class="absolute -right-3 -top-3 w-16 h-16 text-white/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-full h-full">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="text-4xl font-black text-white mb-1 relative inline-block" id="stat2">
                            <span
                                class="inline-block transform transition-transform duration-500 group-hover:scale-110">50K+</span>
                        </div>

                        <div class="text-blue-100 font-medium tracking-wide text-sm">
                            APPELS PAR MOIS
                        </div>
                    </div>
                </div>

                <!-- Stat 3: Taux de Satisfaction -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10">
                    </div>

                    <div
                        class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center relative overflow-hidden transition-all duration-300 group-hover:transform group-hover:-translate-y-1 group-hover:shadow-xl">
                        <div class="absolute -right-3 -top-3 w-16 h-16 text-white/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-full h-full">
                                <path
                                    d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                            </svg>
                        </div>

                        <div class="text-4xl font-black text-white mb-1 relative inline-block" id="stat3">
                            <span
                                class="inline-block transform transition-transform duration-500 group-hover:scale-110">98%</span>
                        </div>

                        <div class="text-blue-100 font-medium tracking-wide text-sm">
                            TAUX DE SATISFACTION
                        </div>
                    </div>
                </div>

                <!-- Stat 4: Support Disponible -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10">
                    </div>

                    <div
                        class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center relative overflow-hidden transition-all duration-300 group-hover:transform group-hover:-translate-y-1 group-hover:shadow-xl">
                        <div class="absolute -right-3 -top-3 w-16 h-16 text-white/20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-full h-full">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="text-4xl font-black text-white mb-1 relative inline-block" id="stat4">
                            <span
                                class="inline-block transform transition-transform duration-500 group-hover:scale-110">24/7</span>
                        </div>

                        <div class="text-blue-100 font-medium tracking-wide text-sm">
                            SUPPORT DISPONIBLE
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optimized Animation Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // More efficient animation with requestAnimationFrame
                function animateCounter(id, start, end, duration, suffix = '') {
                    const obj = document.getElementById(id);
                    if (!obj) return;

                    const startTime = performance.now();
                    const updateCounter = (currentTime) => {
                        const elapsedTime = currentTime - startTime;
                        const progress = Math.min(elapsedTime / duration, 1);

                        // Easing function for smoother animation
                        const easeOutQuad = t => t * (2 - t);
                        const easedProgress = easeOutQuad(progress);

                        const currentValue = Math.floor(start + (end - start) * easedProgress);
                        obj.textContent = currentValue + suffix;

                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        }
                    };

                    requestAnimationFrame(updateCounter);
                }

                // Intersection Observer to trigger animation when visible
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                animateCounter("stat1", 0, 500, 2500, '+');
                                animateCounter("stat2", 0, 50, 2500, 'K+');
                                animateCounter("stat3", 0, 98, 2500, '%');
                            }, 300);
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2 });

                const statsSection = document.querySelector('section');
                if (statsSection) observer.observe(statsSection);
            });
        </script>
    </section>
    <!-- Optimized Section À Propos -->
    <section id="apropos" class="bg-white py-16 lg:py-20 relative overflow-hidden">
        <!-- Simplified Background Elements -->
        <div
            class="absolute top-0 left-0 w-64 h-64 bg-blue-100 rounded-full opacity-15 -translate-x-1/3 -translate-y-1/3">
        </div>
        <div
            class="absolute bottom-0 right-0 w-72 h-72 bg-purple-100 rounded-full opacity-10 translate-x-1/3 translate-y-1/3">
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Colonne des images (Optimized) -->
                <div class="relative order-last lg:order-first">
                    <!-- Image principale -->
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl opacity-30 blur-md">
                        </div>
                        <div
                            class="relative rounded-2xl shadow-xl transform lg:rotate-[-2deg] transition-all duration-300 hover:rotate-0">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl opacity-20">
                            </div>
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                                alt="Équipe travaillant dans un bureau moderne"
                                class="relative rounded-2xl w-full h-full object-cover">
                        </div>

                        <!-- Single floating badge for cleaner look -->
                        <div class="absolute -top-3 -right-3 bg-white rounded-full p-2 shadow-md">
                            <div class="text-blue-600 font-bold text-sm">10+ Ans d'expérience</div>
                        </div>
                    </div>

                    <!-- Image secondaire (simplified) -->
                    <div class="absolute -bottom-8 -right-8 w-2/3 hidden lg:block">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1200&q=80"
                            alt="Gros plan sur une technologie de centre d'appel"
                            class="rounded-xl shadow-lg border-4 border-white">
                    </div>
                </div>

                <!-- Colonne de texte (Optimized) -->
                <div class="order-first lg:order-last">
                    <div class="inline-flex items-center bg-blue-50 rounded-full px-4 py-2 mb-4">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mr-2"></div>
                        <h2 class="text-sm font-bold uppercase text-blue-600 tracking-widest">Notre Histoire</h2>
                    </div>

                    <h3 class="text-4xl font-extrabold text-gray-900 mb-5 leading-tight">
                        Conçue par des experts, pour des <span
                            class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">résultats</span>
                    </h3>

                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Forts de plus d'une décennie d'expérience dans l'industrie des centres d'appel, nous
                        transformons les défis en opportunités et propulsons votre croissance commerciale grâce à une
                        expertise inégalée.
                    </p>

                    <!-- Statistiques Clés (Optimized) -->
                    <div class="grid grid-cols-3 gap-4 text-center mb-8">
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-3 shadow-sm">
                            <p class="text-3xl font-bold text-blue-600 mb-0">10+</p>
                            <p class="text-xs text-gray-600 font-medium">Ans d'expérience</p>
                        </div>
                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-lg p-3 shadow-sm">
                            <p class="text-3xl font-bold text-purple-600 mb-0">100 %</p>
                            <p class="text-xs text-gray-600 font-medium">employee satisfait</p>
                        </div>
                        <div class="bg-gradient-to-r from-blue-50 to-purple-100 rounded-lg p-3 shadow-sm">
                            <p class="text-3xl font-bold text-blue-600 mb-0">200+</p>
                            <p class="text-xs text-gray-600 font-medium">Projets Réussis</p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="#contact"
                            class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg text-base font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                            <span>Discutons de votre projet</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#services"
                            class="inline-flex items-center justify-center border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-lg text-base font-semibold hover:border-blue-600 hover:text-blue-600 transition-all duration-300">
                            Voir nos services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optimized Section Notre Équipe -->
    <section id="notre-equipe" class="py-16 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <!-- Simplified Background Element -->
        <div
            class="absolute top-0 right-0 w-56 h-56 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-15 transform translate-x-1/3 -translate-y-1/3">
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Title (Optimized) -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-blue-50 rounded-full px-4 py-2 mb-4">
                    <div class="w-2 h-2 bg-blue-600 rounded-full mr-2"></div>
                    <span class="text-sm font-bold uppercase text-blue-600 tracking-widest">Notre Équipe</span>
                </div>

                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight mb-4">
                    Rencontrez Notre <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Équipe
                        Dirigeante</span>
                </h2>

                <p class="max-w-2xl mx-auto text-lg text-gray-600 leading-relaxed">
                    Les experts passionnés qui transforment votre vision en réalité grâce à leur expertise et leur
                    dévouement.
                </p>
            </div>

            <!-- Optimized Team Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Membre 1 -->
                <div class="group relative">
                    <!-- Subtle background effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl opacity-0 group-hover:opacity-15 transition-opacity duration-300 blur-md">
                    </div>

                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow-md transform-gpu transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <!-- Photo container -->
                        <div class="relative h-80 overflow-hidden">
                            <!-- Replace this src with your laptop photo path -->
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="./assets/images/team/member1.jpg" alt="Photo de [Nom du membre 1]"
                                onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1888&auto=format&fit=crop'">

                            <!-- Gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                            </div>

                            <!-- Name and position overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-xl font-bold text-white">[Nom du membre 1]</h3>
                                <p class="text-sm text-blue-300">[Poste du membre 1]</p>
                            </div>

                            <!-- Hover overlay with bio -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-center p-6 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="mb-4">
                                    <h3 class="text-xl font-bold mb-1">[Nom du membre 1]</h3>
                                    <p class="text-blue-300 text-sm font-semibold mb-3">[Poste du membre 1]</p>
                                    <p class="text-sm leading-relaxed">[Biographie courte du membre 1]</p>
                                </div>

                                <!-- Social links -->
                                <div class="flex space-x-3">
                                    <a href="[LinkedIn URL]" target="_blank">
                                        <div
                                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="[Twitter URL]" target="_blank">
                                        <div
                                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-blue-400 transition-colors duration-300">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Membre 2 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl opacity-0 group-hover:opacity-15 transition-opacity duration-300 blur-md">
                    </div>

                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow-md transform-gpu transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="relative h-80 overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="./assets/images/team/member2.jpg" alt="Photo de [Nom du membre 2]"
                                onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1888&auto=format&fit=crop'">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-xl font-bold text-white">[Nom du membre 2]</h3>
                                <p class="text-sm text-purple-300">[Poste du membre 2]</p>
                            </div>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-center p-6 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="mb-4">
                                    <h3 class="text-xl font-bold mb-1">[Nom du membre 2]</h3>
                                    <p class="text-purple-300 text-sm font-semibold mb-3">[Poste du membre 2]</p>
                                    <p class="text-sm leading-relaxed">[Biographie courte du membre 2]</p>
                                </div>

                                <div class="flex space-x-3">
                                    <a href="[LinkedIn URL]" target="_blank">
                                        <div
                                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-purple-600 transition-colors duration-300">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Membre 3 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-teal-500 to-blue-600 rounded-xl opacity-0 group-hover:opacity-15 transition-opacity duration-300 blur-md">
                    </div>

                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow-md transform-gpu transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                        <div class="relative h-80 overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="./assets/images/team/member3.jpg" alt="Photo de [Nom du membre 3]"
                                onerror="this.src='https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop'">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                            </div>

                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-xl font-bold text-white">[Nom du membre 3]</h3>
                                <p class="text-sm text-teal-300">[Poste du membre 3]</p>
                            </div>

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-center p-6 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="mb-4">
                                    <h3 class="text-xl font-bold mb-1">[Nom du membre 3]</h3>
                                    <p class="text-teal-300 text-sm font-semibold mb-3">[Poste du membre 3]</p>
                                    <p class="text-sm leading-relaxed">[Biographie courte du membre 3]</p>
                                </div>

                                <div class="flex space-x-3">
                                    <a href="[LinkedIn URL]" target="_blank">
                                        <div
                                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-teal-600 transition-colors duration-300">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="[GitHub URL]" target="_blank">
                                        <div
                                            class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors duration-300">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optimized Testimonials Section -->
    <section id="testimonials" class="bg-gradient-to-br from-gray-50 to-white py-16 relative overflow-hidden">
        <!-- Single background element -->
        <div
            class="absolute top-0 left-0 w-80 h-80 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full opacity-15 transform -translate-x-1/3 -translate-y-1/3">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Simplified section title -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-yellow-50 rounded-full px-4 py-2 mb-4">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                    <span class="text-sm font-bold uppercase text-yellow-600 tracking-widest">Témoignages</span>
                </div>

                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight mb-4">
                    Ce que disent nos <span
                        class="bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent">clients
                        satisfaits</span>
                </h2>

                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    Nous sommes fiers de construire des relations solides avec nos clients et de leur offrir une
                    expérience exceptionnelle.
                </p>
            </div>

            <!-- Streamlined testimonial cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Témoignage 1 -->
                <div
                    class="bg-white rounded-xl shadow-md p-6 border border-gray-100 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <img class="w-12 h-12 rounded-full object-cover mr-4"
                            src="https://randomuser.me/api/portraits/men/32.jpg" alt="Photo de Jean Dupont">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Jean Dupont</h3>
                            <p class="text-gray-600 text-xs">Développeur Web • Lyon</p>
                        </div>
                    </div>

                    <div class="flex text-yellow-400 mb-3">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>

                    <p class="text-gray-700 text-sm leading-relaxed">
                        <span class="text-blue-500 text-xl font-serif">"</span>
                        Le service client est incroyablement réactif et compétent. Ils ont résolu mon problème en
                        quelques minutes. Une équipe de vrais professionnels !
                        <span class="text-blue-500 text-xl font-serif">"</span>
                    </p>
                </div>

                <!-- Témoignage 2 -->
                <div
                    class="bg-white rounded-xl shadow-md p-6 border border-gray-100 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <img class="w-12 h-12 rounded-full object-cover mr-4"
                            src="https://randomuser.me/api/portraits/women/44.jpg" alt="Photo de Sophie Dubois">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Sophie Dubois</h3>
                            <p class="text-gray-600 text-xs">Chef de Projet • Marseille</p>
                        </div>
                    </div>

                    <div class="flex text-yellow-400 mb-3">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>

                    <p class="text-gray-700 text-sm leading-relaxed">
                        <span class="text-purple-500 text-xl font-serif">"</span>
                        Un design épuré et une expérience utilisateur très intuitive. Notre projet a été livré en avance
                        et le résultat a dépassé toutes nos attentes.
                        <span class="text-purple-500 text-xl font-serif">"</span>
                    </p>
                </div>

                <!-- Témoignage 3 -->
                <div
                    class="bg-white rounded-xl shadow-md p-6 border border-gray-100 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <img class="w-12 h-12 rounded-full object-cover mr-4"
                            src="https://randomuser.me/api/portraits/men/55.jpg" alt="Photo de Marc Lefebvre">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Marc Lefebvre</h3>
                            <p class="text-gray-600 text-xs">Entrepreneur • Paris</p>
                        </div>
                    </div>

                    <div class="flex text-yellow-400 mb-3">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" opacity="0.3">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>

                    <p class="text-gray-700 text-sm leading-relaxed">
                        <span class="text-teal-500 text-xl font-serif">"</span>
                        Collaborer avec cette équipe a transformé notre vision en réalité. Leur expertise technique est
                        inégalée. Je recommande vivement leurs services.
                        <span class="text-teal-500 text-xl font-serif">"</span>
                    </p>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-8">
                <a href="#contact"
                    class="inline-flex items-center bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-6 py-3 rounded-lg text-base font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                    <span>Devenir un Client </span>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- ENHANCED SECTION - Offres d'emploi -->
    <section id="emplois"
        class="py-20 bg-gradient-to-br from-gray-50 via-blue-50/30 to-purple-50/30 relative overflow-hidden">
        <!-- Background decorative elements -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-3xl transform -translate-x-1/2 -translate-y-1/2 animate-pulse">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl transform translate-x-1/2 translate-y-1/2 animate-pulse">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <div
                    class="inline-flex items-center bg-gradient-to-r from-blue-50 to-purple-50 rounded-full px-6 py-3 mb-6 border border-blue-200/50">
                    <div class="w-2 h-2 bg-blue-600 rounded-full mr-3 animate-pulse"></div>
                    <span class="text-sm font-bold uppercase text-blue-600 tracking-widest">Carrières</span>
                </div>

                <h2 class="text-4xl lg:text-6xl font-black text-gray-900 mb-6">
                    Offres <span
                        class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">d'Emploi</span>
                </h2>

                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Rejoignez notre équipe dynamique et développez votre carrière dans le secteur des centres d'appel
                </p>
            </div>

            @auth
                <!-- Enhanced content for authenticated users -->
                <div
                    class="relative bg-gradient-to-br from-gray-900 via-blue-900/90 to-purple-900/90 rounded-3xl p-8 lg:p-12 overflow-hidden shadow-2xl">
                    <!-- Enhanced glow effects -->
                    <div
                        class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full filter blur-3xl opacity-30 animate-pulse">
                    </div>
                    <div class="absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2 w-96 h-96 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full filter blur-3xl opacity-30 animate-pulse"
                        style="animation-delay: 2s;"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full filter blur-3xl opacity-20 animate-pulse"
                        style="animation-delay: 4s;"></div>

                    <div class="relative z-10">
                        @if($jobOffers->count() > 0)
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                                @foreach($jobOffers as $jobOffer)
                                    <div class="group relative">
                                        <!-- Floating background glow -->
                                        <div
                                            class="absolute inset-0 bg-gradient-to-r 
                                                                                                                                                                                                                                                                                                                                        @if($jobOffer->contract_type === 'CDI') from-emerald-400 to-green-500
                                                                                                                                                                                                                                                                                                                                        @elseif($jobOffer->contract_type === 'CDD') from-purple-400 to-violet-500
                                                                                                                                                                                                                                                                                                                                        @elseif($jobOffer->contract_type === 'Stage') from-orange-400 to-amber-500
                                                                                                                                                                                                                                                                                                                                            @else from-blue-400 to-cyan-500
                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                        rounded-3xl opacity-0 group-hover:opacity-30 transition-opacity duration-500 blur-lg transform group-hover:scale-105">
                                        </div>

                                        <div
                                            class="relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-4 transition-all duration-500 border border-gray-100 group-hover:border-white/50 overflow-hidden">
                                            <!-- Animated particles -->
                                            <div
                                                class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full opacity-30 transform translate-x-8 -translate-y-8 group-hover:scale-150 transition-transform duration-700">
                                            </div>
                                            <div
                                                class="absolute bottom-0 left-0 w-16 h-16 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full opacity-20 transform -translate-x-6 translate-y-6 group-hover:scale-125 transition-transform duration-700">
                                            </div>

                                            <div class="relative z-10">
                                                <div class="flex items-center justify-between mb-6">
                                                    <div class="relative">
                                                        <div
                                                            class="w-20 h-20 bg-gradient-to-r 
                                                                                                                                                                                                                                                                                                                                                        @if($jobOffer->contract_type === 'CDI') from-emerald-500 to-green-600
                                                                                                                                                                                                                                                                                                                                                        @elseif($jobOffer->contract_type === 'CDD') from-purple-500 to-violet-600
                                                                                                                                                                                                                                                                                                                                                        @elseif($jobOffer->contract_type === 'Stage') from-orange-500 to-amber-600
                                                                                                                                                                                                                                                                                                                                                            @else from-blue-500 to-cyan-600
                                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                                        rounded-3xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">

                                                            @if($jobOffer->category === 'commercial')
                                                                <!-- Simple briefcase icon for commercial -->
                                                                <svg class="w-10 h-10 text-white group-hover:animate-pulse"
                                                                    fill="currentColor" viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 2C13.1 2 14 2.9 14 4V6H18C19.1 6 20 6.9 20 8V19C20 20.1 19.1 21 18 21H6C4.9 21 4 20.1 4 19V8C4 6.9 4.9 6 6 6H10V4C10 2.9 10.9 2 12 2M12 4V6H12V4M6 8V19H18V8H6Z" />
                                                                </svg>
                                                            @elseif($jobOffer->category === 'management')
                                                                <!-- Simple users icon for management -->
                                                                <svg class="w-10 h-10 text-white group-hover:animate-pulse"
                                                                    fill="currentColor" viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8 4C10.2 4 12 5.8 12 8S10.2 12 8 12 4 10.2 4 8 5.8 4 8 4M8 14C12.4 14 16 15.8 16 18V20H0V18C0 15.8 3.6 14 8 14Z" />
                                                                </svg>
                                                            @else
                                                                <!-- Simple phone icon for default/support -->
                                                                <svg class="w-10 h-10 text-white group-hover:animate-pulse"
                                                                    fill="currentColor" viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 15.5 21 15.95 21 16.5V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.09 8.32 8.82 8.59L6.62 10.79Z" />
                                                                </svg>
                                                            @endif
                                                        </div>

                                                        <!-- Status indicator -->
                                                        <div
                                                            class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center animate-pulse">
                                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                                        </div>
                                                    </div>

                                                    <div class="text-right">
                                                        <span
                                                            class="
                                                                                                                                                                                                                                                                                                                                                        @if($jobOffer->contract_type === 'CDI') bg-emerald-100 text-emerald-800
                                                                                                                                                                                                                                                                                                                                                        @elseif($jobOffer->contract_type === 'CDD') bg-purple-100 text-purple-800
                                                                                                                                                                                                                                                                                                                                                        @elseif($jobOffer->contract_type === 'Stage') bg-orange-100 text-orange-800
                                                                                                                                                                                                                                                                                                                                                            @else bg-blue-100 text-blue-800
                                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                                        text-xs font-bold px-4 py-2 rounded-full shadow-sm">{{ $jobOffer->contract_type }}</span>
                                                    </div>
                                                </div>

                                                <h3
                                                    class="text-2xl font-black text-gray-900 mb-4 group-hover:text-blue-700 transition-colors duration-300">
                                                    {{ $jobOffer->title }}
                                                    <div
                                                        class="w-8 h-1 bg-gradient-to-r 
                                                                                                                                                                                                                                                                                                                                                    @if($jobOffer->contract_type === 'CDI') from-emerald-500 to-green-500
                                                                                                                                                                                                                                                                                                                                                    @elseif($jobOffer->contract_type === 'CDD') from-purple-500 to-violet-500
                                                                                                                                                                                                                                                                                                                                                    @elseif($jobOffer->contract_type === 'Stage') from-orange-500 to-amber-500
                                                                                                                                                                                                                                                                                                                                                        @else from-blue-500 to-cyan-500
                                                                                                                                                                                                                                                                                                                                                    @endif
                                                                                                                                                                                                                                                                                                                                                    rounded-full mt-2 group-hover:w-full transition-all duration-500">
                                                    </div>
                                                </h3>

                                                <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                                                    {{ Str::limit($jobOffer->description, 120) }}
                                                </p>

                                                <div class="space-y-4 mb-8">
                                                    <div
                                                        class="flex items-center text-gray-600 group-hover:text-blue-600 transition-colors duration-300">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-r from-blue-100 to-blue-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                                </path>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="font-medium">{{ $jobOffer->location }}</span>
                                                    </div>

                                                    <div
                                                        class="flex items-center text-gray-600 group-hover:text-green-600 transition-colors duration-300">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-r from-green-100 to-green-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <span class="font-medium">
                                                            @if($jobOffer->is_salary_negotiable)
                                                                {{ number_format($jobOffer->salary, 0, ',', ' ') }}€ / mois (négociable)
                                                            @else
                                                                {{ number_format($jobOffer->salary, 0, ',', ' ') }}€ / mois
                                                            @endif
                                                        </span>
                                                    </div>

                                                    <div
                                                        class="flex items-center text-gray-600 group-hover:text-purple-600 transition-colors duration-300">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-r from-purple-100 to-purple-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="font-medium">{{ $jobOffer->work_type }}</span>
                                                    </div>
                                                </div>

                                                <button onclick="showJobDetails({{ $jobOffer->id }})"
                                                    class="group/btn relative w-full bg-gradient-to-r 
                                                                                                                                                                                                                                                                                                                                                @if($jobOffer->contract_type === 'CDI') from-emerald-500 to-green-600 hover:from-emerald-600 hover:to-green-700
                                                                                                                                                                                                                                                                                                                                                @elseif($jobOffer->contract_type === 'CDD') from-purple-500 to-violet-600 hover:from-purple-600 hover:to-violet-700
                                                                                                                                                                                                                                                                                                                                                @elseif($jobOffer->contract_type === 'Stage') from-orange-500 to-amber-600 hover:from-orange-600 hover:to-amber-700
                                                                                                                                                                                                                                                                                                                                                    @else from-blue-500 to-cyan-600 hover:from-blue-600 hover:to-cyan-700
                                                                                                                                                                                                                                                                                                                                                @endif
                                                                                                                                                                                                                                                                                                                                                text-white py-4 px-6 rounded-2xl font-bold hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">

                                                    <span class="relative z-10 flex items-center justify-center">
                                                        Postuler maintenant
                                                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform duration-300"
                                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                                        </svg>
                                                    </span>

                                                    <!-- Button glow effect -->
                                                    <div
                                                        class="absolute inset-0 bg-white opacity-0 group-hover/btn:opacity-20 transition-opacity duration-300">
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <!-- Enhanced no jobs message -->
                            <div class="text-center py-20">
                                <div class="relative mb-8">
                                    <div
                                        class="w-32 h-32 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto shadow-2xl">
                                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-32 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full opacity-30 animate-ping">
                                    </div>
                                </div>

                                <h3 class="text-3xl font-bold text-white mb-6">Aucune offre disponible pour le moment</h3>
                                <p class="text-gray-300 max-w-lg mx-auto text-lg leading-relaxed">
                                    Nous travaillons constamment à créer de nouvelles opportunités.
                                    Revenez bientôt pour découvrir nos dernières offres d'emploi !
                                </p>
                            </div>
                        @endif

                        <!-- Enhanced benefits section -->
                        <div class="mt-20 text-center">
                            <h3 class="text-4xl font-bold text-white mb-6">Pourquoi nous rejoindre ?</h3>
                            <p class="text-gray-300 max-w-2xl mx-auto text-lg mb-12">Découvrez les avantages exceptionnels
                                de travailler avec nous</p>

                            <div class="grid md:grid-cols-3 gap-8">
                                <div class="group relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-green-400 to-emerald-500 rounded-3xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-lg">
                                    </div>
                                    <div
                                        class="relative bg-white/10 backdrop-blur-sm p-8 rounded-3xl text-center border border-white/20 group-hover:border-white/40 transition-all duration-500 transform group-hover:-translate-y-2">
                                        <div
                                            class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                                </path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-white mb-3 text-xl">Salaires Attractifs</h4>
                                        <p class="text-gray-300 leading-relaxed">Rémunération competitive avec primes de
                                            performance et évolution salariale</p>
                                    </div>
                                </div>

                                <div class="group relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-blue-400 to-cyan-500 rounded-3xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-lg">
                                    </div>
                                    <div
                                        class="relative bg-white/10 backdrop-blur-sm p-8 rounded-3xl text-center border border-white/20 group-hover:border-white/40 transition-all duration-500 transform group-hover:-translate-y-2">
                                        <div
                                            class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                                </path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-white mb-3 text-xl">Formation Continue</h4>
                                        <p class="text-gray-300 leading-relaxed">Programmes de formation pour développer vos
                                            compétences et certifications</p>
                                    </div>
                                </div>

                                <div class="group relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-500 rounded-3xl opacity-0 group-hover:opacity-20 transition-opacity duration-500 blur-lg">
                                    </div>
                                    <div
                                        class="relative bg-white/10 backdrop-blur-sm p-8 rounded-3xl text-center border border-white/20 group-hover:border-white/40 transition-all duration-500 transform group-hover:-translate-y-2">
                                        <div
                                            class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-white mb-3 text-xl">Esprit d'Équipe</h4>
                                        <p class="text-gray-300 leading-relaxed">Environnement de travail collaboratif,
                                            bienveillant et stimulant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Enhanced content for non-authenticated users -->
                <div class="relative">
                    <!-- Enhanced blur overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-100 via-gray-50/90 to-transparent backdrop-blur-sm z-10 rounded-3xl">
                    </div>

                    <!-- Enhanced blurred content -->
                    <div class="filter blur-sm">
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                            @for($i = 0; $i < 3; $i++)
                                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                                    <div class="flex items-center justify-between mb-6">
                                        <div
                                            class="w-20 h-20 bg-gradient-to-r from-gray-300 to-gray-400 rounded-3xl animate-pulse">
                                        </div>
                                        <span
                                            class="bg-gray-200 text-gray-500 text-xs font-semibold px-4 py-2 rounded-full animate-pulse">●●●</span>
                                    </div>
                                    <div class="h-8 bg-gray-300 rounded-lg mb-4 animate-pulse"></div>
                                    <div class="space-y-2 mb-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse"></div>
                                        <div class="h-4 bg-gray-200 rounded w-3/4 animate-pulse"></div>
                                    </div>
                                    <div class="space-y-4 mb-8">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gray-200 rounded-full mr-4 animate-pulse"></div>
                                            <div class="h-4 bg-gray-200 rounded flex-1 animate-pulse"></div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gray-200 rounded-full mr-4 animate-pulse"></div>
                                            <div class="h-4 bg-gray-200 rounded flex-1 animate-pulse"></div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gray-200 rounded-full mr-4 animate-pulse"></div>
                                            <div class="h-4 bg-gray-200 rounded flex-1 animate-pulse"></div>
                                        </div>
                                    </div>
                                    <div class="h-12 bg-gray-300 rounded-2xl animate-pulse"></div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Enhanced unlock message -->
                    <div class="absolute inset-0 flex items-center justify-center z-20">
                        <div
                            class="bg-white rounded-3xl p-10 shadow-2xl border border-gray-200 text-center max-w-lg mx-4 transform hover:scale-105 transition-transform duration-300">
                            <div class="relative mb-8">
                                <div
                                    class="w-24 h-24 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-full flex items-center justify-center mx-auto shadow-lg">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                        </path>
                                    </svg>
                                </div>
                                <div
                                    class="absolute top-0 left-1/2 transform -translate-x-1/2 w-24 h-24 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full opacity-30 animate-ping">
                                </div>
                            </div>

                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Contenu Réservé</h3>
                            <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                                Connectez-vous ou créez un compte gratuit pour accéder à nos offres d'emploi exclusives et
                                découvrir les opportunités de carrière disponibles.
                            </p>

                            <div class="space-y-4">
                                <a href="{{ route('login') }}"
                                    class="group relative block w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-8 rounded-2xl font-bold hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                                    <span class="relative z-10 flex items-center justify-center">
                                        Se connecter
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </span>
                                    <div
                                        class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300">
                                    </div>
                                </a>

                                <a href="{{ route('register') }}"
                                    class="block w-full border-2 border-blue-600 text-blue-600 py-4 px-8 rounded-2xl font-bold hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                                    Créer un compte gratuit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </section>

    <!-- JavaScript for job details (unchanged) -->
    <script>
        function showJobDetails(jobId) {
            // You can implement a modal or redirect to a job details page
            alert('Fonctionnalité de postulation pour l\'offre #' + jobId + ' sera bientôt disponible!');
            // Or redirect to a job application page:
            // window.location.href = '/jobs/' + jobId + '/apply';
        }
    </script>
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 font-sans">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden">
                <div class="grid md:grid-cols-2">

                    <!-- Form Section -->
                    <div class="p-8 md:p-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Contactez-nous</h2>
                        <p class="text-gray-600 mb-8">Nous serions ravis de vous lire. Remplissez le formulaire et nous
                            vous répondrons rapidement.</p>

                        <!-- Messages d'erreur/succès avec IDs pour le scroll -->
                        @if(session('success'))
                            <div id="success-message"
                                class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        @if($errors->any())
                            <div id="error-message"
                                class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div>
                                        <p class="font-medium mb-1">Veuillez corriger les erreurs suivantes :</p>
                                        <ul class="list-disc list-inside text-sm space-y-1">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="first_name"
                                        class="block text-sm font-medium text-gray-700">Prénom</label>
                                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                        class="mt-1 block w-full px-4 py-3
                                            bg-gray-100 border-transparent rounded-lg focus:ring-blue-500
                                            focus:border-blue-500 focus:bg-white transition @error('first_name')
                                            border-red-300 bg-red-50 @enderror">
                                    @error('first_name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nom</label>
                                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                        class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('last_name') border-red-300 bg-red-50 @enderror">
                                    @error('last_name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for=" email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type=" email" id="email" name="email" value="{{ old('email') }}"
                                    class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('email') border-red-300 bg-red-50 @enderror">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium
                                        text-gray-700">Sujet</label>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                    class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('subject') border-red-300 bg-red-50 @enderror">
                                @error('subject')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div> <label for="message" class="block text-sm font-medium text-gray-700">
                                    Message</label>
                                <textarea id="message" name="message" rows="4"
                                    class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('message') border-red-300 bg-red-50 @enderror">{{ old('message') }}</textarea>
                                @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Envoyer le Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Enhanced Info Section Only (Replace your info section with this block) -->
                    <div
                        class="relative bg-gradient-to-br from-blue-700 via-purple-800 to-purple-700 p-8 md:p-12 text-white flex flex-col justify-center rounded-tr-3xl rounded-br-3xl overflow-hidden shadow-xl h-full">

                        <!-- Animated background blobs -->
                        <div
                            class="absolute top-0 left-0 w-28 h-28 bg-blue-300 opacity-20 rounded-full filter blur-2xl animate-pulse">
                        </div>
                        <div
                            class="absolute bottom-0 right-0 w-36 h-36 bg-purple-400 opacity-20 rounded-full filter blur-2xl animate-pulse">
                        </div>
                        <div class="absolute top-1/2 left-1/2 w-20 h-20 bg-blue-400 opacity-10 rounded-full filter blur-xl animate-bounce"
                            style="transform: translate(-50%, -50%);"></div>
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-white/10 via-transparent to-transparent pointer-events-none">
                        </div>

                        <div class="relative z-10">
                            <div class="inline-flex items-center bg-white/10 px-4 py-1 rounded-full mb-6">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-400 mr-2 animate-pulse"></span>
                                <span class="text-xs tracking-wide font-semibold uppercase text-white">Disponible
                                    24/7</span>
                            </div>
                            <h2
                                class="text-3xl md:text-4xl font-extrabold mb-6 tracking-tight drop-shadow-lg flex items-center">
                                <!-- New: Modern Map Pin Icon -->
                                <svg class="w-8 h-8 mr-2 text-blue-200" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21c-4.418 0-8-4.03-8-9a8 8 0 1116 0c0 4.97-3.582 9-8 9z" />
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" fill="none" />
                                </svg>
                                Informations de contact
                            </h2>
                            <p class="text-blue-100 mb-8 leading-relaxed">
                                Une question ou une idée de collaboration ? Notre équipe vous répond rapidement et avec
                                le sourire.
                            </p>
                            <div class="space-y-6 mb-8">
                                <div
                                    class="group flex items-center space-x-4 p-4 rounded-xl bg-white/10 hover:bg-white/20 transition-all duration-200">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center rounded-full bg-gradient-to-br from-blue-500 to-blue-600 shadow-sm group-hover:scale-105 transition">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 15.5 21 15.95 21 16.5V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.09 8.32 8.82 8.59L6.62 10.79Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs text-blue-100">Téléphone</span>
                                        <a href="tel:+21653768748"
                                            class="font-semibold text-lg text-white hover:underline transition">+216 53
                                            768 748</a>
                                    </div>
                                </div>
                                <div
                                    class="group flex items-center space-x-4 p-4 rounded-xl bg-white/10 hover:bg-white/20 transition-all duration-200">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center rounded-full bg-gradient-to-br from-purple-500 to-blue-500 shadow-sm group-hover:scale-105 transition">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 18H4V8L12 13L20 8V18ZM12 11L4 6H20L12 11Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs text-blue-100">Email</span>
                                        <a href="mailto:contact@2acall.com"
                                            class="font-semibold text-lg text-white hover:underline transition">contact@2acall.com</a>
                                    </div>
                                </div>
                                <div
                                    class="group flex items-center space-x-4 p-4 rounded-xl bg-white/10 hover:bg-white/20 transition-all duration-200">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center rounded-full bg-gradient-to-br from-pink-500 to-purple-600 shadow-sm group-hover:scale-105 transition">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22S19 14.25 19 9C19 5.13 15.87 2 12 2M12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs text-blue-100">Adresse</span>
                                        <span class="font-semibold text-lg text-white">4ème étage, Immeuble Safta, Av.
                                            de la république, Monastir 5000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-4 mt-8">
                                <a href="#" class="group">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-blue-300 transition">
                                        <svg class="w-5 h-5 text-white group-hover:text-blue-700 transition"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="group">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-blue-500 transition">
                                        <svg class="w-5 h-5 text-white group-hover:text-white transition"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="group">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-gray-200 transition">
                                        <svg class="w-5 h-5 text-white group-hover:text-gray-800 transition"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="mt-8 pt-8 border-t border-white/10 flex flex-col gap-1">
                                <span class="text-xs text-blue-200">Horaires d'ouverture :</span>
                                <span class="font-medium text-white">Lun – Ven : 9h – 18h</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Script pour scroll automatique vers la section contact -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Vérifier si il y a des messages de succès ou d'erreur
            const hasSuccess = document.getElementById('success-message');
            const hasError = document.getElementById('error-message');

            if (hasSuccess || hasError) {
                // Attendre un petit délai pour que la page soit complètement chargée
                setTimeout(function () {
                    // Scroll fluide vers la section contact
                    const contactSection = document.getElementById('contact');
                    if (contactSection) {
                        contactSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Optionnel : Focus sur le message pour attirer l'attention
                        if (hasSuccess) {
                            hasSuccess.style.animation = 'pulse 2s infinite';
                        } else if (hasError) {
                            hasError.style.animation = 'shake 0.5s ease-in-out';
                        }
                    }
                }, 200); // Délai de 200ms pour laisser le temps à la page de se charger
            }
        });

        // Animation CSS pour les messages
        const style = document.createElement('style');
        style.textContent = `
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.02); }
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
`;
        document.head.appendChild(style);
    </script>

    <!-- Enhanced Footer -->
    <footer
        class="bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 text-white py-20 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/10 to-purple-600/10"></div>
            <svg class="absolute top-0 right-0 w-64 h-64 transform rotate-45 opacity-20" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="40" fill="none" stroke="currentColor" stroke-width="0.5" />
                <circle cx="50" cy="50" r="30" fill="none" stroke="currentColor" stroke-width="0.5" />
                <circle cx="50" cy="50" r="20" fill="none" stroke="currentColor" stroke-width="0.5" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-4 gap-12">
                <!-- Brand Section -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-8">
                        <div class="relative">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center shadow-lg transform hover:scale-105 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div class="absolute -top-1 -right-1 w-4 h-4 bg-green-500 rounded-full animate-pulse"></div>
                        </div>
                        <div>
                            <span
                                class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">2acall</span>
                            <p class="text-xs text-gray-400 mt-1">Excellence in Call Centers</p>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-8 leading-relaxed text-lg max-w-md">
                        Votre partenaire de confiance pour tous vos besoins en centre d'appel.
                        <span class="text-blue-400 font-medium">Excellence, innovation et service client</span> au cœur
                        de nos priorités.
                    </p>

                    <!-- Social Media Links -->
                    <div class="flex space-x-4 mb-8">
                        <a href="#" class="group relative">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-110 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </div>
                            <span
                                class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Twitter</span>
                        </a>

                        <a href="#" class="group relative">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-700 to-blue-800 rounded-full flex items-center justify-center hover:from-blue-800 hover:to-blue-900 transition-all duration-300 transform hover:scale-110 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                </svg>
                            </div>
                            <span
                                class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Facebook</span>
                        </a>

                        <a href="#" class="group relative">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-800 to-blue-900 rounded-full flex items-center justify-center hover:from-blue-900 hover:to-indigo-900 transition-all duration-300 transform hover:scale-110 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </div>
                            <span
                                class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">LinkedIn</span>
                        </a>

                        <a href="#" class="group relative">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-purple-600 to-purple-700 rounded-full flex items-center justify-center hover:from-purple-700 hover:to-purple-800 transition-all duration-300 transform hover:scale-110 hover:shadow-lg">
                                <svg class="w-5 h-5 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.746.099.12.112.224.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.747 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.579.535 6.624 0 11.99-5.367 11.99-11.99C24.007 5.367 18.641.001 12.017.001z" />
                                </svg>
                            </div>
                            <span
                                class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Pinterest</span>
                        </a>
                    </div>

                    <!-- Newsletter Signup -->
                    <div class="bg-gradient-to-r from-gray-800 to-gray-700 rounded-xl p-6 border border-gray-600">
                        <h4 class="text-lg font-semibold mb-3 text-white">Restez informé</h4>
                        <p class="text-gray-300 text-sm mb-4">Recevez nos dernières actualités et offres spéciales</p>
                        <div class="flex">
                            <input type="email" placeholder="Votre email"
                                class="flex-1 px-4 py-2 bg-gray-900 border border-gray-600 rounded-l-lg focus:outline-none focus:border-blue-500 text-white placeholder-gray-400">
                            <button
                                class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 px-6 py-2 rounded-r-lg transition-all duration-300 transform hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Services Section -->
                <div class="transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-8 text-white relative">
                        <span
                            class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Services</span>
                        <div class="absolute -bottom-2 left-0 w-12 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600">
                        </div>
                    </h3>
                    <ul class="space-y-4">
                        <li class="group">
                            <a href="#"
                                class="flex items-center text-gray-300 hover:text-white transition-all duration-300 group-hover:translate-x-2">
                                <div
                                    class="w-2 h-2 bg-blue-600 rounded-full mr-3 group-hover:bg-purple-600 transition-colors duration-300">
                                </div>
                                <span>Support Client</span>
                                <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="group">
                            <a href="#"
                                class="flex items-center text-gray-300 hover:text-white transition-all duration-300 group-hover:translate-x-2">
                                <div
                                    class="w-2 h-2 bg-blue-600 rounded-full mr-3 group-hover:bg-purple-600 transition-colors duration-300">
                                </div>
                                <span>Télémarketing</span>
                                <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="group">
                            <a href="#"
                                class="flex items-center text-gray-300 hover:text-white transition-all duration-300 group-hover:translate-x-2">
                                <div
                                    class="w-2 h-2 bg-blue-600 rounded-full mr-3 group-hover:bg-purple-600 transition-colors duration-300">
                                </div>
                                <span>Analyse & Reporting</span>
                                <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="group">
                            <a href="#"
                                class="flex items-center text-gray-300 hover:text-white transition-all duration-300 group-hover:translate-x-2">
                                <div
                                    class="w-2 h-2 bg-blue-600 rounded-full mr-3 group-hover:bg-purple-600 transition-colors duration-300">
                                </div>
                                <span>Formation</span>
                                <svg class="w-4 h-4 ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold mb-8 text-white relative">
                        <span
                            class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Contact</span>
                        <div class="absolute -bottom-2 left-0 w-12 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600">
                        </div>
                    </h3>
                    <ul class="space-y-5">
                        <li class="flex items-start group">
                            <div
                                class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 group-hover:text-white transition-colors duration-300">+216 53
                                    768 748</p>
                                <p class="text-xs text-gray-500 mt-1">Disponible 24/7</p>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div
                                class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 group-hover:text-white transition-colors duration-300">
                                    contact@2acall.com</p>
                                <p class="text-xs text-gray-500 mt-1">Réponse sous 24h</p>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div
                                class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 group-hover:text-white transition-colors duration-300">4ème
                                    étage, Immeuble Safta<br>Av. de la République<br>5000 Monastir, Tunisie</p>
                                <p class="text-xs text-gray-500 mt-1">Lun-Ven: 8h-18h</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-700 mt-16 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex items-center space-x-4 mb-4 md:mb-0">
                        <p class="text-gray-400 text-sm">
                            &copy; 2025 <span class="text-blue-400 font-semibold">2acall</span>. Tous droits réservés.
                        </p>
                        <div class="flex space-x-4 text-xs">
                            <a href="#"
                                class="text-gray-500 hover:text-blue-400 transition-colors duration-300">Politique de
                                confidentialité</a>
                            <span class="text-gray-600">|</span>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-400 transition-colors duration-300">Conditions
                                d'utilisation</a>
                            <span class="text-gray-600">|</span>
                            <a href="#"
                                class="text-gray-500 hover:text-blue-400 transition-colors duration-300">Mentions
                                légales</a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2 text-sm text-gray-400">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <span>Service en ligne</span>
                        </div>

                        <a href="#contact"
                            class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg text-sm transition-all duration-300 transform hover:scale-105">
                            Nous contacter
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>