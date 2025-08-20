@props([
    'sectionSlug' => null,
    'sectionName' => null,
    'categorySlug' => null,
    'categoryName' => null,
    'pageSlug' => null,
    'pageName' => null,
])

<div class="bg-gray-100 border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                
                {{-- Home --}}
                <li>
                    <a href="/" class="text-bce-blue hover:text-bce-accent">Home</a>
                </li>

                {{-- Section --}}
                @if($sectionSlug && $sectionName)
                    <li class="text-gray-500">/</li>
                    <li>
                        <a href="/{{ $sectionSlug }}" class="text-bce-blue hover:text-bce-accent">
                            {{ $sectionName }}
                        </a>
                    </li>
                @endif

                {{-- Category --}}
                @if($categorySlug && $categoryName)
                    <li class="text-gray-500">/</li>
                    <li>
                        <a href="/{{ $sectionSlug }}/{{ $categorySlug }}" class="text-bce-blue hover:text-bce-accent">
                            {{ $categoryName }}
                        </a>
                    </li>
                @endif

                {{-- Page (current) --}}
                @if($pageSlug && $pageName)
                    <li class="text-gray-500">/</li>
                    <li class="text-gray-600 font-medium" aria-current="page">
                        {{ $pageName }}
                    </li>
                @endif

            </ol>
        </nav>
    </div>
</div>
