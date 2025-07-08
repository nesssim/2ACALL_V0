@extends('layouts.dashboard')

@section('content')
    <div x-data="dashboardData()" class="space-y-8">
        <!-- Header with welcome message -->
        <div class="relative overflow-hidden bg-gradient-to-br from-purple-600 via-blue-600 to-cyan-500 rounded-3xl p-8 text-white">
            <!-- Animated background elements -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-white rounded-full animate-pulse"></div>
                <div class="absolute top-1/2 -right-20 w-60 h-60 bg-gradient-to-r from-pink-300 to-yellow-300 rounded-full animate-bounce" style="animation-duration: 3s;"></div>
                <div class="absolute bottom-0 left-1/3 w-32 h-32 bg-green-300 rounded-full animate-ping" style="animation-duration: 2s;"></div>
            </div>

            <div class="relative z-10">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-black mb-2">
                            Salut, <span class="text-yellow-300">{{ auth()->user()->name ?? 'nesssim' }}</span>! 👋
                        </h1>
                        <p class="text-blue-100 text-lg">
                            Voici ce qui se passe dans ton empire aujourd'hui
                        </p>
                        <div class="flex items-center mt-4 text-sm text-blue-200">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.414-1.414L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <span x-text="currentDateTime"></span>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-32 h-32 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards avec animations folles -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Messages non lus -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl p-6 text-white transform transition-all duration-300 hover:scale-105 hover:rotate-1 cursor-pointer">
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-white bg-opacity-20 rounded-full"></div>
                <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-white bg-opacity-10 rounded-full"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white bg-opacity-20 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        @if($stats['unread_messages'] > 0)
                            <div class="animate-bounce">
                                <span class="bg-yellow-400 text-yellow-900 text-xs font-bold px-2 py-1 rounded-full">URGENT!</span>
                            </div>
                        @endif
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $stats['unread_messages'] }}</div>
                    <div class="text-pink-100 text-sm font-medium">Messages non lus</div>
                    @if($stats['unread_messages'] > 0)
                        <div class="mt-2 text-xs text-pink-200">📨 {{ $stats['unread_messages'] > 1 ? 'Nouveaux messages' : 'Nouveau message' }} en attente!</div>
                    @endif
                </div>
            </div>

            <!-- Messages totaux -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl p-6 text-white transform transition-all duration-300 hover:scale-105 hover:-rotate-1">
                <div class="absolute -top-6 -right-6 w-28 h-28 bg-white bg-opacity-10 rounded-full animate-pulse"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white bg-opacity-20 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <div class="text-xs text-cyan-200 bg-white bg-opacity-20 px-2 py-1 rounded-full">Total</div>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $stats['total_messages'] }}</div>
                    <div class="text-cyan-100 text-sm font-medium">Messages totaux</div>
                    <div class="mt-2 text-xs text-cyan-200">📊 Base de données contact</div>
                </div>
            </div>

            <!-- Offres actives -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-6 text-white transform transition-all duration-300 hover:scale-105 hover:rotate-1">
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-white bg-opacity-10 rounded-full"></div>
                <div class="absolute -top-2 -left-2 w-16 h-16 bg-white bg-opacity-20 rounded-full animate-ping" style="animation-duration: 3s;"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white bg-opacity-20 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2"/>
                            </svg>
                        </div>
                        <div class="animate-pulse bg-green-400 w-3 h-3 rounded-full"></div>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $stats['active_jobs'] }}</div>
                    <div class="text-green-100 text-sm font-medium">Offres actives</div>
                    <div class="mt-2 text-xs text-green-200">🔥 Positions ouvertes</div>
                </div>
            </div>

            <!-- Offres totales -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-6 text-white transform transition-all duration-300 hover:scale-105 hover:-rotate-1">
                <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-yellow-300 to-pink-300 rounded-full opacity-30 animate-bounce" style="animation-duration: 4s;"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white bg-opacity-20 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div class="text-xs text-purple-200 bg-white bg-opacity-20 px-2 py-1 rounded-full">Archive</div>
                    </div>
                    <div class="text-3xl font-black mb-1">{{ $stats['total_jobs'] }}</div>
                    <div class="text-purple-100 text-sm font-medium">Offres totales</div>
                    <div class="mt-2 text-xs text-purple-200">📋 Historique complet</div>
                </div>
            </div>
        </div>

        <!-- Messages récents avec design fou -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-4 border-gray-100">
            <!-- Header avec gradient -->
            <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-black p-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Messages récents</h2>
                            <p class="text-gray-400 text-sm">Dernières communications client</p>
                        </div>
                    </div>
                    <a href="{{ route('admin.contact-messages.index') }}" 
                       class="group relative overflow-hidden bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <span class="relative z-10 flex items-center">
                            Voir tout
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></div>
                    </a>
                </div>
            </div>

            <!-- Table avec style moderne -->
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Contact</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Sujet</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Statut</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-4 text-right text-xs font-bold text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($latestMessages as $msg)
                            <tr class="group hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 transition-all duration-300">
                                <!-- Contact avec avatar -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-{{ ['blue', 'green', 'purple', 'pink', 'yellow'][array_rand(['blue', 'green', 'purple', 'pink', 'yellow'])] }}-400 to-{{ ['blue', 'green', 'purple', 'pink', 'yellow'][array_rand(['blue', 'green', 'purple', 'pink', 'yellow'])] }}-600 flex items-center justify-center">
                                                <span class="text-sm font-medium text-white">
                                                    {{ strtoupper(substr($msg->first_name, 0, 1) . substr($msg->last_name, 0, 1)) }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $msg->first_name }} {{ $msg->last_name }}</div>
                                            <div class="text-sm text-gray-500">{{ $msg->email }}</div>
                                        </div>
                                    </div>
                                </td>

                                <!-- Sujet avec icône -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                        </svg>
                                        <div class="text-sm text-gray-900 max-w-xs truncate">{{ $msg->subject }}</div>
                                    </div>
                                </td>

                                <!-- Statut avec badges animés -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($msg->status === 'nouveau')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-yellow-400 to-orange-500 text-white animate-pulse">
                                            <div class="w-2 h-2 bg-white rounded-full mr-1 animate-ping"></div>
                                            Nouveau
                                        </span>
                                    @elseif($msg->status === 'lu')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-400 to-blue-600 text-white">
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Lu
                                        </span>
                                    @elseif($msg->status === 'traité')
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-400 to-green-600 text-white">
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Traité
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-gray-400 to-gray-600 text-white">
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                            </svg>
                                            Fermé
                                        </span>
                                    @endif
                                </td>

                                <!-- Date avec style -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 font-medium">{{ $msg->created_at->format('d/m/Y') }}</div>
                                    <div class="text-sm text-gray-500">{{ $msg->created_at->format('H:i') }}</div>
                                </td>

                                <!-- Action avec bouton moderne -->
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button @click="openModal({{ $msg->toJson() }})"
                                            class="group relative overflow-hidden bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:scale-105 hover:shadow-lg transform">
                                        <span class="relative z-10 flex items-center">
                                            <svg class="w-4 h-4 mr-1 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                            Voir
                                        </span>
                                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></div>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-12">
                                    <div class="flex flex-col items-center">
                                        <div class="w-24 h-24 bg-gradient-to-r from-gray-200 to-gray-300 rounded-full flex items-center justify-center mb-4">
                                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                            </svg>
                                        </div>
                                        <p class="text-gray-500 text-lg font-medium">Aucun message récent</p>
                                        <p class="text-gray-400 text-sm">Les nouveaux messages apparaîtront ici</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal ultra stylé -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300" 
             x-transition:enter-start="opacity-0" 
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200" 
             x-transition:leave-start="opacity-100" 
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm flex items-center justify-center z-50 p-4" 
             style="display: none;">

            <div @click.away="open = false"
                 x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform scale-95 rotate-3" 
                 x-transition:enter-end="opacity-100 transform scale-100 rotate-0"
                 x-transition:leave="transition ease-in duration-200" 
                 x-transition:leave-start="opacity-100 transform scale-100 rotate-0" 
                 x-transition:leave-end="opacity-0 transform scale-95 rotate-3"
                 class="bg-white rounded-3xl shadow-2xl w-full max-w-2xl max-h-[80vh] overflow-hidden border-4 border-gray-100">

                <!-- Header du modal avec design fou -->
                <div class="bg-gradient-to-r from-purple-600 via-pink-600 to-red-500 p-6 text-white relative overflow-hidden">
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-white bg-opacity-20 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-white bg-opacity-10 rounded-full animate-bounce" style="animation-duration: 3s;"></div>

                    <div class="relative z-10 flex justify-between items-start">
                        <div>
                            <h3 class="text-2xl font-black mb-1">💌 Détails du message</h3>
                            <p class="text-pink-100">Communication client</p>
                        </div>
                        <button @click="open = false"
                                class="group bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full p-2 transition-all duration-300 hover:rotate-90">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Contenu du modal -->
                <template x-if="message">
                    <div class="p-6 overflow-y-auto max-h-[60vh] space-y-6">
                        <!-- Info contact avec style moderne -->
                        <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-4 border-2 border-blue-100">
                            <div class="flex items-center mb-4">
                                <div class="h-14 w-14 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center mr-4 shadow-lg">
                                    <span class="text-xl font-bold text-white" x-text="message.first_name.charAt(0) + message.last_name.charAt(0)"></span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900" x-text="message.first_name + ' ' + message.last_name"></h4>
                                    <p class="text-gray-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                        </svg>
                                        <span x-text="message.email"></span>
                                    </p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div class="bg-white rounded-xl p-3 shadow-sm">
                                    <span class="text-gray-500 block mb-1">📅 Date de réception</span>
                                    <span class="font-bold text-gray-900" x-text="(new Date(message.created_at)).toLocaleDateString('fr-FR', {
                                        year: 'numeric',
                                        month: 'long', 
                                        day: 'numeric',
                                        hour: '2-digit',
                                        minute: '2-digit'
                                    })"></span>
                                </div>
                                <div class="bg-white rounded-xl p-3 shadow-sm">
                                    <span class="text-gray-500 block mb-1">🏷️ Statut</span>
                                    <span x-text="message.status.charAt(0).toUpperCase() + message.status.slice(1)" 
                                          class="inline-flex items-center px-2 py-1 rounded-full text-xs font-bold"
                                          :class="{
                                              'bg-yellow-100 text-yellow-800': message.status === 'nouveau',
                                              'bg-blue-100 text-blue-800': message.status === 'lu',
                                              'bg-green-100 text-green-800': message.status === 'traité',
                                              'bg-gray-100 text-gray-800': message.status === 'fermé'
                                          }">
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Sujet avec style -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-4 border-2 border-green-100">
                            <h5 class="text-sm font-bold text-green-700 uppercase tracking-wider mb-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                </svg>
                                Sujet
                            </h5>
                            <p class="text-lg font-semibold text-gray-900 bg-white rounded-xl p-3 shadow-sm break-words" x-text="message.subject"></p>
                        </div>

                        <!-- Message avec style -->
                        <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl p-4 border-2 border-yellow-100">
                            <h5 class="text-sm font-bold text-orange-700 uppercase tracking-wider mb-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                                Message
                            </h5>
                            <div class="bg-white rounded-xl p-4 shadow-sm">
                                <p class="text-gray-800 leading-relaxed whitespace-pre-wrap break-words" x-text="message.message"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        function dashboardData() {
            return {
                open: false,
                message: null,
                currentDateTime: '',

                init() {
                    this.updateDateTime();
                    setInterval(() => {
                        this.updateDateTime();
                    }, 1000);
                },

                updateDateTime() {
                    const now = new Date();
                    this.currentDateTime = now.toLocaleDateString('fr-FR', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    });
                },

                openModal(msg) {
                    this.message = msg;
                    this.open = true;
                }
            }
        }
    </script>
@endsection