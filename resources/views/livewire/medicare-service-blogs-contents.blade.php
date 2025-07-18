<main class="bg-white w-full flex flex-col items-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
    <section class="max-w-4xl w-full mx-auto">
        <!-- Title -->
        <h1 class="text-gray-900 text-2xl sm:text-3xl md:text-4xl font-bold mb-4 leading-tight">
            {{ $post->title ?? 'Using Medicare Part B With Private Insurance' }}
        </h1>
        
        <!-- Featured Image -->
        <div class="rounded-2xl overflow-hidden mb-6">
            <img 
                src="{{ asset('images/blogs/blog1.png') }}" 
                alt="{{ $post->title ?? 'Blog Featured Image' }}"
                class="w-full h-[250px] md:h-[350px] object-cover object-center"
            />
        </div>
        
        <!-- Date -->
        <div class="text-gray-500 text-sm mb-4">
            {{ $post->published_at ?? 'Thu, May 8, 2025 10:35 PM' }}
        </div>

        <!-- Main Content -->
        <article class="prose max-w-none text-gray-800 text-base sm:text-lg leading-relaxed">
            <p>
                Navigating the world of health insurance can be like trying to read a map upside down—confusing, overwhelming, and full of jargon. If you're someone juggling Medicare Part B and private insurance, it's crucial to understand how Coordination of Benefits (COB) works. It’s not just about who pays first—it’s about making sure you get the coverage you’re entitled to without paying more than you should.
            </p>
            <p>
                So, how do Medicare and private insurance work together? Let’s break it down in a way that makes sense.
            </p>

            <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-3">What is Medicare Part B?</h2>
            <p>
                Medicare Part B is the part of Medicare that covers outpatient care, including doctor visits, lab tests, preventive services, and some home health care. Most people 65 and older, or those with certain disabilities, get the medical services they need without breaking the bank. It comes with a monthly premium, which for most people is deducted from their Social Security check.
            </p>
            <p>
                Want the full scoop on Part B? Here’s a helpful breakdown: <a href="#" class="text-orange-500 underline">What is Medicare Part B?</a>
            </p>

            <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-3">What does Medicare Part A cover?</h2>
            <p>
                Medicare Part A is the section of Medicare that primarily covers inpatient hospital stays, skilled nursing facility care, hospice care, and some home health care. Most people do not pay a premium for Part A if they or their spouse paid Medicare taxes while working. Understanding what Part A covers is essential for navigating your healthcare options.
            </p>
        </article>
    </section>
</main>
