<nav class="bg-white shadow-sm w-full">
    <div class="w-full max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logos/medicare-logo.png') }}" alt="Medicare Logo" class="h-10 w-auto">
                <span class="text-xl font-bold text-gray-800">
                    MEDICARE <span class="text-blue-500">SERVICE</span>
                </span>
            </div>

            <!-- Navigation -->
            <div class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="#medicare-plans" class="hover:text-blue-600">Medicare Plans</a>
                <a href="#about" class="hover:text-blue-600">About us</a>
                <a href="#contact" class="hover:text-blue-600">Contact us</a>
                <a href="#blog" class="hover:text-blue-600">Blog</a>
            </div>

            <!-- Contact Button -->
            <div class="hidden md:flex">
                <a href="tel:8447316614"
                   class="flex items-center space-x-2 border border-orange-500 text-orange-500 px-4 py-2 rounded-full hover:bg-orange-50 transition">
                    <i class="fa-solid fa-phone"></i>
                    <span>(844) 731-6614</span>
                </a>
            </div>
        </div>
    </div>
</nav>
