<textarea 
    id="{{ $id ?? $attributes->get('id') }}" 
    name="{{ $name ?? $attributes->get('name') }}" 
    rows="{{ $rows ?? 4 }}"
    {{ $attributes->merge([
        'class' => 'w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-bce-blue focus:border-bce-blue'
    ]) }}
>{{ $slot ?? old($name ?? '') }}</textarea>