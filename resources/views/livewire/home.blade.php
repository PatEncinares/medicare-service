<main class="bg-white w-full flex flex-col items-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
    <!-- Hero Section -->
    <section class="relative w-full max-w-[1500px] h-auto sm:h-[650px] overflow-hidden rounded-2xl shadow-lg mb-10 bg-white">
        <!-- Background Image -->
        <img src="{{ asset('images/hero-images/hero-image.png') }}"
            alt="Medicare help"
            class="block absolute inset-0 w-full h-[420px] sm:h-full object-cover opacity-80" />

        <!-- Gradient Overlay: full on desktop, bottom half on mobile -->
        <div 
            class="absolute z-10 w-full left-0"
            style="
                height: 100%;
            ">
            <!-- Desktop: full overlay, Mobile: gradient bottom only -->
            <div class="hidden sm:block absolute inset-0 bg-gradient-to-r from-[#0C6985] via-[#0C6985cc] to-transparent h-full w-full"></div>
            <div class="block sm:hidden absolute bottom-0 left-0 w-full h-2/3 bg-gradient-to-b from-transparent via-[#0C6985cc] to-[#0C6985]"></div>
        </div>

        <!-- Content always above -->
        <div class="relative z-20 w-full h-[650px] sm:h-full px-6 sm:px-12 lg:px-24 pt-60 sm:pt-40 lg:pt-60 pb-8 sm:pb-16 text-white flex flex-col items-start justify-center">
            <div class="max-w-2xl w-full sm:text-left">
                <h1 class="text-3xl sm:text-6xl font-bold leading-tight sm:leading-snug mb-6 sm:mb-8">
                    Trusted Medicare Help,<br class="hidden sm:block">Tailored Just for You
                </h1>
                <p class="text-base sm:text-xl mb-6 sm:mb-8 text-white/90">
                    We help seniors and families easily understand and enroll in the best Medicare plans—at no extra cost to you.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full sm:w-auto sm:inline-flex justify-start">
                    <a href="#consultation"
                    class="bg-orange-500 text-white text-center px-6 py-3 rounded-full font-medium hover:bg-orange-600 transition">
                        Get Free Consultation
                    </a>
                    <a href="tel:8447316614"
                    class="border border-white text-white text-center px-6 py-3 rounded-full font-medium hover:bg-white hover:text-black transition">
                        <i class="fa-solid fa-phone mr-2"></i>Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Partner Logos Section -->
    <section class="w-full flex justify-center px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="w-full max-w-[1500px]">
            <div class="grid grid-cols-3 sm:grid-cols-6 gap-6 sm:gap-12 items-center">
                @foreach (['cigna', 'humana', 'mutual-omaha', 'aetna', 'wellcare', 'wellcare'] as $logo)
                    <img src="{{ asset('images/logos/' . $logo . '.png') }}"
                        alt="{{ ucfirst($logo) }}"
                        class="h-10 sm:h-16 md:h-20 object-contain mx-auto" />
                @endforeach
            </div>
        </div>
    </section>


    <!-- SIMPLIFY MEDICARE SECTION -->
    <section class="w-full flex justify-center px-4 sm:px-6 lg:px-8 py-6 sm:py-14">
        <div class="w-full max-w-[1500px]">
            <div class="flex flex-col lg:flex-row items-stretch gap-10 h-full">
                <!-- Image Grid -->
                <div class="order-1 lg:order-1 w-full lg:w-1/2 grid grid-cols-3 grid-rows-2 gap-4 sm:gap-6 h-full">
                    <div class="col-span-2 row-span-2">
                        <img src="{{ asset('images/sections/doctor.png') }}" alt="Happy senior"
                            class="rounded-xl w-full h-full object-cover" />
                    </div>
                    <div class="col-span-1 row-span-1">
                        <img src="{{ asset('images/sections/hand.png') }}" alt="Handshake"
                            class="rounded-xl w-full h-full object-cover" />
                    </div>
                    <div class="col-span-1 row-span-1">
                        <img src="{{ asset('images/sections/doctor-consult.png') }}" alt="Doctor"
                            class="rounded-xl w-full h-full object-cover" />
                    </div>
                </div>

                <!-- Text Section, perfectly centered on desktop -->
                <div class="order-2 lg:order-2 w-full lg:w-1/2 flex flex-col lg:justify-center h-full">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 text-gray-900 leading-tight">
                        We’re Here to Simplify Medicare for You
                    </h2>
                    <p class="text-base sm:text-lg md:text-xl text-gray-700 mb-8 leading-relaxed">
                        At Medicare Service, we’ve helped thousands of Americans navigate their Medicare options with confidence.
                        Our licensed agents offer personalized guidance and make sure you understand your coverage choices.
                    </p>
                    <div>
                        <h3 class="font-semibold text-lg sm:text-xl mb-4 text-gray-900">Key Features</h3>
                        <ul class="space-y-4">
                            @foreach ([
                                'No-cost consultations',
                                'Licensed & experienced agents',
                                'Personalized Medicare plans',
                                'Support through the enrollment process'
                            ] as $feature)
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 w-3.5 h-3.5 bg-orange-400 rounded-full inline-block shrink-0"></span>
                                    <span class="text-base sm:text-lg">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEDICARE SERVICES SECTION -->
    <section 
        x-data="{
            idx: 0,
            services: [
                {
                    title: 'Medicare Part A – Hospital Insurance',
                    desc: 'Helps cover inpatient hospital stays, skilled nursing facility care, hospice care, and some home health care. Most people don\'t pay a premium if they paid Medicare taxes while working.',
                    icon: 'tele.png',
                    link: '#'
                },
                {
                    title: 'Medicare Part B – Medical Insurance',
                    desc: 'Covers doctor visits, outpatient care, preventive services, and medical supplies like lab tests and screenings. It typically requires a monthly premium.',
                    icon: 'tele.png',
                    link: '#'
                },
                {
                    title: 'Medicare Part C – Medicare Advantage',
                    desc: 'An all-in-one alternative to Original Medicare (Parts A & B) offered by private insurance companies. Often includes extra benefits like dental, vision, hearing, and prescription drug coverage.',
                    icon: 'tele.png',
                    link: '#'
                }
            ],
            showIndex(i) {
                // Show current for mobile, show 3 (idx, idx+1, idx+2) for desktop
                if(window.innerWidth >= 768) {
                    // Desktop: show idx, idx+1, idx+2
                    const n = this.services.length;
                    return i === this.idx 
                        || i === (this.idx+1)%n 
                        || i === (this.idx+2)%n;
                } else {
                    // Mobile: only current idx
                    return i === this.idx;
                }
            }
        }"
        x-init="window.addEventListener('resize', () => $forceUpdate())"
        class="w-full bg-[#F7FAFC] py-20"
    >
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-8">
                <h2 class="text-4xl font-bold text-gray-900 flex-1">Our Medicare Services</h2>
                <!-- Arrows -->
                <div class="flex gap-2 items-center">
                    <button
                        class="w-8 h-8 rounded-full bg-gray-200 text-gray-700 flex items-center justify-center hover:bg-orange-500 hover:text-white transition"
                        @click="idx = (idx === 0) ? services.length - 1 : idx - 1"
                        aria-label="Previous"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button
                        class="w-8 h-8 rounded-full bg-orange-500 text-white flex items-center justify-center hover:bg-orange-600 transition"
                        @click="idx = (idx+1) % services.length"
                        aria-label="Next"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Carousel Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 transition-all">
                <template x-for="(service, i) in services" :key="i">
                    <div x-show="showIndex(i)" x-transition
                        class="bg-white p-8 rounded-2xl shadow-md border border-gray-200 flex flex-col"
                        style="display: none;">
                        <div class="mb-5 flex items-center">
                            <img :src="'{{ asset('images/icons/') }}/' + service.icon" alt="" class="w-16 h-16">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3" x-text="service.title"></h3>
                        <p class="text-base text-gray-600 mb-4" x-text="service.desc"></p>
                        <a :href="service.link" class="text-orange-500 text-base font-semibold inline-flex items-center">Learn more →</a>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS SECTION -->
        <section class="w-full bg-white py-24">
            <div class="max-w-screen-xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold text-gray-900 mb-14">How It Works</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                    @foreach ([
                        ['icon' => 'time.png', 'title' => 'Schedule a Free Call', 'desc' => 'Talk to a licensed agent who understands your needs.', 'cta' => 'Call Now'],
                        ['icon' => 'plan.png', 'title' => 'Get Personalized Plan Options', 'desc' => 'We’ll guide you through the best plans based on your location, doctors, and prescriptions.'],
                        ['icon' => 'enroll.png', 'title' => 'Enroll with Confidence', 'desc' => 'We handle the enrollment so you can relax knowing you’re covered.']
                    ] as $step)
                        <div class="flex flex-col items-center text-center">
                            <div class="bg-[#E6F2F6] p-5 rounded-full mb-5">
                                <img src="{{ asset('images/icons/' . $step['icon']) }}" alt="Icon" class="w-10 h-10">
                            </div>
                            <h3 class="font-semibold text-xl text-gray-800 mb-3">{{ $step['title'] }}</h3>
                            <p class="text-base text-gray-600">{{ $step['desc'] }}</p>
                            @if (isset($step['cta']))
                                <span class="mt-3 text-orange-500 text-base font-semibold">{{ $step['cta'] }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CUSTOMER TESTIMONIALS SECTION -->
        <section 
            x-data="{
                idx: 0,
                testimonials: [
                    {
                        quote: 'Switching from my employer insurance to Medicare felt like jumping into the unknown. Thankfully, Medicare Service made it painless. They took the time to understand my situation and explained all my options clearly. They even checked that my heart specialist and medications were covered. I’ve already recommended them to my sister. Excellent service!',
                        name: 'Neyman',
                        title: 'CEO, Sugar Cosmetics',
                        avatar: 'neyman.jpg'
                    },
                    {
                        quote: 'I turned 65 this year and had no idea how Medicare worked. I was getting so many calls and was overwhelmed until a friend told me about Medicare Service. My experience was friendly, patient, and caring. They helped me pick a Medicare Advantage plan that didn’t cost me a dime. I never felt pressured—just supported!',
                        name: 'Jane Doe',
                        title: 'Retired Teacher',
                        avatar: 'jane.jpg'
                    },
                    {
                        quote: 'The enrollment process was so easy. I wasn’t sure what plan was right for me, but I got honest advice, and everything changed. My agent took time to listen to my story, explained things in a way I understood, and helped me find a plan that covered my doctors and prescriptions. Best of all, it didn’t cost me a dime. I now recommend them for Medicare coverage.',
                        name: 'Samuel Green',
                        title: 'Veteran',
                        avatar: 'samuel.jpg'
                    }
                ],
                showIndex(i) {
                    // Desktop: show idx, idx+1, idx+2; Mobile: only idx
                    if(window.innerWidth >= 768) {
                        const n = this.testimonials.length;
                        return i === this.idx || i === (this.idx+1)%n || i === (this.idx+2)%n;
                    } else {
                        return i === this.idx;
                    }
                }
            }"
            x-init="window.addEventListener('resize', () => $forceUpdate())"
            class="w-full bg-[#F7FAFC] py-16"
        >
            <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center mb-8">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 flex-1">What Our Customer Says</h2>
                    <!-- Arrows -->
                    <div class="flex gap-2 items-center">
                        <button
                            class="w-8 h-8 rounded-full bg-gray-200 text-gray-700 flex items-center justify-center hover:bg-orange-500 hover:text-white transition"
                            @click="idx = (idx === 0) ? testimonials.length - 1 : idx - 1"
                            aria-label="Previous"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button
                            class="w-8 h-8 rounded-full bg-orange-500 text-white flex items-center justify-center hover:bg-orange-600 transition"
                            @click="idx = (idx+1) % testimonials.length"
                            aria-label="Next"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <template x-for="(testimonial, i) in testimonials" :key="i">
                        <div x-show="showIndex(i)" x-transition
                            class="bg-white p-7 rounded-2xl shadow-md border border-gray-200 flex flex-col h-full relative"
                            style="display: none;">
                            <!-- Quote Icon -->
                            <div class="text-orange-500 text-3xl mb-3">
                                <svg fill="currentColor" viewBox="0 0 24 24" class="w-8 h-8"><path d="M9.17 6A7 7 0 0 0 2 13c0 3.31 2.69 6 6 6s6-2.69 6-6c0-2.38-1.68-4.41-4-4.9V6zm0 2.04c1.8.25 3 1.81 3 3.96 0 2.21-1.79 4-4 4s-4-1.79-4-4c0-2.15 1.2-3.71 3-3.96V8.04zm9.83-2.04a7 7 0 0 0-7 7c0 3.31 2.69 6 6 6s6-2.69 6-6c0-2.38-1.68-4.41-4-4.9V6zm0 2.04c1.8.25 3 1.81 3 3.96 0 2.21-1.79 4-4 4s-4-1.79-4-4c0-2.15 1.2-3.71 3-3.96V8.04z"></path></svg>
                            </div>
                            <blockquote class="text-gray-800 text-base leading-relaxed mb-6" x-text="testimonial.quote"></blockquote>
                            <div class="flex items-center mt-auto pt-3">
                                <img :src="'/images/avatars/' + testimonial.avatar" alt="" class="w-10 h-10 rounded-full mr-3 object-cover border border-gray-200">
                                <div>
                                    <div class="font-bold text-gray-900 text-base" x-text="testimonial.name"></div>
                                    <div class="text-xs text-gray-500" x-text="testimonial.title"></div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>



        <!-- FAQ SECTION -->
        <section class="w-full bg-white py-20">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Frequently Asked Questions</h2>
                <div class="space-y-5">
                    @foreach ([
                        ['q' => 'Do I have to pay for your services?', 'a' => 'No, our help is 100% free...'],
                        ['q' => 'When can I enroll in Medicare?'],
                        ['q' => 'What’s the difference between Medicare Part A, B, C, and D?'],
                        ['q' => 'Can I change my Medicare plan later?'],
                        ['q' => 'Will I lose my doctor if I switch plans?']
                    ] as $faq)
                        <details class="bg-gray-50 p-6 rounded-md shadow-sm border border-gray-200 text-left">
                            <summary class="text-lg font-medium cursor-pointer">{{ $faq['q'] }}</summary>
                            @if(isset($faq['a']))
                                <p class="mt-3 text-base text-gray-700">{{ $faq['a'] }}</p>
                            @endif
                        </details>
                    @endforeach
                </div>
            </div>
        </section>


         <!-- PROVIDER COVERAGE SECTION -->
        <section class="w-full bg-gray-50 py-16">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Medical Insurance Provider Coverage</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 text-center">
                    @foreach (['Alabama','Colorado','Iowa','Maine','Minnesota','Arizona','Connecticut','Kansas','Maryland','Mississippi','Arkansas','Delaware','Kentucky','Massachusetts','Missouri','California','Florida','Louisiana','Michigan','Montana'] as $state)
                        <span class="{{ $state === 'Iowa' ? 'bg-orange-500 text-white' : 'bg-white' }} px-4 py-2 rounded-md shadow text-sm">{{ $state }}</span>
                    @endforeach
                </div>
                <div class="mt-8 text-center">
                    <button class="text-orange-500 font-medium text-sm inline-flex items-center gap-1">
                        Load more
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </section>








</main>
