<x-app-layout>
    <!-- Navigation Header -->
    <header class="bg-bce-blue text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="text-xl font-bold">BCE Engineering</div>
            <div class="w-1/3">
                <form class="relative">
                    <input type="text" placeholder="Search services..." class="w-full py-2 px-4 rounded-md text-gray-800">
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
                        <a href="{{ route('services.index') }}" class="text-bce-blue hover:text-bce-accent">Services</a>
                    </li>
                    <li class="text-gray-500">/</li>
                    <li class="text-gray-600" aria-current="page">Dust Collector Maintenance</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Sidebar -->
        <aside class="lg:w-1/4 space-y-6">
            <!-- Services Navigation -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">All Maintenance Services</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Dust Collector Maintenance</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Baghouse Inspections</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Filter Bag Replacement</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Wet Scrubber Service</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Ductwork Maintenance</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Emergency Repairs</a></li>
                </ul>
            </div>

            <!-- Emergency Contact -->
            <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-red-800">Emergency Service</h3>
                <p class="text-red-700 mb-4">Need immediate assistance with your equipment?</p>
                <a href="tel:{{ config('site.phone') }}" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md text-center transition duration-300 w-full">
                    Call Now: {{ config('site.phone') }}
                </a>
            </div>

            <!-- Maintenance Checklist -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">Maintenance Checklist</h3>
                <ul class="space-y-2">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Regular inspections</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Filter replacements</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>System performance testing</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Preventative maintenance</span>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="lg:w-3/4">
            <!-- Page Header -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h1 class="text-3xl font-bold text-bce-steel mb-2">Dust Collector & Pollution Control System Maintenance</h1>
                <div class="h-1 w-20 bg-bce-accent mb-4"></div>
                <p class="text-lg text-gray-700 mb-4">BCE performs routine and emergency maintenance on a variety of dust collectors, pollution control systems, and other forms of industrial equipment.</p>
                
                <div class="bg-blue-50 border-l-4 border-bce-blue p-4 my-6">
                    <p class="text-bce-steel font-medium">Regular maintenance of your pollution control systems can minimize the risk of unexpected failures!</p>
                </div>
                
                <p class="text-gray-700 mb-4">Preventative maintenance services are cost effective approaches to maintaining optimum performance levels and decreasing costly downtime. If your system is in need of maintenance or repairs, use the scheduling button below to request a BCE maintenance inspection visit.</p>
                <p class="text-gray-700">Our staff is experienced in working under critical constraints in order to make sure your projects stay online and under control.</p>
            </div>

            <!-- Maintenance Areas -->
            <section class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-semibold text-bce-steel mb-4 border-b pb-2">Maintenance Areas</h2>
                <p class="text-gray-700 mb-4">Our maintenance services include and are not limited to:</p>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Dust collection systems</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Pollution control systems</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Baghouses</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Filter bag replacement</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Cyclones</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Multiclones</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Wet scrubbers</span>
                    </div>
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-bce-blue mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Industrial ductwork</span>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="bg-gradient-to-r from-bce-blue to-bce-light-blue text-white p-8 rounded-lg shadow-lg">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-2xl font-bold mb-4">Schedule Your Maintenance Today</h2>
                    <p class="text-xl mb-6">Our maintenance team is ready to ensure your pollution control systems operate at peak efficiency.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#schedule" class="bg-bce-accent hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Request Maintenance Visit
                        </a>
                        <a href="tel:{{ config('site.phone') }}" class="bg-white hover:bg-gray-100 text-bce-blue font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Call: {{ config('site.phone') }}
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-app-layout>