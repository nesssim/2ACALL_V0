<x-guest-layout>
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-white mb-2">Mot de passe oublié ?</h1>
        <p class="text-blue-100">Pas de problème. Entrez votre email et nous vous enverrons un lien de réinitialisation.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-green-300" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-white font-semibold mb-2 block" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <x-text-input id="email"
                    class="w-full pl-10 pr-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-blue-200 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/50 focus:bg-white/30 transition-all duration-200"
                    type="email" name="email" :value="old('email')" required autofocus placeholder="votre@email.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
        </div>

        <!-- Submit Button -->
        <div class="space-y-4">
            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 px-4 rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400/50">
                {{ __('Envoyer le lien de réinitialisation') }}
            </button>

            <!-- Back to Login -->
            <div class="text-center">
                <a href="{{ route('login') }}"
                    class="inline-flex items-center space-x-2 text-blue-200 hover:text-white transition-colors duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span class="text-sm font-medium">Retour à la connexion</span>
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>