<nav class="bg-white shadow-sm w-full">
    <div class="w-full max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center py-4 relative">
            <!-- Logo (always visible) -->
            <div class="flex items-center space-x-3 flex-shrink-0">
                <img src="{{ asset('images/logos/medicare-logo.png') }}" alt="Medicare Logo" class="h-9 w-auto">
            </div>
            
            <!-- Desktop Nav Centered (ONLY at lg and up) -->
            <div class="hidden lg:flex flex-1 justify-center">
                <nav class="flex space-x-8 text-base lg:text-lg font-semibold text-gray-900">
                    <a href="/" class="hover:text-blue-600 transition">Home</a>
                    <a href="#medicare-plans" class="hover:text-blue-600 transition">Medicare Plans</a>
                    <a href="#about" class="hover:text-blue-600 transition">About us</a>
                    <a href="#contact" class="hover:text-blue-600 transition">Contact us</a>
                    <a href="#blog" class="hover:text-blue-600 transition">Blog</a>
                </nav>
            </div>
            
            <!-- Desktop Phone Button: right-aligned (ONLY at lg and up) -->
            <div class="hidden lg:flex flex-shrink-0 ml-auto">
                <a href="tel:8447316614"
                   class="flex items-center space-x-2 border border-orange-500 text-orange-500 px-4 py-2 rounded-full hover:bg-orange-50 transition">
                    <i class="fa-solid fa-phone"></i>
                    <span>(844) 731-6614</span>
                </a>
            </div>

            <!-- Mobile Burger Only (shown up to 1023px) -->
            <div class="lg:hidden ml-auto" x-data="{ open: false }">
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300"
                    @click="open = true"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Fullscreen Mobile Drawer -->
                <div
                    x-show="open"
                    class="fixed inset-0 z-50 bg-white"
                    x-transition.opacity
                    @click.self="open = false"
                    style="display: none;"
                >
                    <div class="relative h-full w-full flex flex-col">
                        <!-- Logo at upper left INSIDE drawer -->
                        <div class="flex items-center space-x-3 px-6 pt-6 pb-2">
                            <img src="{{ asset('images/logos/medicare-logo.png') }}" alt="Medicare Logo" class="h-10 w-auto">
                        </div>
                        <!-- Close button at upper right -->
                        <button
                            class="absolute top-6 right-6 text-gray-400 hover:text-gray-700 z-10"
                            @click="open = false"
                        >
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                        <!-- Mobile Navigation links -->
                        <nav class="flex flex-col w-full px-6 mt-1">
                            <a href="/" class="text-2xl font-semibold text-gray-900 py-3 border-b border-gray-200 hover:text-blue-600 transition" @click="open = false">Home</a>
                            <a href="#medicare-plans" class="text-2xl font-semibold text-gray-900 py-3 border-b border-gray-200 hover:text-blue-600 transition" @click="open = false">Medicare Plans</a>
                            <a href="#about" class="text-2xl font-semibold text-gray-900 py-3 border-b border-gray-200 hover:text-blue-600 transition" @click="open = false">About us</a>
                            <a href="#contact" class="text-2xl font-semibold text-gray-900 py-3 border-b border-gray-200 hover:text-blue-600 transition" @click="open = false">Contact us</a>
                            <a href="#blog" class="text-2xl font-semibold text-gray-900 py-3 border-b border-gray-200 hover:text-blue-600 transition" @click="open = false">Blog</a>
                        </nav>
                        <!-- Call button at the bottom -->
                        <div class="mt-auto px-6 pb-8 pt-6">
                            <a href="tel:8447316614"
                               class="flex items-center justify-center space-x-2 border border-orange-500 text-orange-500 px-4 py-3 rounded-full hover:bg-orange-50 transition text-lg font-semibold w-full">
                                <i class="fa-solid fa-phone"></i>
                                <span>(844) 731-6614</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<script src="//unpkg.com/alpinejs" defer></script>
