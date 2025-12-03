<?php
// config.php - Basic configuration
define('SITE_NAME', 'BCE Engineering');
define('PHONE_NUMBER', '+1 (800) 555-1234');
define('EMAIL_ADDRESS', 'info@bce-usa.com');
?>
<x-app-layout>

    <!-- Contact Us Section -->
    <x-common.section id="career" bgColor="bg-gray-100" textColor="text-gray-800" padding="py-16">
        <div class="lg:flex items-start gap-12 mt-4">
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
                                <p>{{ config('site.address') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 bg-white text-gray-800 p-8 rounded-lg shadow-xl">
                    <h3 class="text-2xl font-bold text-bce-steel mb-6">Contact Our Team</h3>
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4" x-data="{ loading: false }" @submit="loading = true">
                     @csrf
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                  <x-input-label for="first-name" :value="__('First Name')" />
                                    <x-text-input id="first-name" name="first-name" type="text" class="mt-1 block w-full" 
                                        :value="old('first-name')" required />
                                  <x-input-error class="mt-2" :messages="$errors->get('first-name')" />
                            </div>
                            <div>
                                <x-input-label for="last-name" :value="__('Last Name')" />
                                    <x-text-input id="last-name" name="last-name" type="text" class="mt-1 block w-full" 
                                        :value="old('last-name')" required />
                                  <x-input-error class="mt-2" :messages="$errors->get('last-name')" />
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                        <div class="">
                             <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" 
                                        :value="old('email')" required />
                                  <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                        <div class="">
                            <x-input-label for="phone" :value="__('Phone')" />
                                    <x-text-input id="phone" name="phone" type="phone" class="mt-1 block w-full" 
                                        :value="old('phone')" required />
                                  <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>
                        </div>
                        
                        <div class="mb-6">
                             <x-input-label for="company" :value="__('Company')" />
                                    <x-text-input id="company" name="company" type="text" class="mt-1 block w-full" 
                                        :value="old('company')" required />
                                  <x-input-error class="mt-2" :messages="$errors->get('company')" />
                        </div>
                        
                        <div class="mb-6">
                             <x-input-label for="message" :value="__('How Can We Help?')" />
                                    <x-text-area id="message" name="message" type="text" class="mt-1 block w-full" 
                                        :value="old('message')" required />
                                  <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        
                       <x-loading-button label="Send" > Send</x-loading-button>
                    </form>
                </div>
            </div>
    </x-common.section>
</x-app-layout>