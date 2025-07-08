<x-app-layout>
    <!-- Hero Section -->
    <section id="accueil"
        class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 min-h-screen flex items-center overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 20px 20px;">
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-blue-400 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-24 h-24 bg-purple-400 rounded-full opacity-20 animate-bounce"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                        2Acall Votre Centre d'Appel
                        <span
                            class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Professionnel</span>
                    </h1>
                    <p class="text-xl lg:text-2xl text-blue-100 mb-8 leading-relaxed">
                        Solutions complètes de télémarketing, support client et gestion d'appels.
                        Augmentez votre productivité avec nos services experts.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact"
                            class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-center">
                            Commencer Maintenant
                        </a>
                        <a href="#services"
                            class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-blue-900 transition-all duration-300 text-center">
                            Découvrir nos Services
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10 bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20">
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold">Service 24/7</h3>
                                    <p class="text-blue-200">Support client continu</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold">Technologie Avancée</h3>
                                    <p class="text-blue-200">Outils de pointe</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold">Équipe Experte</h3>
                                    <p class="text-blue-200">Professionnels qualifiés</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Nos <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Services</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des solutions complètes pour tous vos besoins en communication client
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="group bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-blue-200">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Support Client</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Service client professionnel 24/7 pour répondre à
                        toutes les questions de vos clients avec excellence.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Support
                            multilingue</li>
                        <li class="flex items-center"><span
                                class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Disponibilité 24/7</li>
                        <li class="flex items-center"><span
                                class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>Formation continue</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div
                    class="group bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-purple-200">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Télémarketing</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Campagnes de télémarketing personnalisées pour
                        développer votre business et atteindre vos objectifs.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><span
                                class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>Prospection qualifiée</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>Suivi
                            personnalisé</li>
                        <li class="flex items-center"><span
                                class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>Reporting détaillé</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div
                    class="group bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-green-200">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-green-600 to-green-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Analyse & Reporting</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Analyses approfondies et rapports détaillés pour
                        optimiser vos performances commerciales.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><span
                                class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Tableaux de bord</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>KPIs
                            en temps réel</li>
                        <li class="flex items-center"><span
                                class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Recommandations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">500+</div>
                    <div class="text-blue-100">Clients Satisfaits</div>
                </div>
                <div class="text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">50K+</div>
                    <div class="text-blue-100">Appels par Mois</div>
                </div>
                <div class="text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">98%</div>
                    <div class="text-blue-100">Taux de Satisfaction</div>
                </div>
                <div class="text-white">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-blue-100">Support Disponible</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À Propos (Nouveau Design) -->
    <section id="apropos" class="bg-white py-20 lg:py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">

                <!-- Colonne des images -->
                <div class="relative order-last lg:order-first">
                    <!-- Image principale (arrière-plan) -->
                    <div
                        class="relative rounded-3xl shadow-2xl transform lg:rotate-[-6deg] transition-transform duration-500 hover:rotate-0">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl opacity-30">
                        </div>
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                            alt="Équipe travaillant dans un bureau moderne"
                            class="relative rounded-3xl w-full h-full object-cover">
                    </div>
                    <!-- Image secondaire (premier plan) -->
                    <div class="absolute -bottom-12 -right-12 w-2/3 hidden lg:block">
                        <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a6b5?q=80&w=1932&auto=format&fit=crop"
                            alt="Gros plan sur une technologie de centre d'appel"
                            class="rounded-2xl shadow-xl border-8 border-white">
                    </div>
                </div>

                <!-- Colonne de texte -->
                <div class="order-first lg:order-last">
                    <h2 class="text-sm font-bold uppercase text-blue-600 tracking-widest mb-2">Notre Histoire</h2>
                    <h3 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                        Conçue par des experts, pour des <span
                            class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">résultats</span>
                    </h3>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Forts de plus d'une décennie d'expérience dans l'industrie des centres d'appel, nous
                        transformons les défis en opportunités et propulsons votre croissance commerciale grâce à une
                        expertise inégalée.
                    </p>

                    <!-- Statistiques Clés -->
                    <div class="grid grid-cols-3 gap-4 text-center mb-10">
                        <div>
                            <p class="text-4xl font-bold text-blue-600">10+</p>
                            <p class="text-sm text-gray-500 font-medium">Ans d'expérience</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-purple-600">98%</p>
                            <p class="text-sm text-gray-500 font-medium">Satisfaction Client</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-blue-600">500+</p>
                            <p class="text-sm text-gray-500 font-medium">Projets Réussis</p>
                        </div>
                    </div>

                    <a href="#contact"
                        class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl text-lg font-semibold hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        Discutons de votre projet
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Section Notre Équipe (Nouveau Design Premium) -->
    <section id="notre-equipe" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Titre de la section -->
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight">
                    Rencontrez Notre <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Équipe
                        Dirigeante</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                    Les experts passionnés qui transforment votre vision en réalité.
                </p>
            </div>

            <!-- Grille des membres de l'équipe (3 membres) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Membre 1 -->
                <div
                    class="group relative rounded-2xl overflow-hidden shadow-xl transform-gpu transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <!-- Bordure lumineuse au survol -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative bg-white p-1 rounded-2xl">
                        <!-- Image -->
                        <div class="relative h-96 overflow-hidden rounded-xl">
                            <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1888&auto=format&fit=crop"
                                alt="Photo de Jean-Luc Picard">

                            <!-- Contenu superposé (Nom & Poste) -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                                <h3 class="text-2xl font-bold text-white">Jean-Luc Picard</h3>
                                <p class="font-semibold text-blue-300">Président Directeur Général</p>
                            </div>
                        </div>

                        <!-- Contenu révélé au survol (Bio & Liens) -->
                        <div
                            class="absolute inset-0 bg-black/70 backdrop-blur-sm flex flex-col items-center justify-center p-8 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="mb-4">Visionnaire stratégique avec 20 ans d'expérience dans la croissance
                                d'entreprise.</p>
                            <div class="flex justify-center space-x-4">
                                <a href="#"
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-purple-600 transition-colors"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="#"
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-purple-600 transition-colors"><i
                                        class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Membre 2 -->
                <div
                    class="group relative rounded-2xl overflow-hidden shadow-xl transform-gpu transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative bg-white p-1 rounded-2xl">
                        <div class="relative h-96 overflow-hidden rounded-xl">
                            <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1888&auto=format&fit=crop"
                                alt="Photo de Catherine Janeway">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                                <h3 class="text-2xl font-bold text-white">Catherine Janeway</h3>
                                <p class="font-semibold text-blue-300">Directrice des Opérations</p>
                            </div>
                        </div>
                        <div
                            class="absolute inset-0 bg-black/70 backdrop-blur-sm flex flex-col items-center justify-center p-8 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="mb-4">Experte en optimisation des processus et en gestion d'équipes performantes.
                            </p>
                            <div class="flex justify-center space-x-4">
                                <a href="#"
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-purple-600 transition-colors"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Membre 3 -->
                <div
                    class="group relative rounded-2xl overflow-hidden shadow-xl transform-gpu transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative bg-white p-1 rounded-2xl">
                        <div class="relative h-96 overflow-hidden rounded-xl">
                            <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                                src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop"
                                alt="Photo de William Riker">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                                <h3 class="text-2xl font-bold text-white">William Riker</h3>
                                <p class="font-semibold text-blue-300">Responsable Technologique</p>
                            </div>
                        </div>
                        <div
                            class="absolute inset-0 bg-black/70 backdrop-blur-sm flex flex-col items-center justify-center p-8 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <p class="mb-4">Innovateur passionné par les technologies de communication de nouvelle
                                génération.</p>
                            <div class="flex justify-center space-x-4">
                                <a href="#"
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-purple-600 transition-colors"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="#"
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-purple-600 transition-colors"><i
                                        class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- N'oubliez pas d'inclure Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Section Témoignages Clients -->
    <section id="testimonials" class="bg-gray-50 py-20 sm:py-24">
        <div class="container mx-auto px-4">

            <!-- Titre de la section -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-800 tracking-tight sm:text-5xl">
                    Ce que disent nos clients satisfaits
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                    Nous sommes fiers de construire des relations solides avec nos clients. Voici leur avis.
                </p>
            </div>

            <!-- Grille des témoignages -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Témoignage 1 -->
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 transform hover:-translate-y-2 transition-transform duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <img class="w-16 h-16 rounded-full object-cover mr-4 shadow-md"
                            src="https://randomuser.me/api/portraits/men/32.jpg" alt="Photo de Jean Dupont">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Jean Dupont</h3>
                            <p class="text-gray-600">Développeur Web, Lyon</p>
                        </div>
                    </div>
                    <div class="text-yellow-500 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        <i class="fas fa-quote-left text-2xl text-gray-200 mr-2"></i>
                        Le service client est incroyablement réactif et compétent. Ils ont résolu mon problème en
                        quelques minutes. Une équipe de vrais professionnels !
                    </p>
                </div>

                <!-- Témoignage 2 -->
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 transform hover:-translate-y-2 transition-transform duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <img class="w-16 h-16 rounded-full object-cover mr-4 shadow-md"
                            src="https://randomuser.me/api/portraits/women/44.jpg" alt="Photo de Sophie Dubois">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Sophie Dubois</h3>
                            <p class="text-gray-600">Chef de Projet, Marseille</p>
                        </div>
                    </div>
                    <div class="text-yellow-500 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        <i class="fas fa-quote-left text-2xl text-gray-200 mr-2"></i>
                        Un design épuré et une expérience utilisateur très intuitive. Notre projet a été livré en avance
                        et le résultat a dépassé toutes nos attentes.
                    </p>
                </div>

                <!-- Témoignage 3 -->
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 transform hover:-translate-y-2 transition-transform duration-300 ease-in-out">
                    <div class="flex items-center mb-6">
                        <img class="w-16 h-16 rounded-full object-cover mr-4 shadow-md"
                            src="https://randomuser.me/api/portraits/men/55.jpg" alt="Photo de Marc Lefebvre">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Marc Lefebvre</h3>
                            <p class="text-gray-600">Entrepreneur, Paris</p>
                        </div>
                    </div>
                    <div class="text-yellow-500 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        <i class="fas fa-quote-left text-2xl text-gray-200 mr-2"></i>
                        Collaborer avec cette équipe a transformé notre vision en réalité. Leur expertise technique est
                        inégalée. Je recommande vivement leurs services.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--
Note : Pour que les icônes (étoiles, guillemets) s'affichent, assurez-vous d'avoir Font Awesome inclus dans votre projet.
Vous pouvez ajouter cette ligne dans la balise `<head>` de votre fichier HTML principal si ce n'est pas déjà fait :
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
-->
    <!-- NOUVELLE SECTION - Offres d'emploi -->
    <section id="emplois" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Offres <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">d'Emploi</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Rejoignez notre équipe et développez votre carrière dans le secteur des centres d'appel
                </p>
            </div>

            @auth
                <!-- Contenu pour utilisateurs connectés avec fond "Glowing" -->
                <div class="relative bg-gray-900 rounded-3xl p-8 lg:p-12 overflow-hidden">
                    <!-- Effet de lueur en arrière-plan -->
                    <div
                        class="absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600 rounded-full filter blur-3xl opacity-20 animate-pulse">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2 w-96 h-96 bg-purple-600 rounded-full filter blur-3xl opacity-20 animate-pulse animation-delay-4000">
                    </div>

                    <div class="relative z-10">
                        <!-- Grille des offres dynamiques -->
                        @if($jobOffers->count() > 0)
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                                @foreach($jobOffers as $jobOffer)
                                    <div
                                        class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-100">
                                        <div class="flex items-center justify-between mb-6">
                                            <div
                                                class="w-16 h-16 bg-gradient-to-r 
                                                                                        @if($jobOffer->contract_type === 'CDI') from-green-500 to-green-600
                                                                                        @elseif($jobOffer->contract_type === 'CDD') from-purple-500 to-purple-600
                                                                                        @elseif($jobOffer->contract_type === 'Stage') from-orange-500 to-orange-600
                                                                                            @else from-blue-500 to-blue-600
                                                                                        @endif
                                                                                        rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    @if($jobOffer->category === 'commercial')
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2">
                                                        </path>
                                                    @elseif($jobOffer->category === 'management')
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                        </path>
                                                    @else
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                                        </path>
                                                    @endif
                                                </svg>
                                            </div>
                                            <span
                                                class="
                                                                                        @if($jobOffer->contract_type === 'CDI') bg-green-100 text-green-800
                                                                                        @elseif($jobOffer->contract_type === 'CDD') bg-purple-100 text-purple-800
                                                                                        @elseif($jobOffer->contract_type === 'Stage') bg-orange-100 text-orange-800
                                                                                            @else bg-blue-100 text-blue-800
                                                                                        @endif
                                                                                        text-xs font-semibold px-3 py-1 rounded-full">{{ $jobOffer->contract_type }}</span>
                                        </div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $jobOffer->title }}</h3>
                                        <p class="text-gray-600 mb-4 leading-relaxed">{{ Str::limit($jobOffer->description, 120) }}
                                        </p>
                                        <div class="space-y-3 mb-6">
                                            <div class="flex items-center text-gray-600">
                                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                    </path>
                                                </svg>
                                                <span class="text-sm">{{ $jobOffer->location }}</span>
                                            </div>
                                            <div class="flex items-center text-gray-600">
                                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                                    </path>
                                                </svg>
                                                <span class="text-sm">
                                                    @if($jobOffer->is_salary_negotiable)
                                                        {{ number_format($jobOffer->salary, 0, ',', ' ') }}€ / mois (négociable)
                                                    @else
                                                        {{ number_format($jobOffer->salary, 0, ',', ' ') }}€ / mois
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="flex items-center text-gray-600">
                                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span class="text-sm">{{ $jobOffer->work_type }}</span>
                                            </div>
                                        </div>
                                        <button onclick="showJobDetails({{ $jobOffer->id }})"
                                            class="w-full bg-gradient-to-r 
                                                                                    @if($jobOffer->contract_type === 'CDI') from-green-500 to-green-600
                                                                                    @elseif($jobOffer->contract_type === 'CDD') from-purple-500 to-purple-600
                                                                                    @elseif($jobOffer->contract_type === 'Stage') from-orange-500 to-orange-600
                                                                                        @else from-blue-500 to-blue-600
                                                                                    @endif
                                                                                    text-white py-3 px-4 rounded-xl font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                                            Postuler maintenant
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <!-- Message quand aucune offre n'est disponible -->
                            <div class="text-center py-16">
                                <div
                                    class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-4">Aucune offre disponible pour le moment</h3>
                                <p class="text-gray-300 max-w-lg mx-auto">
                                    Nous travaillons constamment à créer de nouvelles opportunités.
                                    Revenez bientôt pour découvrir nos dernières offres d'emploi !
                                </p>
                            </div>
                        @endif

                        <!-- Section avantages -->
                        <div class="mt-16 text-center">
                            <h3 class="text-3xl font-bold text-white mb-4">Pourquoi nous rejoindre ?</h3>
                            <p class="text-gray-300 max-w-2xl mx-auto">Découvrez les avantages de travailler avec nous</p>
                        </div>
                        <div class="grid md:grid-cols-3 gap-6 mt-10">
                            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl text-center border border-white/20">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-white mb-2">Salaires Attractifs</h4>
                                <p class="text-gray-400 text-sm">Rémunération competitive avec primes de performance</p>
                            </div>

                            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl text-center border border-white/20">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-white mb-2">Formation Continue</h4>
                                <p class="text-gray-400 text-sm">Programmes de formation pour développer vos compétences</p>
                            </div>

                            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl text-center border border-white/20">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 515.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-white mb-2">Esprit d'Équipe</h4>
                                <p class="text-gray-400 text-sm">Environnement de travail collaboratif et bienveillant</p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Contenu pour utilisateurs non connectés (locked) -->
                <div class="relative">
                    <!-- Overlay avec flou -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-100 via-gray-50/80 to-transparent backdrop-blur-sm z-10 rounded-3xl">
                    </div>

                    <!-- Contenu flouté -->
                    <div class="filter blur-sm">
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Fausses offres pour l'aperçu -->
                            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-16 h-16 bg-gray-300 rounded-2xl"></div>
                                    <span
                                        class="bg-gray-200 text-gray-500 text-xs font-semibold px-3 py-1 rounded-full">●●●</span>
                                </div>
                                <div class="h-6 bg-gray-300 rounded mb-3"></div>
                                <div class="h-4 bg-gray-200 rounded mb-2"></div>
                                <div class="h-4 bg-gray-200 rounded mb-4 w-3/4"></div>
                                <div class="space-y-3 mb-6">
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                </div>
                                <div class="h-10 bg-gray-300 rounded-xl"></div>
                            </div>

                            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-16 h-16 bg-gray-300 rounded-2xl"></div>
                                    <span
                                        class="bg-gray-200 text-gray-500 text-xs font-semibold px-3 py-1 rounded-full">●●●</span>
                                </div>
                                <div class="h-6 bg-gray-300 rounded mb-3"></div>
                                <div class="h-4 bg-gray-200 rounded mb-2"></div>
                                <div class="h-4 bg-gray-200 rounded mb-4 w-3/4"></div>
                                <div class="space-y-3 mb-6">
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                </div>
                                <div class="h-10 bg-gray-300 rounded-xl"></div>
                            </div>

                            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="w-16 h-16 bg-gray-300 rounded-2xl"></div>
                                    <span
                                        class="bg-gray-200 text-gray-500 text-xs font-semibold px-3 py-1 rounded-full">●●●</span>
                                </div>
                                <div class="h-6 bg-gray-300 rounded mb-3"></div>
                                <div class="h-4 bg-gray-200 rounded mb-2"></div>
                                <div class="h-4 bg-gray-200 rounded mb-4 w-3/4"></div>
                                <div class="space-y-3 mb-6">
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                    <div class="h-4 bg-gray-200 rounded"></div>
                                </div>
                                <div class="h-10 bg-gray-300 rounded-xl"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Message de déverrouillage -->
                    <div class="absolute inset-0 flex items-center justify-center z-20">
                        <div class="bg-white rounded-3xl p-8 shadow-2xl border border-gray-200 text-center max-w-md mx-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Contenu Réservé</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Connectez-vous ou créez un compte gratuit pour accéder à nos offres d'emploi exclusives et
                                découvrir les opportunités de carrière disponibles.
                            </p>
                            <div class="space-y-3">
                                <a href="{{ route('login') }}"
                                    class="block w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 px-6 rounded-xl font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                                    Se connecter
                                </a>
                                <a href="{{ route('register') }}"
                                    class="block w-full border-2 border-blue-600 text-blue-600 py-3 px-6 rounded-xl font-semibold hover:bg-blue-600 hover:text-white transition-all duration-200">
                                    Créer un compte gratuit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </section>

    <!-- JavaScript pour les détails des offres -->
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
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Get in Touch</h2>
                        <p class="text-gray-600 mb-8">We'd love to hear from you. Fill out the form and we'll get back
                            to you shortly.</p>

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
                                        class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('first_name') border-red-300 bg-red-50 @enderror">
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
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('email') border-red-300 bg-red-50 @enderror">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700">Sujet</label>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                    class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('subject') border-red-300 bg-red-50 @enderror">
                                @error('subject')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea id="message" name="message" rows="4"
                                    class="mt-1 block w-full px-4 py-3 bg-gray-100 border-transparent rounded-lg focus:ring-blue-500 focus:border-blue-500 focus:bg-white transition @error('message') border-red-300 bg-red-50 @enderror">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Envoyer le Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Info Section -->
                    <div
                        class="relative bg-gradient-to-br from-blue-600 to-purple-700 p-8 md:p-12 text-white flex flex-col justify-center">
                        <!-- Background decorative shapes -->
                        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-blue-500 rounded-full opacity-30">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-purple-500 rounded-full opacity-30">
                        </div>

                        <div class="relative z-10">
                            <h2 class="text-4xl font-extrabold mb-4">Contact Information</h2>
                            <p class="text-blue-200 mb-8">
                                Have a question or want to work together? Feel free to reach out to us.
                            </p>
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <i class="fas fa-phone-alt w-6 h-6 mr-4 text-blue-300"></i>
                                    <span>+1 (555) 123-4567</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-envelope w-6 h-6 mr-4 text-blue-300"></i>
                                    <span>contact@example.com</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt w-6 h-6 mr-4 text-blue-300"></i>
                                    <span>123 Design St, Creativity City</span>
                                </div>
                            </div>
                            <div class="mt-10 flex space-x-6">
                                <a href="#" class="text-blue-200 hover:text-white transition"><i
                                        class="fab fa-twitter fa-lg"></i></a>
                                <a href="#" class="text-blue-200 hover:text-white transition"><i
                                        class="fab fa-linkedin-in fa-lg"></i></a>
                                <a href="#" class="text-blue-200 hover:text-white transition"><i
                                        class="fab fa-github fa-lg"></i></a>
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

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-2 mb-6">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">2Acall</span>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Votre partenaire de confiance pour tous vos besoins en centre d'appel.
                        Excellence, innovation et service client au cœur de nos priorités.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center hover:bg-blue-800 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-900 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-6">Services</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Support Client</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Télémarketing</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Analyse &
                                Reporting</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200">Formation</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-6">Contact</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li>+33 1 23 45 67 89</li>
                        <li>contact@callcenterpro.fr</li>
                        <li>123 Rue de la Technologie<br>75001 Paris, France</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Call Center Pro. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</x-app-layout>