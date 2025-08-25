<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex-shrink-0 text-xl font-bold text-bce-blue">
                    <img src="/images/bcelogo.png" class="h-12 w-auto" alt="BCE Logo"/>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="mt-4 hidden sm:ml-6 sm:flex sm:space-x-8">
                @foreach($megaMenu as $section => $categories)
                    @if(isset($categories['direct']))
                        <!-- Direct link -->
                        <a href="{{ url($categories['direct']) }}"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-bce-blue">
                            {{ $section }}
                        </a>
                    @else
                        <!-- Section with dropdown -->
                        <div class="group relative">
                            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-bce-blue">
                                {{ $section }}
                                <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div class="absolute left-0 top-full hidden group-hover:block w-screen max-w-7xl px-4 py-6 bg-white shadow-lg">
                                <div class="grid grid-cols-4 gap-8">
                                    @foreach($categories as $colTitle => $links)
                                        <div>
                                            <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2">
                                                {{ $colTitle }}
                                            </h3>
                                            <ul class="space-y-1">
                                                @foreach($links as $link)
                                                    <li>
                                                        <a href="{{ url($link['slug']) }}"
                                                           class="text-gray-700 hover:text-bce-blue text-sm">
                                                            {{ $link['name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- CTA Desktop -->
            <div class="hidden sm:flex sm:items-center">
                <a href="/contact"
                   class="bg-bce-blue text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-bce-light-blue transition duration-300">
                    Get a Quote
                </a>
            </div>

            <!-- Mobile Hamburger -->
            <div class="flex items-center sm:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-bce-blue focus:outline-none">
                    <!-- hamburger icon -->
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (overlay + scrollable) -->
<div id="mobile-menu"
     class="hidden sm:hidden fixed inset-0 z-40 bg-white border-t shadow-lg overflow-y-auto">
    <div class="px-4 py-6 space-y-6">
        @foreach($megaMenu as $section => $categories)
            @if(isset($categories['direct']))
                <!-- Direct link -->
                <a href="{{ url($categories['direct']) }}" class="block text-gray-700 hover:text-bce-blue">
                   <strong>{{ $section }}</strong> 
                </a>
            @else
                <!-- Dropdown group -->
                <div>
                    <p class="font-semibold text-gray-700">{{ $section }}</p>
                    @foreach($categories as $colTitle => $links)
                        <p class="text-sm text-gray-500 mt-4"><strong>{{ $colTitle }}</strong></p>
                        <ul class="pl-4 space-y-1">
                            @foreach($links as $link)
                                <li>
                                    <a href="{{ url($link['slug']) }}" class="my-2 block text-gray-600 hover:text-bce-blue text-sm">
                                        <span></span>    {{ $link['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            @endif
        @endforeach

        <!-- CTA Mobile -->
        <a href="/contact"
           class="block text-center bg-bce-blue text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-bce-light-blue transition duration-300">
            Get a Quote
        </a>
    </div>
</div>

</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
