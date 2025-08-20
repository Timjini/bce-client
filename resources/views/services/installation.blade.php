<x-app-layout>

    <!-- Navigation Header -->
    <header class="bg-bce-blue text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="text-xl font-bold">BCE Engineering</div>
            <div class="w-1/3">
                <form class="relative">
                    <input type="text" placeholder="Search installations..." class="w-full py-2 px-4 rounded-md text-gray-800">
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
                        <a href="#" class="text-bce-blue hover:text-bce-accent">Services</a>
                    </li>
                    <li class="text-gray-500">/</li>
                    <li class="text-gray-600" aria-current="page">Equipment Installation</li>
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
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">Installation Services</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Turnkey System Installation</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Dust Collector Installation</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Scrubber Systems</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Ductwork Installation</a></li>
                    <li><a href="#" class="text-bce-blue hover:text-bce-accent transition">Retrofit Projects</a></li>
                </ul>
            </div>

            <!-- Project Spotlight -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-bce-steel border-b pb-2">Featured Project</h3>
                <img src="https://via.placeholder.com/300x200?text=Installation+Project" alt="Featured Installation" class="w-full h-auto mb-3 rounded cursor-pointer hover:opacity-90 transition" onclick="openModal(this.src)">
                <p class="text-sm text-gray-600">Multi-stage pollution control system installation for a power plant</p>
            </div>

            <!-- Contact Card -->
            <div class="bg-bce-blue text-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Installation Inquiry</h3>
                <p class="mb-4">Our project managers can discuss your installation requirements.</p>
                <a href="/contact" class="inline-block bg-bce-accent hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-md text-center transition duration-300">
                    Contact Us
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="lg:w-3/4">
            <!-- Page Header -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h1 class="text-3xl font-bold text-bce-steel mb-2">Pollution Control Equipment & Turnkey System Installation</h1>
                <div class="h-1 w-20 bg-bce-accent mb-4"></div>
                <p class="text-lg text-gray-700 mb-4">Pollution control equipment installation, especially on a large project, is an art involving many crafts, specialists, and equipment. Installations can be difficult and time-consuming, sometimes lasting weeks or even months.</p>
                <p class="text-lg text-gray-700">At BCE, we are as comfortable providing a simple bin vent as designing, building, and installing a multi-million dollar turnkey pollution control system.</p>
            </div>

            <!-- Gallery Section -->
            <section class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-semibold text-bce-steel mb-4 border-b pb-2">Installation Gallery</h2>
                <p class="text-gray-600 mb-4">Click on the images below to enlarge.</p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <img src="/images/solutions1.jpeg" alt="BCE Installation" class="w-full h-auto rounded cursor-pointer hover:opacity-90 transition" onclick="openModal(this.src)">
                    <img src="/images/solutions2.jpeg" alt="BCE Installation" class="w-full h-auto rounded cursor-pointer hover:opacity-90 transition" onclick="openModal(this.src)">
                    <img src="/images/solutions3.jpg" alt="BCE Installation" class="w-full h-auto rounded cursor-pointer hover:opacity-90 transition" onclick="openModal(this.src)">
                    <img src="/images/solutions4.jpg" alt="BCE Installation" class="w-full h-auto rounded cursor-pointer hover:opacity-90 transition" onclick="openModal(this.src)">
                    <img src="/images/solutions5.jpeg" alt="BCE Installation" class="w-full h-auto rounded cursor-pointer hover:opacity-90 transition" onclick="openModal(this.src)">
                    <img src="https://via.placeholder.com/400x300?text=Installation+6" alt="BCE Installation" class="w-full h-auto rounded cursor-pointer hover:opacity-90 transition" onclick="openModal(this.src)">
                </div>
            </section>

            <!-- Installation Process -->
            <section class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-2xl font-semibold text-bce-steel mb-4 border-b pb-2">Our Installation Process</h2>
                
                <div class="space-y-6">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:w-1/4 bg-bce-blue text-white p-4 rounded-lg text-center">
                            <div class="text-2xl font-bold mb-2">1</div>
                            <h3 class="font-semibold">Pre-Installation Planning</h3>
                        </div>
                        <div class="md:w-3/4 bg-gray-50 p-4 rounded-lg">
                            <p>Detailed project planning including site assessment, equipment logistics, and scheduling to minimize downtime.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:w-1/4 bg-bce-blue text-white p-4 rounded-lg text-center">
                            <div class="text-2xl font-bold mb-2">2</div>
                            <h3 class="font-semibold">Equipment Delivery</h3>
                        </div>
                        <div class="md:w-3/4 bg-gray-50 p-4 rounded-lg">
                            <p>Coordinated delivery of all system components with proper staging for efficient installation.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:w-1/4 bg-bce-blue text-white p-4 rounded-lg text-center">
                            <div class="text-2xl font-bold mb-2">3</div>
                            <h3 class="font-semibold">Professional Installation</h3>
                        </div>
                        <div class="md:w-3/4 bg-gray-50 p-4 rounded-lg">
                            <p>Our certified technicians install all components with precision, following all safety protocols.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:w-1/4 bg-bce-blue text-white p-4 rounded-lg text-center">
                            <div class="text-2xl font-bold mb-2">4</div>
                            <h3 class="font-semibold">System Testing</h3>
                        </div>
                        <div class="md:w-3/4 bg-gray-50 p-4 rounded-lg">
                            <p>Comprehensive testing and commissioning to ensure optimal performance before handover.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="bg-gradient-to-r from-bce-blue to-bce-light-blue text-white p-8 rounded-lg shadow-lg">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-2xl font-bold mb-4">Ready for Your Installation Project?</h2>
                    <p class="text-xl mb-6">Our installation team has the expertise to handle projects of any scale and complexity.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/contact" class="bg-bce-accent hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Request Installation Quote
                        </a>
                        <a href="tel:+18005551234" class="bg-white hover:bg-gray-100 text-bce-blue font-bold py-3 px-6 rounded-md text-center transition duration-300">
                            Call Our Install Team
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden" onclick="closeModal()">
        <div class="max-w-4xl w-full p-4">
            <img id="modalImage" src="" alt="Enlarged view" class="w-full h-auto max-h-screen">
            <button class="absolute top-4 right-4 text-white text-3xl">&times;</button>
        </div>
    </div>

    <script>
        function openModal(src) {
            document.getElementById('modalImage').src = src;
            document.getElementById('imageModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</x-app-layout>
