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
    <div class="bg-gray-100 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm">
                    <li>
                        <a href="#" class="text-bce-blue hover:text-bce-accent">Home</a>
                    </li>
                    <li class="text-gray-500">/</li>
                    <li>
                        <a href="#" class="text-bce-blue hover:text-bce-accent">Engineering Solutions</a>
                    </li>
                    <li class="text-gray-500">/</li>
                    <li>
                        <a href="/pollution-control-equipment" class="text-bce-blue hover:text-bce-accent">Pollution Control Equipment</a>
                    </li>
                    <li class="text-gray-500">/</li>
                    <li class="text-gray-600" aria-current="page">Coal Fired Boiler Engineering</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Sidebar -->
        <aside class="lg:w-1/4 space-y-6">
            <!-- Solutions Navigation -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">All Pollution Control Solutions</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">ASME Code Vessels</a></li>
                    <li><a href="/coal-fired-boilers" class="text-bce-blue hover:text-bce-accent transition font-semibold">→ Coal-Fired Boilers</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Control Systems</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Dust Collectors</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Electrostatic Precipitators</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Filter Bags</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Industrial Ductwork</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Industrial Ventilation</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Odor Control Systems</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Pleated Filters</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Thermal Oxidizers</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Wet Scrubbers</a></li>
                </ul>
            </div>

            <!-- Contact Card -->
            <div class="bg-bce-blue text-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Get Started Today</h3>
                <p class="mb-4">BCE designs, fabricates, installs, and maintains cutting-edge pollution control systems.</p>
                <a href="#contact" class="inline-block bg-bce-accent hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-md text-center transition duration-300">
                    Contact Our Team
                </a>
            </div>

            <!-- Technical Docs -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">Resource Center</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        Pollution Control Guide
                    </a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        System Specifications
                    </a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="lg:w-3/4">
            <!-- Page Header -->
            <div class="mb-8 bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-3xl font-bold text-bce-steel mb-2">Coal-Fired Boiler Pollution Control</h1>
                <div class="h-1 w-20 bg-bce-accent mb-4"></div>
                <p class="text-lg text-gray-700 mb-4">The principal pollutants from coal-fired boilers, which have been targeted by local and federal regulatory agencies are SO<sub>2</sub>, NO<sub>X</sub> and PM 10 particulates.</p>
                <p class="text-gray-600">The particular pollution control equipment for a given installation is dependent on the combustion system, the chemistry of the fuel being burned and the applicable regulations.</p>
            </div>

            <!-- Content Sections (Same as before) -->
            <!-- ... [Previous content sections remain unchanged] ... -->

            <!-- Full Width CTA -->
            <div class="mt-8 bg-gradient-to-r from-bce-blue to-bce-light-blue text-white p-8 rounded-lg shadow-lg">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">Comprehensive Pollution Control Solutions</h3>
                    <p class="text-xl mb-6">BCE offers complete pollution control systems from design through maintenance.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#" class="bg-bce-accent hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Explore All Solutions
                        </a>
                        <a href="#contact" class="bg-white hover:bg-gray-100 text-bce-blue font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Get a Consultation
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>