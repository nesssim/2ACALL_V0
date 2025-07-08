<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <!-- Hide navbar with CSS -->
    <style>
        /* Hide the main navigation bar */
        nav,
        .navigation,
        .navbar,
        header nav,
        .main-nav,
        [role="navigation"] {
            display: none !important;
        }

        /* Also hide any potential navigation wrapper */
        .nav-wrapper,
        .navigation-wrapper {
            display: none !important;
        }

        /* Adjust body padding if needed */
        body {
            padding-top: 0 !important;
        }

        /* Remove any fixed positioning space */
        .main-content,
        main {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <button onclick="goBack()"
                class="inline-flex items-center mb-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-xl font-semibold shadow hover:from-blue-700 hover:to-purple-700 transition duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Retour à la page précédente
            </button>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            // Check if there's a previous page in the browser history
            if (window.history.length > 1) {
                window.history.back();
            } else {
                // Fallback to home page if no history
                window.location.href = "{{ route('home') }}";
            }
        }
    </script>
</x-app-layout>