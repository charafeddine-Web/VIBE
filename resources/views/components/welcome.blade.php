<div class="p-8 bg-gradient-to-r from-blue-500 to-indigo-600 text-black rounded-lg shadow-lg ">
    <div class="flex justify-between items-center flex-wrap">
        <!-- Message de bienvenue -->
        <h1 class="text-3xl font-semibold mt-2 ml-4     ">
            Welcome to your <span class="text-yellow-300">VIBE</span> application! 🚀
        </h1>
        <!-- Affichage des erreurs -->
        <x-validation-errors class="mb-4" />
{{--        <x-validation-success class="mb-4" />--}}
    </div>

    <!-- Formulaire de recherche -->
    <form method="GET" action="{{ route('Search') }}" class="mt-6 flex flex-col sm:flex-row gap-4  ">
        @csrf
        <div class="flex justify-between items-center gap-4 ml-4 mr-4">
            <div class="relative w-full sm:w-2/3">
                <x-input
                        id="query"
                        class="w-full p-3 rounded-lg text-gray-900 shadow-md focus:ring-2 focus:ring-yellow-400"
                        type="text"
                        name="query"
                        placeholder="Rechercher quelque chose..."
                        value="{{ request('query') }}"
                        required
                        autofocus
                        autocomplete="query"
                />
            </div>
            <x-button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-all">
                🔎 Search
            </x-button>
        </div>
    </form>
</div>
