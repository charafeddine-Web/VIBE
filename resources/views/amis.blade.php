<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Amis') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">🔗 Demandes d'Amitié</h1>

        <!-- 🔹 Demandes Envoyées -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-3">📤 Demandes Envoyées</h2>
            @if($demandesEnvoyees->isEmpty())
                <p class="text-gray-500 text-center">Aucune demande envoyée.</p>
            @else
                <ul class="space-y-4">
                    @foreach($demandesEnvoyees as $demande)
                        <li class="flex items-center justify-between bg-white p-4 rounded-lg shadow-md border border-gray-200 transition hover:shadow-lg">
                            <div class="flex items-center space-x-3">
                                <img src="https://i.pravatar.cc/50?u={{ $demande->receveur->email }}" class="w-10 h-10 rounded-full">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">{{ $demande->receveur->pseudo }}</h3>
                                    <p class="text-sm text-gray-600">{{ $demande->receveur->email }}</p>
                                </div>
                            </div>
                            <span class="text-sm bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full">⏳ En attente</span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- 🔹 Demandes Reçues -->
        <div>
            <h2 class="text-xl font-semibold text-gray-700 mb-3">📥 Demandes Reçues</h2>
            @if($demandesRecues->isEmpty())
                <p class="text-gray-500 text-center">Aucune demande reçue.</p>
            @else
                <ul class="space-y-4">
                    @foreach($demandesRecues as $demande)
                        <li class="flex items-center justify-between bg-white p-4 rounded-lg shadow-md border border-gray-200 transition hover:shadow-lg">
                            <div class="flex items-center space-x-3">
                                <img src="https://i.pravatar.cc/50?u={{ $demande->demandeur->email }}" class="w-10 h-10 rounded-full">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">{{ $demande->demandeur->pseudo }}</h3>
                                    <p class="text-sm text-gray-600">{{ $demande->demandeur->email }}</p>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button wire:click="accepter({{ $demande->id }})" class="bg-green-500 text-white px-4 py-2 rounded-lg transition hover:bg-green-600">
                                    ✅ Accepter
                                </button>
                                <button wire:click="refuser({{ $demande->id }})" class="bg-red-500 text-white px-4 py-2 rounded-lg transition hover:bg-red-600">
                                    ❌ Refuser
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

</x-app-layout>
