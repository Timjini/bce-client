@props([
    'id' => null,
    'bgColor' => 'bg-gray-50',
    'textColor' => '',
    'padding' => 'py-16',
    'container' => 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8',
    'fullWidth' => false,
])

<section 
    @if($id) id="{{ $id }}" @endif
    {{ $attributes->merge(['class' => "$padding $bgColor $textColor"]) }}
>
    @if($fullWidth)
        {{ $slot }}
    @else
        <div class="{{ $container }}">
            {{ $slot }}
        </div>
    @endif
</section>