<!-- resources/views/components/hero.blade.php -->
@props([
    'backgroundClasses' => 'relative', // Container classes
    'overlayClasses' => 'bg-black/60', // Overlay gradient/color
    'imageUrl' => 'https://plus.unsplash.com/premium_photo-1681823294901-5d9701d6d98f?q=80&w=1221&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'title' => 'Engineering Innovation. Building Clean Solutions.',
    'subtitle' => 'From concept to completion, BCE delivers advanced pollution control, systems engineering, and fabrication solutions trusted across the globe.',
    'primaryButtonText' => 'Explore Our Solutions',
    'primaryButtonUrl' => '#solutions',
    'secondaryButtonText' => 'Contact Our Experts',
    'secondaryButtonUrl' => '#contact',
    'alignment' => 'left',
    'width' => 'md:w-2/3 lg:w-1/2',
    'padding' => 'py-20 md:py-32',
])

<section {{ $attributes->merge(['class' => "$backgroundClasses text-white $padding"]) }}>
    <!-- Background image with overlay -->
    <div class="absolute inset-0 -z-10">
        <img 
            src="{{ $imageUrl }}" 
            alt="Background" 
            class="w-full h-full object-cover"
            loading="lazy"
        >
        <div class="absolute inset-0 {{ $overlayClasses }}"></div>
    </div>
    
    <!-- Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div @class([
            $width,
            'mx-auto text-center' => $alignment === 'center',
            'ml-auto text-right' => $alignment === 'right',
        ])>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">{{ $title }}</h1>
            <p class="text-xl mb-8">{{ $subtitle }}</p>
            <div class="flex flex-col sm:flex-row gap-4 @if($alignment === 'center') justify-center @elseif($alignment === 'right') justify-end @endif">
                <a href="{{ $primaryButtonUrl }}" class="bg-bce-accent hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-md text-center transition duration-300">
                    {{ $primaryButtonText }}
                </a>
                <a href="{{ $secondaryButtonUrl }}" class="bg-transparent hover:bg-white hover:text-bce-blue text-white font-bold py-3 px-6 border-2 border-white rounded-md text-center transition duration-300">
                    {{ $secondaryButtonText }}
                </a>
            </div>
        </div>
    </div>
</section>