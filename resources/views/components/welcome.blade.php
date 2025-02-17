<div class="p-6 lg:p-8 bg-white border-b border-gray-200">

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to your VIBE application!
    </h1>
    <x-validation-errors class="mb-4" />

    <form method="POST" action="">
        @csrf
        <div>
            <x-label for="amis" value="{{ __('Add Amis') }}" />
            <x-input id="amis" class="block mt-1 w-full" type="text" name="amis" :value="old('amis')" required autofocus autocomplete="amis" />
        </div>

    </form>

</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

</div>
