@extends('layouts.dashboard')

@section('content')
    <div class="space-y-8">
        <!-- Header minimaliste avec gradient -->
        <div class="relative overflow-hidden bg-gradient-to-br from-gray-800 via-gray-900 to-black rounded-3xl p-8 text-white">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-1/2 -right-20 w-60 h-60 bg-gradient-to-r from-blue-300 to-purple-300 rounded-full"></div>
            </div>
            
            <div class="relative z-10 flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-black mb-2">Offres d'emploi</h1>
                    <p class="text-gray-300">{{ $jobOffers->total() }} {{ $jobOffers->total() > 1 ? 'offres' : 'offre' }} disponible{{ $jobOffers->total() > 1 ? 's' : '' }}</p>
                </div>
                <a href="{{ route('admin.job-offers.create') }}"
                   class="bg-white text-gray-900 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    Nouvelle offre
                </a>
            </div>
        </div>

        <!-- Liste minimaliste des offres -->
        <div class="space-y-4">
            @forelse($jobOffers as $offer)
                <a href="{{ route('admin.job-offers.show', $offer) }}"
                   class="group block bg-white hover:bg-gray-50 border border-gray-200 hover:border-gray-300 rounded-2xl p-6 transition-all duration-300 hover:shadow-lg">
                    
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">
                                    {{ $offer->title }}
                                </h3>
                                
                                <!-- Status simple -->
                                @if($offer->is_active)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <div class="w-1.5 h-1.5 bg-green-400 rounded-full mr-1"></div>
                                        Active
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                        <div class="w-1.5 h-1.5 bg-gray-400 rounded-full mr-1"></div>
                                        Inactive
                                    </span>
                                @endif
                            </div>
                            
                            <!-- Infos essentielles -->
                            <div class="flex items-center gap-6 text-sm text-gray-600 mb-3">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    {{ $offer->location }}
                                </span>
                                <span>{{ $offer->contract_type }}</span>
                                <span>{{ $offer->work_type }}</span>
                                @if($offer->salary)
                                    <span class="font-medium text-gray-900">{{ number_format($offer->salary, 0, ',', ' ') }}€</span>
                                @endif
                            </div>
                            
                            <!-- Description -->
                            <p class="text-gray-700 line-clamp-2 leading-relaxed">
                                {{ $offer->description }}
                            </p>
                        </div>
                        
                        <!-- Date et candidatures -->
                        <div class="text-right ml-8 flex-shrink-0">
                            <div class="text-sm text-gray-500 mb-1">
                                {{ $offer->created_at->format('d/m/Y') }}
                            </div>
                            @if($offer->applications_count > 0)
                                <div class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700">
                                    {{ $offer->applications_count }} candidature{{ $offer->applications_count > 1 ? 's' : '' }}
                                </div>
                            @endif
                            
                            <!-- Flèche -->
                            <div class="mt-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 ml-auto group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <!-- État vide simple -->
                <div class="text-center py-16">
                    <div class="w-20 h-20 bg-gray-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucune offre d'emploi</h3>
                    <p class="text-gray-600 mb-6">Créez votre première offre pour commencer à recruter.</p>
                    <a href="{{ route('admin.job-offers.create') }}"
                       class="inline-flex items-center px-6 py-3 bg-gray-900 text-white font-medium rounded-xl hover:bg-gray-800 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Créer une offre
                    </a>
                </div>
            @endforelse
        </div>

        <!-- Pagination simple -->
        @if($jobOffers->hasPages())
            <div class="flex justify-center">
                <div class="bg-white rounded-xl border border-gray-200 px-6 py-3">
                    {{ $jobOffers->links() }}
                </div>
            </div>
        @endif
    </div>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Pagination minimaliste */
        .pagination {
            display: flex;
            gap: 0.25rem;
            margin: 0;
            align-items: center;
        }

        .pagination .page-link {
            padding: 0.5rem 0.75rem;
            border: none;
            background: none;
            color: #6b7280;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .pagination .page-link:hover {
            color: #111827;
            background-color: #f3f4f6;
        }

        .pagination .page-item.active .page-link {
            background-color: #111827;
            color: white;
        }

        .pagination .page-item.disabled .page-link {
            color: #d1d5db;
            pointer-events: none;
        }
    </style>
@endsection