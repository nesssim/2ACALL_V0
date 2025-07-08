@extends('layouts.dashboard')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header with progress -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center gap-3 bg-white rounded-full px-6 py-3 shadow-lg mb-4">
                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">✨</span>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800">Créer une nouvelle offre</h1>
                </div>
                <p class="text-gray-600">Remplissez les informations ci-dessous pour attirer les meilleurs talents</p>
            </div>

            <!-- Error Display -->
            @if ($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-400 p-4 rounded-lg">
                    <div class="flex">
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Veuillez corriger les erreurs suivantes :</h3>
                            <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('admin.job-offers.store') }}" method="POST" class="space-y-8" id="jobForm">
                @csrf

                <!-- Section 1: Informations de base -->
                <div class="bg-white rounded-2xl shadow-lg p-8 transform transition-all duration-300 hover:shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                            <span class="text-blue-600 font-bold">1</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Informations de base</h2>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Titre -->
                        <div class="lg:col-span-2">
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                📝 Titre du poste *
                            </label>
                            <input type="text" name="title" id="title"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-lg"
                                value="{{ old('title') }}" placeholder="Ex: Développeur Full Stack Senior">
                            <p class="mt-1 text-xs text-gray-500">Un titre accrocheur qui décrit clairement le poste</p>
                        </div>

                        <!-- Lieu -->
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-2">
                                📍 Lieu de travail *
                            </label>
                            <input type="text" name="location" id="location"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                value="{{ old('location') }}" placeholder="Paris, Lyon, Remote...">
                        </div>

                        <!-- Catégorie -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                                🏷️ Catégorie
                            </label>
                            <select name="category" id="category"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                <option value="">Sélectionnez une catégorie</option>
                                <option value="Informatique" {{ old('category') == 'Informatique' ? 'selected' : '' }}>💻
                                    Informatique</option>
                                <option value="Commercial" {{ old('category') == 'Commercial' ? 'selected' : '' }}>💼
                                    Commercial</option>
                                <option value="Marketing" {{ old('category') == 'Marketing' ? 'selected' : '' }}>📈 Marketing
                                </option>
                                <option value="RH" {{ old('category') == 'RH' ? 'selected' : '' }}>👥 Ressources Humaines
                                </option>
                                <option value="Finance" {{ old('category') == 'Finance' ? 'selected' : '' }}>💰 Finance
                                </option>
                                <option value="Design" {{ old('category') == 'Design' ? 'selected' : '' }}>🎨 Design</option>
                                <option value="Autre" {{ old('category') == 'Autre' ? 'selected' : '' }}>📦 Autre</option>
                            </select>
                        </div>

                        <!-- Type de contrat -->
                        <div>
                            <label for="contract_type" class="block text-sm font-medium text-gray-700 mb-2">
                                📄 Type de contrat *
                            </label>
                            <select name="contract_type" id="contract_type"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                <option value="">Choisissez un type</option>
                                <option value="CDI" {{ old('contract_type') == 'CDI' ? 'selected' : '' }}>📋 CDI</option>
                                <option value="CDD" {{ old('contract_type') == 'CDD' ? 'selected' : '' }}>📅 CDD</option>
                                <option value="Stage" {{ old('contract_type') == 'Stage' ? 'selected' : '' }}>🎓 Stage
                                </option>
                                <option value="Freelance" {{ old('contract_type') == 'Freelance' ? 'selected' : '' }}>💻
                                    Freelance</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Conditions de travail -->
                <div class="bg-white rounded-2xl shadow-lg p-8 transform transition-all duration-300 hover:shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                            <span class="text-green-600 font-bold">2</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Conditions de travail</h2>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Type de travail -->
                        <div>
                            <label for="work_type" class="block text-sm font-medium text-gray-700 mb-2">
                                💼 Modalité de travail *
                            </label>
                            <div class="grid grid-cols-1 gap-3">
                                <label
                                    class="flex items-center p-3 border border-gray-300 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors {{ old('work_type') == 'Temps plein' ? 'bg-blue-50 border-blue-500' : '' }}">
                                    <input type="radio" name="work_type" value="Temps plein" class="sr-only" {{ old('work_type') == 'Temps plein' ? 'checked' : '' }}>
                                    <span class="text-lg mr-3">⏰</span>
                                    <span class="font-medium">Temps plein</span>
                                </label>
                                <label
                                    class="flex items-center p-3 border border-gray-300 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors {{ old('work_type') == 'Temps partiel' ? 'bg-blue-50 border-blue-500' : '' }}">
                                    <input type="radio" name="work_type" value="Temps partiel" class="sr-only" {{ old('work_type') == 'Temps partiel' ? 'checked' : '' }}>
                                    <span class="text-lg mr-3">⏳</span>
                                    <span class="font-medium">Temps partiel</span>
                                </label>
                                <label
                                    class="flex items-center p-3 border border-gray-300 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors {{ old('work_type') == 'Remote' ? 'bg-blue-50 border-blue-500' : '' }}">
                                    <input type="radio" name="work_type" value="Remote" class="sr-only" {{ old('work_type') == 'Remote' ? 'checked' : '' }}>
                                    <span class="text-lg mr-3">🏠</span>
                                    <span class="font-medium">Télétravail</span>
                                </label>
                            </div>
                        </div>

                        <!-- Salaire -->
                        <div>
                            <label for="salary" class="block text-sm font-medium text-gray-700 mb-2">
                                💶 Salaire (€/mois)
                            </label>
                            <div class="relative">
                                <input type="number" name="salary" id="salary" step="100"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 pr-12"
                                    value="{{ old('salary') }}" placeholder="3500">
                                <span class="absolute right-4 top-3 text-gray-400">€</span>
                            </div>

                            <div class="mt-3">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" name="is_salary_negotiable" id="is_salary_negotiable" value="1"
                                        class="w-5 h-5 text-blue-600 border-2 border-gray-300 rounded focus:ring-blue-500 transition-all duration-200"
                                        {{ old('is_salary_negotiable') ? 'checked' : '' }}>
                                    <span class="ml-3 text-sm font-medium text-gray-700">💬 Salaire négociable</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Description et détails -->
                <div class="bg-white rounded-2xl shadow-lg p-8 transform transition-all duration-300 hover:shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                            <span class="text-purple-600 font-bold">3</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Description du poste</h2>
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            📝 Description *
                        </label>
                        <textarea name="description" id="description" rows="6"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
                            placeholder="Décrivez le poste, les missions principales, l'équipe, l'environnement de travail...">{{ old('description') }}</textarea>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">Soyez précis et attractif pour donner envie aux candidats</p>
                            <span class="text-xs text-gray-400" id="descriptionCount">0 caractères</span>
                        </div>
                    </div>

                    <!-- Exigences -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <label for="requirements" class="block text-sm font-medium text-gray-700 mb-2">
                                📋 Exigences et compétences
                            </label>
                            <textarea name="requirements" id="requirements" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
                                placeholder="Ex:&#10;Bac+3 en informatique&#10;3 ans d'expérience en Laravel&#10;Maîtrise de JavaScript&#10;Anglais courant">{{ old('requirements') }}</textarea>
                            <p class="mt-1 text-xs text-gray-500">Une exigence par ligne</p>
                        </div>

                        <div>
                            <label for="benefits" class="block text-sm font-medium text-gray-700 mb-2">
                                🎁 Avantages
                            </label>
                            <textarea name="benefits" id="benefits" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
                                placeholder="Ex:&#10;Tickets restaurant&#10;Télétravail flexible&#10;Mutuelle prise en charge&#10;13ème mois&#10;Formation continue">{{ old('benefits') }}</textarea>
                            <p class="mt-1 text-xs text-gray-500">Un avantage par ligne</p>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Finalisation -->
                <div class="bg-white rounded-2xl shadow-lg p-8 transform transition-all duration-300 hover:shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <span class="text-yellow-600 font-bold">4</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Finalisation</h2>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" name="is_active" id="is_active" value="1"
                                    class="w-6 h-6 text-green-600 border-2 border-gray-300 rounded focus:ring-green-500 transition-all duration-200"
                                    {{ old('is_active', true) ? 'checked' : '' }}>
                                <span class="ml-3 text-lg font-medium text-gray-700">✅ Publier cette offre
                                    immédiatement</span>
                            </label>
                            <p class="ml-9 text-sm text-gray-500">L'offre sera visible par les candidats</p>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="flex justify-between items-center gap-4">
                    <a href="{{ route('admin.job-offers.index') }}"
                        class="inline-flex items-center px-6 py-3 border-2 border-gray-300 rounded-xl text-gray-700 font-medium hover:bg-gray-50 transition-all duration-200">
                        ← Annuler
                    </a>

                    <button type="submit"
                        class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-200">
                        <span class="mr-2">🚀</span>
                        Créer l'offre
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Character counter for description
            const description = document.getElementById('description');
            const descriptionCount = document.getElementById('descriptionCount');

            description.addEventListener('input', function () {
                descriptionCount.textContent = this.value.length + ' caractères';
            });

            // Radio button styling
            const radioInputs = document.querySelectorAll('input[type="radio"]');
            radioInputs.forEach(input => {
                input.addEventListener('change', function () {
                    // Remove active styling from all labels
                    this.closest('div').querySelectorAll('label').forEach(label => {
                        label.classList.remove('bg-blue-50', 'border-blue-500');
                        label.classList.add('border-gray-300');
                    });
                    // Add active styling to selected label
                    if (this.checked) {
                        this.closest('label').classList.add('bg-blue-50', 'border-blue-500');
                        this.closest('label').classList.remove('border-gray-300');
                    }
                });
            });

            // Form submission animation
            document.getElementById('jobForm').addEventListener('submit', function () {
                const submitBtn = this.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<span class="mr-2">⏳</span>Création en cours...';
                submitBtn.disabled = true;
            });
        });
    </script>
@endsection