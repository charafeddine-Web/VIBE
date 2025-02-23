<x-app-layout>
    <x-slot name="header">
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-purple-600 to-indigo-600 p-8">
            <div class="absolute inset-0 bg-grid-white/10 bg-[size:20px_20px]"></div>
            <h2 class="relative font-bold text-3xl text-white/90 backdrop-blur-sm inline-block">
                {{ __('Dashboard') }}
                <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-white/50 to-transparent"></div>
            </h2>
        </div>
    </x-slot>

    <div class="py-12 min-h-screen bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-indigo-900 via-gray-900 to-black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="backdrop-blur-xl bg-white/5 overflow-hidden shadow-[0_0_50px_-12px_rgba(79,70,229,0.25)] sm:rounded-2xl border border-white/10">
                <!-- Stylized Header with Animated Gradient -->
                <div class="p-8 border-b border-white/10 bg-gradient-to-r from-purple-900/30 to-indigo-900/30">
                    <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-400 flex items-center gap-4">
                        <svg class="w-10 h-10 text-indigo-400 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Community Members
                    </h1>
                </div>

                <x-welcome />

                @if(isset($users) && $users->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                        @foreach($users as $user)
                            <div class="group relative">
                                <!-- Glow Effect -->
                                <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-2xl blur-lg opacity-0 group-hover:opacity-50 transition duration-500"></div>

                                <div class="relative bg-gray-900 rounded-xl border border-white/10 p-6 transition-all duration-300 hover:border-white/20 hover:bg-gray-800">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4">
                                            <div class="relative group/avatar">
                                                <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full blur opacity-30 group-hover/avatar:opacity-60 transition duration-500"></div>
                                                <div class="relative w-16 h-16 rounded-full overflow-hidden ring-2 ring-white/20 transform transition-all duration-300 group-hover:ring-white/40 group-hover:scale-105">
                                                    <img src="{{ $user->profile_photo_url }}"
                                                         class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                                                </div>
                                            </div>

                                            <div class="space-y-1">
                                                <h2 class="text-xl font-bold text-white group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:to-indigo-400 transition-all duration-300">
                                                    {{ $user->pseudo }}
                                                </h2>
                                                <p class="text-sm text-gray-400 group-hover:text-gray-300 transition-colors">
                                                    {{ $user->email }}
                                                </p>
                                            </div>
                                        </div>

                                        <form method="POST" action="{{ route('envoyerDemandeAmitie', $user->id) }}">
                                            @csrf
                                            <button type="submit"
                                                    class="relative px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-medium
                                                           transform transition-all duration-300 hover:scale-105 active:scale-95
                                                           hover:shadow-lg hover:shadow-purple-500/25 group/btn overflow-hidden">
                                                <span class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500"></span>
                                                <span class="relative flex items-center gap-2">
                                                    <svg class="w-5 h-5 transform transition-transform duration-500 group-hover/btn:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    <span class="opacity-0 w-0 group-hover/btn:w-auto group-hover/btn:opacity-100 transition-all duration-300">Connect</span>
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6 p-8 border-t border-white/10 bg-gradient-to-r from-purple-900/30 to-indigo-900/30">
                        {{ $users->links() }}
                    </div>
                @elseif(isset($message))
                    <div class="p-16 text-center">
                        <div class="inline-block p-8 rounded-2xl bg-gray-900/80 border border-white/10 backdrop-blur-xl">
                            <svg class="w-20 h-20 text-indigo-400 mx-auto mb-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-2xl text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-400">{{ $message }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
