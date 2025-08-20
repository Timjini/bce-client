
<x-app-layout>
  <img src="{{ route('pages.image', basename($page->image_url)) }}" alt="{{ $page->title }}">


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
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-bce-steel mb-2">{{$page->title}}</h1>
                <div class="h-1 w-20 bg-bce-accent mb-4"></div>
                <p class="text-lg text-gray-700"></p>
            </div>
            {!! $page->content !!}
            
            @include('pages.partials.action')
            </main>
        </div>
    

</x-app-layout>
