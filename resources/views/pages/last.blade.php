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

    <!-- Main Content Container -->
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
                <a href="/contact" class="inline-block bg-bce-accent hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-md text-center transition duration-300">
                    Contact an Engineer
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="lg:w-3/4">
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-bce-steel mb-2">Coal-Fired Boiler Pollution Control Solutions</h1>
                <div class="h-1 w-20 bg-bce-accent mb-4"></div>
                <p class="text-lg text-gray-700">The principal pollutants from coal-fired boilers, which have been targeted by local and federal regulatory agencies are SO<sub>2</sub>, NO<sub>X</sub> and PM 10 particulates. The particular pollution control equipment for a given installation is dependent on the combustion system, the chemistry of the fuel being burned and the applicable regulations.</p>
            </div>

            <!-- Content Sections -->
            <div class="space-y-12">
                <!-- SO2 Removal Section -->
                <section class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-bce-steel mb-4 border-b pb-2">SO<sub>2</sub> Removal Technologies</h2>
                    <p class="mb-4">Sulfur dioxide removal is known in the industry as flue gas desulfurization (FGD). The most commonly used FGD equipment for utility boilers are wet scrubbers and spray dryers.</p>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-gray-50 p-4 rounded-md">
                            <h3 class="text-xl font-semibold text-bce-blue mb-2">Wet Scrubbers</h3>
                            <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                <li>90-98% efficiency across coal types</li>
                                <li>Lower initial cost and power consumption</li>
                                <li>Produces wet sludge requiring treatment</li>
                                <li>Converts air pollution to water pollution challenge</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-md">
                            <h3 class="text-xl font-semibold text-bce-blue mb-2">Spray Dryers</h3>
                            <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                <li>70-90% efficiency on low-sulfur coal</li>
                                <li>Uses slaked lime (Ca(OH)<sub>2</sub>) reagent</li>
                                <li>Calcium-to-sulfur ratio of 1.1-1.6</li>
                                <li>Dry product with no wastewater</li>
                                <li>Best for coals with &lt;1.5% sulfur</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-blue-50 border-l-4 border-bce-blue p-4">
                        <p class="text-bce-steel"><strong>BCE Recommendation:</strong> For high-sulfur coals (&gt;2.5%), we typically recommend wet scrubber systems with our proprietary sludge treatment solutions to minimize environmental impact.</p>
                    </div>
                </section>

                <!-- NOX Removal Section -->
                <section class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-bce-steel mb-4 border-b pb-2">NO<sub>X</sub> Reduction Solutions</h2>
                    <p class="mb-4">Nitrogen oxides (NO<sub>X</sub>) in flue gas are reduced to N<sub>2</sub> and H<sub>2</sub>O through selective catalytic reduction (SCR) and selective non-catalytic reduction (SNCR).</p>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold text-bce-blue mb-2">SCR Systems</h3>
                            <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                <li>Ammonia injection with catalyst</li>
                                <li>Operating temperatures 450°F to 840°F</li>
                                <li>Higher capital cost (catalyst required)</li>
                                <li>90%+ reduction achievable</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-bce-blue mb-2">SNCR Systems</h3>
                            <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                <li>Reducing agent injected in furnace</li>
                                <li>Operates at 1600°F to 2000°F</li>
                                <li>Lower capital cost (no catalyst)</li>
                                <li>30-70% reduction typical</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-6 bg-blue-50 border-l-4 border-bce-blue p-4">
                        <p class="text-bce-steel"><strong>BCE Innovation:</strong> Our hybrid SCR/SNCR systems can achieve 80%+ NO<sub>X</sub> reduction while optimizing operational costs based on your specific boiler conditions.</p>
                    </div>
                </section>

                <!-- Dust Collection Section -->
                <section class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-bce-steel mb-4 border-b pb-2">Dust Collection for Coal Applications</h2>
                    <p class="mb-4">Electrostatic precipitators (ESPs) were the most commonly used dust collection equipment in coal-fired power plants and are now being replaced or retrofitted with fabric filter dust collectors/baghouses.</p>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h3 class="text-xl font-semibold text-bce-blue mb-2">Baghouses</h3>
                            <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                <li>More efficient than ESPs</li>
                                <li>Lower capital and maintenance costs</li>
                                <li>99.9%+ collection efficiency</li>
                                <li>Better for fine particulate (PM2.5)</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-bce-blue mb-2">ESPs</h3>
                            <ul class="list-disc pl-5 space-y-1 text-gray-700">
                                <li>Traditional solution</li>
                                <li>Higher maintenance requirements</li>
                                <li>Less efficient for fine particles</li>
                                <li>Being phased out in many plants</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-blue-50 border-l-4 border-bce-blue p-4">
                        <p class="text-bce-steel"><strong>BCE Advantage:</strong> Our proprietary baghouse system completely eliminates the risk of fires in baghouse plenums, providing the safest and most effective solution for coal-fired applications.</p>
                    </div>
                </section>
            </div>

            <!-- Technical Support CTA -->
            <div class="mt-12 bg-gradient-to-r from-bce-blue to-bce-light-blue text-white p-8 rounded-lg shadow-lg">
                <div class="max-w-3xl mx-auto text-center">
                    <h3 class="text-2xl font-bold mb-4">Need Custom Engineering for Your Coal Boiler?</h3>
                    <p class="text-xl mb-6">Our combustion engineering team can assess your specific requirements and recommend the optimal pollution control solution.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/contact" class="bg-bce-accent hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Request Technical Consultation
                        </a>
                        <a href="tel:+18005551234" class="bg-white hover:bg-gray-100 text-bce-blue font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Call Our Engineers
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>