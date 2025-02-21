<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-br from-black via-gray-900 to-indigo-900 -mx-4 px-4 py-8 relative overflow-hidden">
            <div class="absolute inset-0 bg-grid-white/10 bg-[size:20px_20px]"></div>
            <div class="absolute h-32 w-32 rounded-full bg-indigo-600/30 blur-3xl -top-10 -left-10"></div>
            <div class="absolute h-32 w-32 rounded-full bg-indigo-800/30 blur-3xl -bottom-10 -right-10"></div>

            <div class="flex items-center justify-between relative z-10">
                <h2 class="text-3xl font-black text-black">
                    👥 {{ __('Amis acceptés') }}
                </h2>
                <form>
                    <button type="submit"
                            class="group px-6 py-3 text-sm font-bold text-white  bg-gray-800 rounded-2xl
                                   hover:bg-gray-700 transition-all duration-300 hover:scale-105 hover:rotate-1
                                   border border-white/30 shadow-xl hover:shadow-indigo-500/20">
                        <span class="group-hover:animate-spin inline-block">🔄</span> Actualiser
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto px-4 py-8">
        <!-- Liste des amis acceptés -->
        <div class="bg-gray-900 p-4 rounded-xl shadow-lg">
            <h3 class="text-xl font-semibold text-white mb-4 py-2">📋 Liste des amis</h3>

            <div class="divide-y divide-gray-800">
                @foreach($amis as $ami)
                    <div class="flex items-center justify-between py-3 px-4 hover:bg-gray-800 rounded-lg transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <!-- Avatar avec statut -->
                            <div class="relative">
                                <img src="{{ $ami->profile_photo_url ?? 'https://via.placeholder.com/50' }}"
                                     alt="Avatar" class="w-12 h-12 rounded-full border-2 border-indigo-500 shadow-md">
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-gray-900 rounded-full"></span>
                            </div>

                            <!-- Nom et pseudo -->
                            <div>
                                <span class="text-white font-semibold text-lg">{{ $ami->pseudo }}</span>
                                <p class="text-gray-400 text-sm">{{ $ami->nom }} {{ $ami->prenom }}</p>
                            </div>
                        </div>

                        <!-- Bouton de messagerie -->
                        <a href=""
                           class="text-indigo-400 hover:text-indigo-500 transition-all duration-300">
                            <i class="fas fa-comments text-2xl"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
