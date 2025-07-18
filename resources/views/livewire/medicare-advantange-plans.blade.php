<main class="bg-white w-full flex flex-col items-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
    <!-- Hero Section -->
    <section class="w-full max-w-[1500px] mx-auto rounded-2xl overflow-hidden mt-6 mb-16 relative shadow">
        <div class="relative w-full h-[650px] md:h-[400px]">
            <!-- Background Image: adjust object position on mobile -->
            <img 
                src="{{ asset('images/hero-images/advantage-plan.png') }}" 
                alt="Medicare Part A"
                class="absolute inset-0 w-full h-full object-cover object-[80%] md:object-center"
            />
           <!-- Left-side gradient: only visible on sm and up -->
            <div 
                class="hidden sm:block absolute z-10 w-full h-full left-0 top-0 pointer-events-none"
                style="
                    background: linear-gradient(
                        to right,
                        rgba(12,105,133,0.55) 0%,
                        rgba(12,105,133,0.28) 40%,
                        rgba(12,105,133,0.07) 60%,
                        rgba(12,105,133,0) 100%
                    );
                ">
            </div>

            <!-- Bottom gradient: only visible on mobile -->
            <div 
                class="block sm:hidden absolute z-10 w-full h-full left-0 top-0 pointer-events-none"
                style="
                    background: linear-gradient(
                        to top,
                        rgba(12,105,133,0.66) 0%,
                        rgba(12,105,133,0.22) 55%,
                        rgba(12,105,133,0) 100%
                    );
                ">
            </div>

            
            <!-- Content -->
            <div class="relative z-10 h-full flex flex-col justify-end items-start pb-10 px-6 md:justify-center md:pb-0 md:px-16">
                <h1 class="text-white text-3xl md:text-5xl font-bold mb-4 max-w-lg leading-tight drop-shadow">
                    Medicare Advantage Plans
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
                    What is Medicare Advantage Plans?
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Medicare Advantage plans may offer additional benefits that may not be available through Medicare Parts A and B. Medicare Advantage plans are offered through private insurance companies and can be customized for your own unique needs. There are different types of Medicare Advantage plans: Preferred Provider Organizations (PPOs), Health Maintenance Organizations (HMOs), Private Fee-for-Service Plans (PFFS), Special Needs Plans (SNP), Medicare Medical Savings Account Plans (MSA) and HMO Point of Service Plans (HMOPOS).
                    One important difference between them is where you can get covered treatment. A Preferred Provider Organization has what is commonly referred to as a network of coverage. This means that there is a network of preferred facilities and physicians that are pre-approved for coverage with your plan. As long as you stay within this network, you will not incur any unexpected costs from covered procedures and examinations. The Medicare Advantage Plan you choose can also make a difference in your out-of-pocket costs and have may have different rules for how you get certain services like whether you need a referral to see a specialist.
                    Health Maintenance Organizations have a network of pre-approved service providers that will be covered within your plan, however, one main difference is that in most cases you must select a primary care physician. This primary care physician acts as your personal doctor, but also as your health care coordinator. If you ever needed to see a specialty doctor who was not in your HMO plan network, your primary care physician could offer you a referral if they deemed it necessary. You may need to obtain a referral from your primary care physician in order for the service to be covered.
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
