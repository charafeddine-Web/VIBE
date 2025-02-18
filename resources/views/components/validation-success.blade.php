
@if ($success->any())
    <div {{ $attributes }}>

        <ul class="mt-3 list-disc list-inside text-sm text-green-600">
            @foreach ($success->all() as $succes)
                <li>{{ $succes }}</li>
            @endforeach
        </ul>
    </div>
@endif
