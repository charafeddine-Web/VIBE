<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-900 to-indigo-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black/40 backdrop-blur-sm overflow-hidden shadow-2xl sm:rounded-xl border border-indigo-500/20 animate-fade-in">
                <!-- En-tête stylisé -->
                <div class="p-6 border-b border-indigo-500/20">
                    <h1 class="text-2xl font-bold text-black flex items-center gap-3">
                        <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Users
                    </h1>
                </div>
                <x-welcome />
                @if(isset($users) && $users->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                        @foreach($users as $user)
                            <div class="group bg-black/40 rounded-xl border border-indigo-500/20 p-6 transform transition-all duration-300 hover:scale-[1.02] hover:bg-indigo-900/40 hover:border-indigo-400/40">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="relative">
                                            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 animate-pulse">
                                                <img src="{{ $user->profile_photo_url }}"
                                                     class="w-12 h-12 rounded-2xl object-cover transition-all duration-300
                                                            group-hover/item:rounded-full group-hover/item:rotate-2">
                                            </div>
                                        </div>
                                        <!-- Informations utilisateur -->
                                        <div>
                                            <h2 class="text-lg font-semibold text-black group-hover:text-indigo-300 transition-colors">
                                                {{ $user->pseudo }}
                                            </h2>
                                            <p class="text-sm text-gray-400 group-hover:text-indigo-200 transition-colors">
                                                {{ $user->email }}
                                            </p>
                                        </div>
                                    </div>

                                    <form method="POST" action="{{ route('envoyerDemandeAmitie', $user->id) }}">
                                        @csrf
                                        <button type="submit"
                                                class="relative px-4 py-2 rounded-lg bg-indigo-600 text-black font-medium
                                                   transform transition-all duration-300
                                                   hover:bg-indigo-500 hover:shadow-lg hover:shadow-indigo-500/50
                                                   active:scale-95 group overflow-hidden">
                                        <span class="relative z-10 flex items-center gap-2">
                                            <svg class="w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>

                                        </span>
                                            <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-6 p-6 border-t border-indigo-500/20">
                        {{ $users->links() }}
                    </div>
                @elseif(isset($message))
                    <div class="p-12 text-center">
                        <div class="inline-block p-6 rounded-lg bg-black/40 border border-indigo-500/20">
                            <svg class="w-16 h-16 text-indigo-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-xl text-gray-300">{{ $message }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    </div>
</x-app-layout>
