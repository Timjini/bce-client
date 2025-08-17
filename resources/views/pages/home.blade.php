<?php
// config.php - Basic configuration
define('SITE_NAME', 'BCE Engineering');
define('PHONE_NUMBER', '+1 (800) 555-1234');
define('EMAIL_ADDRESS', 'info@bceengineering.com');
?>
<x-app-layout>
    <x-hero></x-hero>

    <!-- What We Do Section -->
    <x-common.section id="what-we-do" bgColor="bg-gray-50" padding="py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-bce-blue mb-4">
                Comprehensive Engineering and Environmental Solutions
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                BCE is a global leader in pollution control, systems engineering, and advanced manufacturing. 
                We offer end-to-end services, including design, fabrication, installation, and proactive maintenance. 
                Our clients count on us to solve complex environmental challenges while enhancing operational performance.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($iconBoxes as $box)
                <x-common.icon-box 
                    :title="$box['title']"
                    :description="$box['description']"
                    :icon="$box['icon']"
                    :bgColor="$box['bgColor']"
                    :titleColor="$box['titleColor']"
                    :iconColor="$box['iconColor']"
                    :padding="$box['padding']"
                    :shadow="$box['shadow']"
                    :iconSize="$box['iconSize']"
                />
            @endforeach
        </div>
    </x-common.section>

    <!-- Why BCE Section -->
    <x-common.section id="why-bce" bgColor="bg-bce-blue" textColor="text-white" padding="py-16">
        <div class="lg:flex items-center gap-12">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Engineering Milestones That Redefine Industry Standards</h2>
                    <p class="text-lg mb-6">We don't just build equipment—we set new benchmarks. BCE engineered the world's cleanest coal-fired boiler system—an industry-defining achievement with emissions lower than those in a hospital surgery room. Our systems drive efficiency, safety, and sustainability across sectors.</p>
                    
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                            <h3 class="font-bold text-bce-accent mb-2">World-first HMI-driven control systems</h3>
                            <p>Pioneering intuitive control interfaces for complex industrial processes.</p>
                        </div>
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                            <h3 class="font-bold text-bce-accent mb-2">ASME-certified manufacturing</h3>
                            <p>Meeting the highest quality standards in pressure vessel fabrication.</p>
                        </div>
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                            <h3 class="font-bold text-bce-accent mb-2">Global service and maintenance footprint</h3>
                            <p>24/7 support with technicians across 12 countries.</p>
                        </div>
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                            <h3 class="font-bold text-bce-accent mb-2">Automated systems for maximum uptime</h3>
                            <p>Smart monitoring that predicts issues before they occur.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="/images/solutions1.jpeg" alt="BCE Engineering Team" class="rounded-lg shadow-xl">
                </div>
            </div>
    </x-common.section>

    <!-- BCE Solutions Section -->
    <x-common.section id="solutions" bgColor="" textColor="" padding="py-16">
                    <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-bce-blue mb-4">Explore Our Specialized Divisions</h2>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Solution 1 -->
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-bce-accent">
                    <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Engineering</h3>
                    <p class="text-gray-600 mb-4">Turnkey solutions from concept to reality.</p>
                    <a href="#" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
                
                <!-- Solution 2 -->
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-bce-accent">
                    <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Manufacturing</h3>
                    <p class="text-gray-600 mb-4">High-precision fabrication, control panels, and ASME vessels.</p>
                    <a href="#" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
                
                <!-- Solution 3 -->
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-bce-accent">
                    <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Equipment</h3>
                    <p class="text-gray-600 mb-4">Industry-leading dust collectors, baghouses, and pollution control systems.</p>
                    <a href="#" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
                
                <!-- Solution 4 -->
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-bce-accent">
                    <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Solutions</h3>
                    <p class="text-gray-600 mb-4">Tailored engineering for product recovery and environmental compliance.</p>
                    <a href="#" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="bg-bce-blue hover:bg-bce-light-blue text-white font-bold py-3 px-8 rounded-md inline-block transition duration-300">View All Capabilities</a>
            </div>
    </x-common.section>
    <!-- BCE in Action Section -->
    <x-common.section id="solutions" bgColor="bg-gray-100" textColor="" padding="py-16">
        <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-bce-blue mb-4">See Our Systems at Work</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Discover how BCE has helped companies around the world exceed regulatory standards, reduce emissions, and extend equipment lifespan through intelligent engineering.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="/images/solutions2.jpeg" alt="BCE Installation" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-bce-steel">Steel Plant Emission Control</h3>
                        <p class="text-gray-600 mb-4">Reduced particulate emissions by 98% while recovering valuable byproducts.</p>
                        <a href="#" class="text-bce-blue font-medium hover:underline">Read Case Study →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="/images/solutions4.jpg" alt="BCE Control Panel" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-bce-steel">Dust Collection and Pollution Control System Engineering</h3>
                        <p class="text-gray-600 mb-4">The BCE engineering staff is highly experienced and provides a variety of services for a wide range of industries. </p>
                        <a href="#" class="text-bce-blue font-medium hover:underline">Read Case Study →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="bg-transparent hover:bg-bce-blue hover:text-white text-bce-blue font-bold py-3 px-6 border-2 border-bce-blue rounded-md inline-block mr-4 transition duration-300">View Case Studies</a>
                <a href="#" class="bg-bce-blue hover:bg-bce-light-blue text-white font-bold py-3 px-6 rounded-md inline-block transition duration-300">Watch Media Highlights</a>
            </div>
    </x-common.section>

     <!-- Careers Section -->
    <x-common.section id="career" bgColor="bg-white" textColor="" padding="py-16">
        <div class="lg:flex items-center gap-12">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h2 class="text-3xl font-bold text-bce-blue mb-4">Build the Future of Clean Industry</h2>
                    <p class="text-lg text-gray-600 mb-6">At BCE, we're engineers, innovators, and problem-solvers shaping the next era of pollution control and industrial engineering. Join our team and make a measurable impact.</p>
                    <a href="#" class="bg-bce-blue hover:bg-bce-light-blue text-white font-bold py-3 px-6 rounded-md inline-block transition duration-300">View Open Positions</a>
                </div>
                <div class="lg:w-1/2">
                    <img src="/images/solutions5.jpeg" alt="BCE Team" class="rounded-lg shadow-xl">
                </div>
            </div>
    </x-common.section>

    <!-- Contact Us Section -->
    <x-common.section id="career" bgColor="bg-gray-100" textColor="text-gray-800" padding="py-16">
        <div class="lg:flex items-start gap-12">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Let's Engineer Something Great Together</h2>
                    <p class="text-lg mb-8">Need support or a custom solution? Our team is ready to help with personalized service and proven expertise.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 mt-1 text-bce-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <h3 class="font-bold text-lg">Phone</h3>
                                <p>{{ config('site.phone') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 mt-1 text-bce-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h3 class="font-bold text-lg">Email</h3>
                                <p><?php echo EMAIL_ADDRESS; ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 mt-1 text-bce-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <h3 class="font-bold text-lg">Office Locations</h3>
                                <p>Headquarters: 123 Industrial Way, Clean City, CC 12345</p>
                                <p>Manufacturing Facility: 456 Fabrication Ave, Steel Town, ST 67890</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 bg-white text-gray-800 p-8 rounded-lg shadow-xl">
                    <h3 class="text-2xl font-bold text-bce-steel mb-6">Contact Our Team</h3>
                    <form>
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" id="first-name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-bce-blue focus:border-bce-blue">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" id="last-name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-bce-blue focus:border-bce-blue">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-bce-blue focus:border-bce-blue">
                        </div>
                        
                        <div class="mb-6">
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company</label>
                            <input type="text" id="company" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-bce-blue focus:border-bce-blue">
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">How Can We Help?</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-bce-blue focus:border-bce-blue"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-bce-blue hover:bg-bce-light-blue text-white font-bold py-3 px-4 rounded-md transition duration-300">Send Message</button>
                    </form>
                </div>
            </div>
    </x-common.section>
</x-app-layout>
