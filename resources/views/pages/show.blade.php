
<x-app-layout>

    @include('pages.partials.header',['pageTitle' => $page->section->name])
     <!-- Breadcrumbs -->
    <x-common.bread-crumbs 
            :sectionSlug="$page->section->slug" 
            :categorySlug="$page->category->slug" 
            :pageSlug="$page->slug" 
            :sectionName="$page->section->name" 
            :categoryName="$page->category->name" 
            :pageName="$page->name" 
        />
        
        <!-- Main Content Container -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-8">
            @include('pages.partials.aside', ['pages'=> $page->category->pages])
            
            <main class="lg:w-3/4">
                <div class="relative w-full h-96 bg-cover bg-center rounded-xl shadow-md bg-[url('{{ $page->image_url ? route('pages.image', basename($page->image_url)) : asset('images/placeholder.png') }}')]"
                    alt="{{ $page->title }}')">
                    <!-- Dark overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-40 rounded-xl"></div>

                    <!-- Title on top -->
                    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
                        <h1 class="text-4xl md:text-5xl font-bold drop-shadow-lg">{{ $page->title }}</h1>
                        <div class="h-1 w-20 bg-bce-accent my-4"></div>
                        <p class="text-lg"></p>
                    </div>
                </div>

            {!! $page->content !!}
            
            @include('pages.partials.action')
            </main>
        </div>
    

</x-app-layout>
