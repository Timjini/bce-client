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
                    <a href="/engineering-bce-solutions" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
                
                <!-- Solution 2 -->
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-bce-accent">
                    <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Manufacturing</h3>
                    <p class="text-gray-600 mb-4">High-precision fabrication, control panels, and ASME vessels.</p>
                    <a href="/engineering-bce-solutions" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
                
                <!-- Solution 3 -->
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-bce-accent">
                    <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Equipment</h3>
                    <p class="text-gray-600 mb-4">Industry-leading dust collectors, baghouses, and pollution control systems.</p>
                    <a href="/manufacturing-bce-equipment" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
                
                <!-- Solution 4 -->
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-bce-accent">
                    <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Solutions</h3>
                    <p class="text-gray-600 mb-4">Tailored engineering for product recovery and environmental compliance.</p>
                    <a href="#" class="text-bce-blue font-medium hover:underline">Learn more →</a>
                </div>
            </div>
            
            <div class="text-center">
                <a href="{{route('pages.section' , ['sectionSlug' => 'engineering-bce-solutions'])}}" class="bg-bce-blue hover:bg-bce-light-blue text-white font-bold py-3 px-8 rounded-md inline-block transition duration-300">View All Capabilities</a>
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
                        <h3 class="text-xl font-semibold mb-2 text-bce-steel">BCE Manufacturing</h3>
                        <p class="text-gray-600 mb-4">Reduced particulate emissions by 98% while recovering valuable byproducts.</p>
                        <a href="/manufacturing-bce-equipment-bce-manufacturing" class="text-bce-blue font-medium hover:underline">Read Case Study →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="/images/solutions4.jpg" alt="BCE Control Panel" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-bce-steel">ASME Code Design in Dust Collection and Baghouse Systems</h3>
                        <p class="text-gray-600 mb-4">The BCE engineering staff is highly experienced and provides a variety of services for a wide range of industries. </p>
                        <a href="{{route('pages.show', ['sectionSlug'=> 'engineering-bce-solutions', 'categorySlug'=>'engineering-bce-solutions-equipment', 'pageSlug' => 'engineering-bce-solutions-equipment-asme-code-vessels'])}}" class="text-bce-blue font-medium hover:underline">Read Case Study →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="bg-transparent hover:bg-bce-blue hover:text-white text-bce-blue font-bold py-3 px-6 border-2 border-bce-blue rounded-md inline-block mr-4 transition duration-300">View Case Studies</a>
                <a href="#" class="bg-bce-blue hover:bg-bce-light-blue text-white font-bold py-3 px-6 rounded-md inline-block transition duration-300">Watch Media Highlights</a>
            </div>
    </x-common.section>

     <!-- Careers Section -->
   

</x-app-layout>
