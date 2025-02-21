<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-br from-black via-gray-900 to-indigo-900 -mx-4 px-4 py-8 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute inset-0 bg-grid-white/10 bg-[size:20px_20px]"></div>
            <div class="absolute h-32 w-32 rounded-full bg-indigo-600/30 blur-3xl -top-10 -left-10"></div>
            <div class="absolute h-32 w-32 rounded-full bg-indigo-800/30 blur-3xl -bottom-10 -right-10"></div>

            <div class="flex items-center justify-between relative z-10">
                <h2 class="text-3xl font-black text-black [text-shadow:_2px_2px_0_rgb(0_0_0_/_20%)]">
                    👥 {{ __('Liste des Amis') }}
                </h2>
                <form>
                    <button type="submit"
                            class="group px-6 py-3 text-sm font-bold text-white bg-gray-800 rounded-2xl
                                   hover:bg-gray-700 transition-all duration-300 hover:scale-105 hover:rotate-1
                                   border border-white/30 shadow-xl hover:shadow-indigo-500/20">
                        <span class="group-hover:animate-spin inline-block">🔄</span> Actualiser
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="max-w-5xl mx-auto px-4 py-8">
        <!-- Liste des amis -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($amis as $ami)
                <div class="flex items-center justify-between bg-gray-900 p-4 rounded-xl shadow-lg hover:scale-105 transition-all duration-300">
                    <!-- Avatar & Infos -->
                    <div class="flex items-center gap-4">
                        <img src="{{ $ami->profile_photo_url ?? 'https://via.placeholder.com/50' }}" alt="Avatar"
                             class="w-12 h-12 rounded-full border-2 border-indigo-500 shadow-md">
                        <div>
                            <span class="text-black font-semibold text-lg">{{ $ami->pseudo }}</span>
                            <p class="text-gray-600 text-sm">{{ $ami->nom }} {{ $ami->prenom }}</p>
                        </div>
                    </div>

                    <!-- Icône de messagerie -->
                    <a href="{{ route('messages', $ami->id) }}"
                       class="text-indigo-400 hover:text-indigo-500 transition-all duration-300">
                        <i class="fas fa-comment-alt text-xl"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
