
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page->title }}
        </h2>
    </x-slot>

    <div class="py-12">
                    {!! $page->content !!}
    </div>
</x-app-layout>
