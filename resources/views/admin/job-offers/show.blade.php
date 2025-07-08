@extends('layouts.dashboard')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-6">
        
        <!-- Header minimaliste -->
        <div class="flex justify-between items-start mb-12">
            <div class="flex-1">
                <h1 class="text-4xl font-light text-gray-900 tracking-tight mb-2">{{ $jobOffer->title }}</h1>
                <div class="flex items-center gap-4 text-gray-500">
                    <span>2aCall</span>
                    <span>•</span>
                    <span>{{ $jobOffer->location }}</span>
                    <span>•</span>
                    <div class="flex items-center gap-2">
                        @if($jobOffer->is_active)
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            <span class="text-green-600">Active</span>
                        @else
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                            <span class="text-gray-400">Inactive</span>
                        @endif
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.job-offers.index') }}"
                class="inline-flex items-center px-4 py-2 text-gray-500 hover:text-gray-700 transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                </svg>
                Retour
            </a>
        </div>

        <!-- Informations principales -->
        <div class="bg-white rounded-lg border border-gray-100 overflow-hidden mb-8">
            <div class="p-8">
                <!-- Tags d'information -->
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                        {{ $jobOffer->contract_type }}
                    </span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                        {{ $jobOffer->work_type }}
                    </span>
                    @if($jobOffer->category)
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                            {{ $jobOffer->category }}
                        </span>
                    @endif
                </div>

                <!-- Salaire -->
                @if($jobOffer->salary)
                    <div class="mb-8 pb-8 border-b border-gray-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Rémunération</p>
                                <p class="text-2xl font-light text-gray-900">
                                    {{ number_format($jobOffer->salary, 0, ',', ' ') }}€<span class="text-lg text-gray-500">/mois</span>
                                </p>
                            </div>
                            @if($jobOffer->is_salary_negotiable)
                                <span class="text-sm text-gray-500">Négociable</span>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Description -->
                <div class="mb-8">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Description</h2>
                    <div class="prose prose-gray max-w-none">
                        <div class="whitespace-pre-line text-gray-600 leading-relaxed">{{ $jobOffer->description }}</div>
                    </div>
                </div>

                <!-- Exigences et Avantages -->
                @if(!empty($jobOffer->requirements_list) || !empty($jobOffer->benefits_list))
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- Exigences -->
                        @if(!empty($jobOffer->requirements_list))
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Exigences</h3>
                                <ul class="space-y-2">
                                    @foreach($jobOffer->requirements_list as $requirement)
                                        <li class="flex items-start gap-3 text-gray-600">
                                            <span class="text-gray-300 mt-2">•</span>
                                            <span>{{ $requirement }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Avantages -->
                        @if(!empty($jobOffer->benefits_list))
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Avantages</h3>
                                <ul class="space-y-2">
                                    @foreach($jobOffer->benefits_list as $benefit)
                                        <li class="flex items-start gap-3 text-gray-600">
                                            <span class="text-gray-300 mt-2">•</span>
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

        <!-- Métadonnées -->
        <div class="bg-white rounded-lg border border-gray-100 p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
                <div>
                    <p class="text-gray-500 mb-1">Publié le</p>
                    <p class="text-gray-700">{{ $jobOffer->created_at->format('d/m/Y H:i') }}</p>
                </div>
                
                @if($jobOffer->updated_at && $jobOffer->updated_at->ne($jobOffer->created_at))
                    <div>
                        <p class="text-gray-500 mb-1">Modifié le</p>
                        <p class="text-gray-700">{{ $jobOffer->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                @endif
                
                <div>
                    <p class="text-gray-500 mb-1">ID</p>
                    <p class="text-gray-700">#{{ $jobOffer->id }}</p>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex gap-4">
            <a href="{{ route('admin.job-offers.edit', $jobOffer) }}"
                class="inline-flex items-center px-6 py-3 bg-black text-white font-medium rounded-lg hover:bg-gray-800 transition-colors duration-200">
                Modifier
            </a>
            
            <form action="{{ route('admin.job-offers.destroy', $jobOffer) }}" method="POST"
                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-flex items-center px-6 py-3 border border-red-200 text-red-600 font-medium rounded-lg hover:bg-red-50 hover:border-red-300 transition-colors duration-200">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</div>
@endsection