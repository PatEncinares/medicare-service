<main class="bg-white w-full flex flex-col items-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
    <!-- Hero Section -->
    <section class="w-full max-w-[1500px] mx-auto rounded-2xl overflow-hidden mt-6 mb-16 relative shadow">
        <div class="relative w-full h-[650px] md:h-[400px]">
            <!-- Background Image: adjust object position on mobile -->
            <img 
                src="{{ asset('images/hero-images/medigap.png') }}" 
                alt="Medicare Part A"
                class="absolute inset-0 w-full h-full object-cover object-[80%] md:object-center"
            />
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-[#16739B] via-[#16739bcc] to-transparent"></div>
            
            <!-- Content -->
            <div class="relative z-10 h-full flex flex-col justify-end items-start pb-10 px-6 md:justify-center md:pb-0 md:px-16">
                <h1 class="text-white text-3xl md:text-5xl font-bold mb-4 max-w-lg leading-tight drop-shadow">
                    Medigap – Medicare <br>
                    Supplement Insurance
                </h1>
                <p class="text-white/90 text-base md:text-lg mb-7 max-w-md drop-shadow">
                    Find an affordable Medicareservice Plan.
                </p>
                <a href="#consultation"
                    class="bg-orange-500 hover:bg-orange-600 text-white text-base font-semibold px-8 py-3 rounded-full transition shadow w-max">
                    Get Free Consultation
                </a>
            </div>
        </div>
    </section>

      <!-- Partner Logos Section -->
    <livewire:partials.partner-logos />


   <!-- Main Content Section: align with logo container and fill the width -->
   <section class="w-full px-4 sm:px-6 lg:px-8">
        <div class="max-w-[1500px] mx-auto">
            <div class="py-12">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    What is Medigap?
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Medigap is Medicare supplement insurance, which can help pay for health care costs that Medicare Parts A and B don’t cover. You will usually have to have Medicare Part A and Part B to buy a Medigap policy. Medigap policies cannot be obtained with Medicare Advantage. Medigap insurance is provided by private health insurance companies such as Aetna and WellCare, Cigna, and Humana. A Medicare supplement policy must follow Federal and state laws.
                </p>


                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    What are the eligibility and enrollment requirements?
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Medicare applicants who are eligible for a Medigap policy must also enroll in Medicare Part A and Part B to receive the benefits of a Medicare supplement health insurance plan. Medigap policies contain an additional monthly premium on top of Medicare Part B. You can discuss your Medicare supplement insurance plan options with one of our licensed sales agents. They can help you sort through the choices to find a plan that best fits your needs.
                </p>


                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    Is it a family or group plan?
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Medigap policies and other Medicare supplement insurance plans are not considered family or group plans. If you’re married, both you and your spouse will need to obtain a Medicare supplement insurance policy to receive the benefits. For additional Medicare and Medigap information, you can contact one of our licensed sales agents at Medicare Service.
                </p>

            </div>
        </div>
    </section>

        <!-- CUSTOMER TESTIMONIALS SECTION -->
    <livewire:partials.costumer-feed-backs />  


    <!-- FAQ SECTION -->
    <livewire:partials.frequently-asked-questions />     


    <!-- PROVIDER COVERAGE SECTION -->
    <livewire:partials.medical-insurance-provider-coverage />  


</main>
