
<x-app-layout>
    <!-- Navigation Header -->
    <header class="bg-bce-blue text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="text-xl font-bold">BCE Engineering</div>
            <div class="w-1/3">
                <form class="relative">
                    <input type="text" placeholder="Search solutions..." class="w-full py-2 px-4 rounded-md text-gray-800">
                    <button type="submit" class="absolute right-3 top-2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Breadcrumbs -->
    <x-common.bread-crumbs> </x-common.bread-crumbs>
  
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Sidebar -->
        <aside class="lg:w-1/4 space-y-6">
            <!-- Solutions Navigation -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">Related Solutions</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Wet Scrubber Systems</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Spray Dryer FGD</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">SCR/SNCR Systems</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Baghouses for Coal</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">ESP Retrofit Solutions</a></li>
                </ul>
            </div>

            <!-- Technical Docs -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">Technical Resources</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        FGD Design Guidelines
                    </a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        NOX Reduction White Paper
                    </a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        Coal Boiler Case Studies
                    </a></li>
                </ul>
            </div>

            <!-- Contact Card -->
            <div class="bg-bce-blue text-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Engineering Support</h3>
                <p class="mb-4">Our boiler engineering experts are available to discuss your specific requirements.</p>
                <a href="#contact" class="inline-block bg-bce-accent hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-md text-center transition duration-300">
                    Contact an Engineer
                </a>
            </div>
        </aside>

                   {!! $page->content !!}
</div>


</x-app-layout>
