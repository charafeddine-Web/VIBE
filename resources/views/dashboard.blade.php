<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                @if(isset($users) && $users->count() > 0)
                    <div class="bg-gray-100 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-8 lg:p-8">
                        @foreach($users as $user)
                            <div class="bg-white p-8 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h2 class="text-lg font-semibold text-gray-900">{{ $user->pseudo }}</h2>
                                    <p class="text-sm text-gray-600">{{ $user->email }}</p>
                                </div>
                                <x-button>
                                    Ajouter en ami
                                </x-button>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-6">
                        {{ $users->links() }}
                    </div>
                @elseif(isset($message))
                    <div class="p-4 text-center text-gray-700">{{ $message }}</div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
