<form class="relative" action="{{ route('pages.search') }}" method="GET">
    <input type="text" name="q" placeholder="Search solutions..." 
           class="w-full py-2 px-4 rounded-md text-gray-800"
           value="{{ request('q') }}">
    <button type="submit" class="absolute right-3 top-2 text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </button>
</form>