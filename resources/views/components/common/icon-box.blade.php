<!-- resources/views/components/icon-box.blade.php -->
@props([
    'bgColor' => 'bg-white',
    'textColor' => 'text-gray-600',
    'titleColor' => 'text-bce-steel',
    'iconColor' => 'text-bce-blue',
    'title' => 'Systems Engineering & Design',
    'description' => 'Custom engineered solutions tailored to your specific operational requirements.',
    'padding' => 'p-6',
    'rounded' => 'rounded-lg',
    'shadow' => 'shadow-md',
    'icon' => null, // Name of your icon component (e.g. 'engineering')
    'iconSize' => 'h-12 w-12',
    'iconProps' => [], // Additional props for your icon component
])

<div {{ $attributes->merge(['class' => "$bgColor $padding $rounded $shadow icon-box"]) }}>
    @if($icon)
        <div class="{{ $iconColor }} mb-4">
            <x-dynamic-component :component="'icons.'.$icon" {{ $attributes->merge($iconProps)->class($iconSize) }} />
        </div>
    @endif
    
    <h3 class="text-xl font-semibold mb-2 {{ $titleColor }}">{{ $title }}</h3>
    <p class="{{ $textColor }}">{{ $description }}</p>
</div>