@extends('layouts.dashboard')

@section('content')
    {{-- Main container with a subtle gradient background --}}
    <div class="space-y-8">
        
        <!-- Header: You provided this, and it's already awesome! -->
        <!-- Refined Header: Wild, but not *too* wild -->
<div class="relative overflow-hidden bg-gradient-to-br from-indigo-700 via-purple-800 to-pink-700 rounded-3xl p-8 text-white shadow-2xl">
    
    <!-- More subtle animated background elements -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute -top-10 -left-10 w-60 h-60 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full opacity-20 filter blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-10 -right-10 w-72 h-72 bg-gradient-to-r from-pink-400 to-orange-500 rounded-full opacity-20 filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <!-- Shimmer effect -->
    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -skew-x-12 animate-shimmer"></div>
    
    <div class="relative z-10 flex items-center justify-between">
        <div class="flex items-center space-x-5">
            <!-- New, clean briefcase icon -->
            <div class="relative">
                <div class="w-14 h-14 bg-gradient-to-br from-white/20 to-white/10 backdrop-blur-sm border border-white/20 rounded-2xl flex items-center justify-center shadow-lg transform group-hover:rotate-6 transition-transform duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <!-- Subtle pulsing ring -->
                <div class="absolute inset-0 w-14 h-14 border-2 border-white/20 rounded-2xl animate-ping opacity-50"></div>
            </div>
            
            <div>
                <h1 class="text-4xl font-black mb-1 bg-gradient-to-r from-white via-cyan-100 to-white bg-clip-text text-transparent drop-shadow-sm">
                    Offres d'emploi
                </h1>
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                    <p class="text-cyan-100 font-medium">
                        {{ $jobOffers->total() }} {{ $jobOffers->total() > 1 ? 'offres' : 'offre' }} disponible{{ $jobOffers->total() > 1 ? 's' : '' }}
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Simplified but still awesome CTA Button -->
        <div class="relative group">
            <a href="{{ route('admin.job-offers.create') }}"
               class="relative bg-white/90 text-gray-900 px-7 py-4 rounded-xl font-bold hover:bg-white transition-all duration-300 hover:scale-105 flex items-center shadow-xl hover:shadow-2xl overflow-hidden backdrop-blur-sm">
                
                <div class="relative z-10 flex items-center">
                    <div class="w-6 h-6 mr-3 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center group-hover:rotate-180 transition-transform duration-500">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <span class="bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent font-black">
                        Nouvelle offre
                    </span>
                </div>
                
                <!-- Shine Effect -->
                <div class="absolute inset-0 -top-1 -bottom-1 bg-gradient-to-r from-transparent via-white/50 to-transparent -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
            </a>
            
            <!-- Subtle Glow Effect -->
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-xl blur-lg opacity-30 group-hover:opacity-50 transition-opacity duration-300 -z-10"></div>
        </div>
    </div>
    
    <!-- Bottom Accent Line -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-400 via-purple-500 to-pink-500 opacity-70"></div>
</div>

<!-- Required CSS for animations (if not already present) -->
<style>
    @keyframes shimmer {
        0% { transform: translateX(-100%) skewX(-12deg); }
        100% { transform: translateX(200%) skewX(-12deg); }
    }
    
    .animate-shimmer {
        animation: shimmer 4s infinite linear;
    }
</style>
        <!-- Awesome Job Offers List -->
        <div class="space-y-4">
            @forelse($jobOffers as $offer)
                <a href="{{ route('admin.job-offers.show', $offer) }}"
                   class="job-offer-card group block bg-white/60 hover:bg-white/90 backdrop-blur-xl border border-gray-200/80 hover:border-blue-300 rounded-2xl p-6 transition-all duration-300 hover:shadow-2xl hover:shadow-gray-300/50 relative overflow-hidden">
                    
                    {{-- Animated gradient border on hover --}}
                    <div class="absolute inset-0 rounded-2xl border-2 border-transparent group-hover:border-blue-400 transition-all duration-300 pointer-events-none -z-10"></div>
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-400 to-purple-400 opacity-0 group-hover:opacity-10 transition-all duration-300 pointer-events-none -z-10"></div>

                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            {{-- Title and Status Badge --}}
                            <div class="flex items-center gap-4 mb-3">
                                <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                                    {{ $offer->title }}
                                </h3>
                                @if($offer->is_active)
                                    <span class="flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200/80">
                                        <div class="relative flex h-2 w-2 mr-2">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                        </div>
                                        Active
                                    </span>
                                @else
                                    <span class="flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200/80">
                                        <div class="w-2 h-2 bg-gray-400 rounded-full mr-2"></div>
                                        Inactive
                                    </span>
                                @endif
                            </div>
                            
                            {{-- Essential Info with Icons --}}
                            <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-gray-600 mb-4">
                                <div class="flex items-center gap-1.5"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg> {{ $offer->location }}</div>
                                <div class="flex items-center gap-1.5"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg> {{ $offer->contract_type }}</div>
                                <div class="flex items-center gap-1.5"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg> {{ $offer->work_type }}</div>
                                @if($offer->salary)
                                    <div class="flex items-center gap-1.5 font-medium text-gray-800"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/></svg> {{ number_format($offer->salary, 0, ',', ' ') }}€</div>
                                @endif
                            </div>
                            
                            {{-- Description --}}
                            <p class="text-gray-600 line-clamp-2 leading-relaxed max-w-4xl">
                                {{ $offer->description }}
                            </p>
                        </div>
                        
                        {{-- Right section with Date, Applications, and Arrow --}}
                        <div class="text-right ml-8 flex-shrink-0 flex flex-col items-end">
                            <div class="text-sm text-gray-500 mb-3">
                                {{ $offer->created_at->diffForHumans() }}
                            </div>
                            @if($offer->applications_count > 0)
                                <div class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium bg-gradient-to-br from-blue-500 to-purple-600 text-white shadow-md mb-3">
                                    {{ $offer->applications_count }} candidature{{ $offer->applications_count > 1 ? 's' : '' }}
                                </div>
                            @endif
                            <div class="mt-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="w-10 h-10 bg-gray-100 group-hover:bg-blue-500 rounded-full flex items-center justify-center transition-all duration-300 transform group-hover:scale-110">
                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                {{-- Awesome Empty State --}}
                <div class="text-center py-20 px-6 bg-white/60 backdrop-blur-xl border border-gray-200/80 rounded-2xl relative overflow-hidden">
                    <div class="absolute -top-16 -left-16 w-72 h-72 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-20 filter blur-3xl"></div>
                    <div class="absolute -bottom-16 -right-16 w-72 h-72 bg-gradient-to-br from-pink-200 to-yellow-200 rounded-full opacity-20 filter blur-3xl"></div>
                    
                    <div class="relative z-10">
                        <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-8 shadow-lg border border-gray-200/80 transform -rotate-12">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Aucune offre d'emploi pour le moment</h3>
                        <p class="text-gray-600 mb-8 max-w-md mx-auto">Créez votre première offre pour commencer à attirer des talents. C'est simple et rapide !</p>
                        
                        {{-- Button matching the header style --}}
                        <div class="inline-block relative group">
                             <a href="{{ route('admin.job-offers.create') }}" class="relative bg-gradient-to-r from-gray-800 to-black text-white px-8 py-4 rounded-2xl font-bold hover:from-gray-900 hover:to-black transition-all duration-300 hover:scale-105 flex items-center shadow-xl hover:shadow-2xl overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="relative z-10 flex items-center">
                                    <div class="w-6 h-6 mr-3 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center group-hover:rotate-180 transition-transform duration-500">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                                    </div>
                                    <span class="font-black">Créer une offre</span>
                                </div>
                            </a>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition-opacity duration-300 -z-10"></div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Awesome Pagination -->
        @if($jobOffers->hasPages())
            <div class="flex justify-center pt-4">
                <div class="bg-white/60 backdrop-blur-xl rounded-2xl border border-gray-200/80 px-4 py-2 shadow-lg shadow-gray-300/30">
                    {{ $jobOffers->links() }}
                </div>
            </div>
        @endif
    </div>

    {{-- Required CSS for animations and styles --}}
    <style>
        /* Header animations (already provided) */
        @keyframes shimmer { 0% { transform: translateX(-100%) skewX(-12deg); } 100% { transform: translateX(200%) skewX(-12deg); } }
        .animate-shimmer { animation: shimmer 3s infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px) scale(1); } 50% { transform: translateY(-10px) scale(1.05); } }
        .animate-bounce { animation: float 3s ease-in-out infinite; }

        /* Description line clamp */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Awesome Pagination Styles */
        .pagination {
            display: flex;
            gap: 0.5rem;
            margin: 0;
            align-items: center;
        }

        .pagination .page-link,
        .pagination .page-item span { /* Targets '...' separator */
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border: none;
            background: none;
            color: #4b5563;
            text-decoration: none;
            border-radius: 0.75rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 600;
        }

        .pagination .page-link:hover {
            color: #1e40af;
            background-color: rgba(255, 255, 255, 0.8);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .pagination .page-item.active .page-link {
            background-image: linear-gradient(to right, #4f46e5, #a855f7);
            color: white;
            box-shadow: 0 5px 15px rgba(124, 58, 237, 0.3);
            transform: translateY(-2px);
        }

        .pagination .page-item.disabled .page-link,
        .pagination .page-item.disabled span {
            color: #d1d5db;
            pointer-events: none;
        }

        .pagination .page-link svg {
            width: 1rem;
            height: 1rem;
        }
    </style>
@endsection