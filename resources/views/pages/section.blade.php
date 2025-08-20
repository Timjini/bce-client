
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page->title }}
        </h2>
    </x-slot>

    <div class="py-12">
           <main class="container mx-auto px-4 py-8 max-w-5xl">
        <!-- Hero Section -->
        <section class="bg-white p-8 rounded-lg shadow-md mb-12 text-center">
            <h1 class="text-4xl font-bold text-bce-steel mb-4">{{$page->title}}</h1>
            <p class="text-xl text-gray-700 mb-8"></p>
            <div class="w-24 h-1 bg-bce-accent mx-auto"></div>
        </section>
                    {!! $page->content !!}
        </main>
    </div>
</x-app-layout>
