<main>
    <section class="w-full bg-white">
        <!-- HERO SECTION -->
        <div class="w-full bg-white flex justify-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
            <div class="relative w-full max-w-[1700px] h-auto sm:h-[700px] overflow-hidden rounded-2xl shadow-lg">
                <!-- Background Image -->
                <img src="{{ asset('images/hero-images/hero-image.png') }}"
                    alt="Medicare help"
                    class="absolute inset-0 w-full h-full object-cover opacity-80" />

                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-b sm:bg-gradient-to-r from-[#0C6985] via-[#0C6985cc] to-transparent z-10"></div>

                <!-- Content -->
                <div class="relative z-20 w-full h-full px-6 sm:px-12 lg:px-24 pt-32 sm:pt-40 lg:pt-70 pb-16 text-white">
                    <div class="max-w-2xl w-full text-center sm:text-left">
                        <h1 class="text-3xl sm:text-6xl font-bold leading-tight sm:leading-snug mb-6 sm:mb-8">
                            Trusted Medicare Help,<br class="hidden sm:block">Tailored Just for You
                        </h1>
                        <p class="text-base sm:text-xl mb-6 sm:mb-8 text-white/90">
                            We help seniors and families easily understand and enroll in the best Medicare plans—at no extra cost to you.
                        </p>

                        <!-- Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 w-full sm:w-auto sm:inline-flex justify-center sm:justify-start">
                            <a href="#consultation"
                            class="bg-orange-500 text-white text-center px-6 py-3 rounded-full font-medium hover:bg-orange-600 transition">
                                Get Free Consultation
                            </a>
                            <a href="tel:8447316614"
                            class="border border-white text-white text-center px-6 py-3 rounded-full font-medium hover:bg-white hover:text-black transition">
                                📞 Call Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- PARTNER LOGOS -->
        <div class="w-full flex justify-center px-4 sm:px-6 lg:px-8 py-14 sm:py-20">
            <div class="w-full max-w-[1700px]">
                <div class="grid grid-cols-3 sm:grid-cols-6 gap-6 sm:gap-12 items-center">
                    @foreach (['cigna', 'humana', 'mutual-omaha', 'aetna', 'wellcare', 'wellcare'] as $logo)
                        <img src="{{ asset('images/logos/' . $logo . '.png') }}"
                            alt="{{ ucfirst($logo) }}"
                            class="h-12 sm:h-16 md:h-20 object-contain mx-auto" />
                    @endforeach
                </div>
            </div>
        </div>


        <!-- SIMPLIFY MEDICARE SECTION -->
        <div class="w-full flex justify-center px-4 sm:px-6 lg:px-8 py-14">
            <div class="w-full max-w-[1700px]">
                <div class="flex flex-col lg:flex-row items-stretch gap-10">
                    <!-- Image Grid: Appears first on mobile, left on desktop -->
                    <div class="order-1 lg:order-1 w-full lg:w-1/2 grid grid-cols-3 grid-rows-2 gap-4 sm:gap-6">
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

                    <!-- Text Section: Appears second on mobile, right on desktop -->
                    <div class="order-2 lg:order-2 w-full lg:w-1/2 flex flex-col justify-center mt-10 lg:mt-0">
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
        </div>


       <!-- MEDICARE SERVICES SECTION -->
        <section class="w-full bg-[#F7FAFC] py-20">
            <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-gray-900 mb-14">Our Medicare Services</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    @foreach ([
                        ['title' => 'Medicare Part A – Hospital Insurance', 'desc' => 'Helps cover inpatient hospital stays...', 'icon' => 'tele.png'],
                        ['title' => 'Medicare Part B – Medical Insurance', 'desc' => 'Covers doctor visits, outpatient care...', 'icon' => 'tele.png'],
                        ['title' => 'Medicare Part C – Medicare Advantage', 'desc' => 'An all-in-one alternative to Original Medicare...', 'icon' => 'tele.png']
                    ] as $service)
                        <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-200">
                            <div class="mb-5">
                                <img src="{{ asset('images/icons/' . $service['icon']) }}" alt="Icon" class="w-12 h-12 mx-auto">
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                            <p class="text-base text-gray-600 mb-4">{{ $service['desc'] }}</p>
                            <a href="#" class="text-orange-500 text-base font-semibold inline-flex items-center">Learn more →</a>
                        </div>
                    @endforeach
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
