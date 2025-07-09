@extends('layouts.dashboard')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50/30 py-12">
    <div class="max-w-4xl mx-auto px-6">
        
        <!-- Enhanced Header -->
        <div class="flex justify-between items-start mb-12">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-2 h-8 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full"></div>
                    <h1 class="text-4xl font-light text-gray-900 tracking-tight">{{ $jobOffer->title }}</h1>
                </div>
                <div class="flex items-center gap-4 text-gray-500">
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 rounded bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-6a1 1 0 00-1-1H9a1 1 0 00-1 1v6a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="font-medium">2aCall</span>
                    </div>
                    <span class="text-gray-300">•</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>{{ $jobOffer->location }}</span>
                    </div>
                    <span class="text-gray-300">•</span>
                    <div class="flex items-center gap-2">
                        @if($jobOffer->is_active)
                            <div class="relative">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <div class="absolute inset-0 w-2 h-2 bg-green-400 rounded-full animate-ping opacity-75"></div>
                            </div>
                            <span class="text-green-600 font-medium">Active</span>
                        @else
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                            <span class="text-gray-400">Inactive</span>
                        @endif
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.job-offers.index') }}"
                class="group inline-flex items-center px-4 py-2 text-gray-500 hover:text-gray-700 hover:bg-white/60 rounded-lg transition-all duration-200 backdrop-blur-sm border border-white/50">
                <svg class="w-4 h-4 mr-2 transition-transform group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                </svg>
                Retour
            </a>
        </div>

        <!-- Enhanced Main Card -->
        <div class="bg-white/70 backdrop-blur-sm rounded-2xl border border-white/60 shadow-xl shadow-gray-200/50 overflow-hidden mb-8">
            <div class="p-8">
                <!-- Enhanced Tags -->
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="px-4 py-2 bg-gradient-to-r from-blue-50 to-blue-100 text-blue-700 rounded-full text-sm font-medium border border-blue-200/50">
                        {{ $jobOffer->contract_type }}
                    </span>
                    <span class="px-4 py-2 bg-gradient-to-r from-purple-50 to-purple-100 text-purple-700 rounded-full text-sm font-medium border border-purple-200/50">
                        {{ $jobOffer->work_type }}
                    </span>
                    @if($jobOffer->category)
                        <span class="px-4 py-2 bg-gradient-to-r from-gray-50 to-gray-100 text-gray-700 rounded-full text-sm font-medium border border-gray-200/50">
                            {{ $jobOffer->category }}
                        </span>
                    @endif
                </div>

                <!-- Enhanced Salary Section -->
                @if($jobOffer->salary)
                    <div class="mb-8 pb-8 border-b border-gray-100">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Rémunération</p>
                                    <p class="text-3xl font-light text-gray-900">
                                        {{ number_format($jobOffer->salary, 0, ',', ' ') }}€
                                        <span class="text-lg text-gray-500 font-normal">/mois</span>
                                    </p>
                                </div>
                            </div>
                            @if($jobOffer->is_salary_negotiable)
                                <span class="px-3 py-1 bg-amber-50 text-amber-600 rounded-full text-sm font-medium border border-amber-200/50">
                                    Négociable
                                </span>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Enhanced Description -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-xl font-medium text-gray-900">Description du poste</h2>
                    </div>
                    <div class="prose prose-gray max-w-none">
                        <div class="whitespace-pre-line text-gray-600 leading-relaxed text-lg">{{ $jobOffer->description }}</div>
                    </div>
                </div>

                <!-- Enhanced Requirements and Benefits -->
                @if(!empty($jobOffer->requirements_list) || !empty($jobOffer->benefits_list))
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- Enhanced Requirements -->
                        @if(!empty($jobOffer->requirements_list))
                            <div class="bg-red-50/50 rounded-xl p-6 border border-red-100/50">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="w-8 h-8 bg-gradient-to-br from-red-500 to-pink-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-medium text-gray-900">Exigences</h3>
                                </div>
                                <ul class="space-y-3">
                                    @foreach($jobOffer->requirements_list as $requirement)
                                        <li class="flex items-start gap-3 text-gray-600">
                                            <div class="w-1.5 h-1.5 bg-red-400 rounded-full mt-2.5 flex-shrink-0"></div>
                                            <span>{{ $requirement }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Enhanced Benefits -->
                        @if(!empty($jobOffer->benefits_list))
                            <div class="bg-green-50/50 rounded-xl p-6 border border-green-100/50">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-medium text-gray-900">Avantages</h3>
                                </div>
                                <ul class="space-y-3">
                                    @foreach($jobOffer->benefits_list as $benefit)
                                        <li class="flex items-start gap-3 text-gray-600">
                                            <div class="w-1.5 h-1.5 bg-green-400 rounded-full mt-2.5 flex-shrink-0"></div>
                                            <span>{{ $benefit }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>

        <!-- Enhanced Metadata Card -->
        <div class="bg-white/70 backdrop-blur-sm rounded-2xl border border-white/60 shadow-lg shadow-gray-200/30 p-6 mb-8">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-6 h-6 bg-gradient-to-br from-gray-500 to-gray-600 rounded-lg flex items-center justify-center">
                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900">Informations</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
                <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                    <div>
                        <p class="text-gray-500 mb-1">Publié le</p>
                        <p class="text-gray-700 font-medium">{{ $jobOffer->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
                
                @if($jobOffer->updated_at && $jobOffer->updated_at->ne($jobOffer->created_at))
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-amber-400 rounded-full"></div>
                        <div>
                            <p class="text-gray-500 mb-1">Modifié le</p>
                            <p class="text-gray-700 font-medium">{{ $jobOffer->updated_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                @endif
                
                <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                    <div>
                        <p class="text-gray-500 mb-1">Identifiant</p>
                        <p class="text-gray-700 font-medium">#{{ $jobOffer->id }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Action Buttons -->
        <div class="flex gap-4">
            <a href="{{ route('admin.job-offers.edit', $jobOffer) }}"
                class="group inline-flex items-center px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                Modifier l'offre
            </a>
            
            <form action="{{ route('admin.job-offers.destroy', $jobOffer) }}" method="POST"
                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="group inline-flex items-center px-8 py-3 border-2 border-red-200 text-red-600 font-medium rounded-xl hover:bg-red-50 hover:border-red-300 transition-all duration-200 bg-white/80 backdrop-blur-sm">
                    <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1-1H8a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
@endsection