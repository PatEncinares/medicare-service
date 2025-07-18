<main class="bg-white w-full flex flex-col items-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
    <!-- Hero Section -->
    <section class="w-full max-w-[1500px] mx-auto rounded-2xl overflow-hidden mt-6 mb-16 relative shadow bg-[#0C6985]">
        <div class="flex flex-col justify-center items-center py-10 md:py-16 min-h-[230px] md:min-h-[350px]">
            <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-bold mb-6 text-center">
                Read Our Blogs
            </h1>
            <div class="flex items-center space-x-2 text-white/80 text-2xl sm:text-3xl md:text-4xl">
                <span>Home</span>
                <span>&gt;</span>
                <span class="text-white font-semibold">Blog</span>
            </div>
        </div>
    </section>

    <!-- Main Content Section: align with logo container and fill the width -->
    <section class="w-full px-4 sm:px-6 lg:px-8 mb-5" 
        x-data="{
            blogs: [
                {
                    img: '{{ asset('images/blogs/blog1.png') }}',
                    date: 'Thu, May 8, 2025 10:35 PM',
                    tags: ['medicare service', 'Medicare Part B'],
                    title: 'Using Medicare Part B With Private Insurance',
                    excerpt: 'Navigating the world of health insurance can be overwhelming. Learn how Medicare Part B works with private coverage...'
                },
                {
                    img: '{{ asset('images/blogs/blog2.png') }}',
                    date: 'Thu, May 8, 2025 10:35 PM',
                    tags: ['medicare service', 'Medicare Part B'],
                    title: 'What Medicare Covers for Pregnant Women',
                    excerpt: 'Navigating the world of health insurance can be overwhelming. Learn how Medicare Part B works with private coverage...'
                },
                {
                    img: '{{ asset('images/blogs/blog3.png') }}',
                    date: 'Thu, May 8, 2025 10:35 PM',
                    tags: ['medicare service', 'Medicare Part B'],
                    title: 'Understanding the Vital Role of Medicare for Older Adults',
                    excerpt: 'Navigating the world of health insurance can be overwhelming. Learn how Medicare Part B works with private coverage...'
                },
                {
                    img: '{{ asset('images/blogs/blog1.png') }}',
                    date: 'Thu, May 8, 2025 10:35 PM',
                    tags: ['medicare service', 'Medicare Part B'],
                    title: 'Extra Blog Example 1',
                    excerpt: 'This is extra blog content to test the Load More button.'
                },
                {
                    img: '{{ asset('images/blogs/blog2.png') }}',
                    date: 'Thu, May 8, 2025 10:35 PM',
                    tags: ['medicare service', 'Medicare Part B'],
                    title: 'Extra Blog Example 2',
                    excerpt: 'This is extra blog content to test the Load More button.'
                },
                {
                    img: '{{ asset('images/blogs/blog3.png') }}',
                    date: 'Thu, May 8, 2025 10:35 PM',
                    tags: ['medicare service', 'Medicare Part B'],
                    title: 'Extra Blog Example 3',
                    excerpt: 'This is extra blog content to test the Load More button.'
                },
            ],
            initialCount: 3,
            showAll: false,
            get visible() { return this.showAll ? this.blogs.length : this.initialCount }
        }"
    >
        <div class="max-w-[1500px] mx-auto">
            <!-- Blog Card Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="(blog, i) in blogs.slice(0, visible)" :key="i">
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col overflow-hidden mb-5 h-[500px]">
                        <!-- Image -->
                        <img :src="blog.img" alt="Blog Thumbnail" class="w-full h-[325px] object-cover object-center">
                        <!-- Card Content -->
                        <div class="p-5 flex flex-col flex-1">
                            <div class="text-[13px] text-gray-500 mb-2 leading-tight" x-text="blog.date"></div>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <template x-for="tag in blog.tags">
                                    <span class="bg-gray-100 text-gray-700 text-xs font-medium px-3 py-[2px] rounded-full" x-text="tag"></span>
                                </template>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1 leading-snug" x-text="blog.title"></h3>
                            <p class="text-base text-gray-600 mb-1 leading-relaxed line-clamp-2" x-text="blog.excerpt"></p>
                        </div>
                    </div>
                </template>
            </div>
            <!-- Load More / Load Less Button -->
            <div class="flex justify-center mt-8" x-show="blogs.length > initialCount">
                <button
                    @click="showAll = !showAll"
                    class="border border-orange-400 text-orange-500 font-semibold rounded-full px-6 py-2 text-base flex items-center gap-2 hover:bg-orange-50 transition"
                >
                    <span x-text="showAll ? 'Load less' : 'Load more'"></span>
                    <svg x-show="!showAll" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 10l-5 5-5-5"/>
                    </svg>
                    <svg x-show="showAll" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 14l5-5 5 5"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- PROVIDER COVERAGE SECTION -->
    <livewire:partials.medical-insurance-provider-coverage />  
</main>
