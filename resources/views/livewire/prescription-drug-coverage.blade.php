<main class="bg-white w-full flex flex-col items-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
    <!-- Hero Section -->
    <section class="w-full max-w-[1500px] mx-auto rounded-2xl overflow-hidden mt-6 mb-16 relative shadow">
        <div class="relative w-full h-[650px] md:h-[400px]">
            <!-- Background Image: adjust object position on mobile -->
            <img 
                src="{{ asset('images/hero-images/drugs.png') }}" 
                alt="Medicare Part A"
                class="absolute inset-0 w-full h-full object-cover object-[80%] md:object-center"
            />
            <!-- Gradient Overlay -->
            {{-- <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-[#16739B] via-[#16739bcc] to-transparent"></div> --}}
            
            <!-- Content -->
            <div class="relative z-10 h-full flex flex-col justify-end items-start pb-10 px-6 md:justify-center md:pb-0 md:px-16">
                <h1 class="text-white text-3xl md:text-5xl font-bold mb-4 max-w-lg leading-tight drop-shadow">
                    Prescription Drug <br>
                    Coverage
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
                    What you need to know about Medicare Part D?
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                   Medicare Part D offers prescription drug coverage to anyone who is enrolled in Medicare. You can opt out of receiving this benefit, however if you choose not to sign up when you’re first eligible you will most likely pay a late enrollment penalty.
                </p>


                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    A few things about Medicare Part D:
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Medicare prescription drug coverage is available only through private health insurers that are approved by Medicare.<br><br>
                    You can purchase a stand-alone plan, or your prescription drug coverage can be bundled with your Medicare Advantage plan (Part C), but you must have Medicare Part A and Medicare Part B to join a Medicare Advantage plan.<br><br>
                    Prices and coverage may vary from plan to plan, so it will most likely be worth your while to shop around.<br><br>
                    If you don’t sign up for prescription drug coverage (or have some other form of creditable prescription drug coverage) as soon as you’re eligible, you may be charged a late enrollment penalty.<br><br>          
                </p>


                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    When to Enroll
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    You’re eligible for Medicare Part D:<br><br>
                    During your Initial Enrollment Period: Occurs when you turn 65 (you may enroll starting 3 months before your 65th birthday, the month of your birthday, and up to 3 months after your birth month)<br><br>
                    When you’re under 65 and disabled: Your Medicare coverage begins 24 months after you receive Social Security or Railroad Retirement Board disability benefits. You can sign up for Medicare Part D starting three months before your 25th month of getting these disability benefits, during the 25th month, or three months after the 25th month you received these benefits.<br><br>
                    If you enroll in Part B (whether or not you have Part A) during the General Enrollment Period from January 1 – March 31, you can sign up for Medicare Part D between April 1 and June 30.<br><br>

                    If you have Medicare Parts A and B and don’t want to switch to a Medicare Advantage plan, then you’ll need to enroll in a stand-alone plan to avoid a late enrollment penalty (unless you have creditable coverage or are receiving Extra Help). While many Medicare Advantage plans offer prescription drug coverage as part of the plan, there are some that don’t.
                </p>

                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    Things to Consider when Choosing a Prescription Drug Plan
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    While price is always important, it’s not the only thing to consider when shopping for a prescription drug plan. You’ll want to keep these other factors in mind when making a decision:
                </p>


                 <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    Formulary
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Each Medicare Prescription Drug Plan has its own formulary, which is a list of the covered prescription drugs that the plan covers. If one or more of the prescription medications you take is not on a plan’s formulary, you may want to look elsewhere or talk to your doctor about alternative medications.
                </p>


                 <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    Network
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Most plans have a network of pharmacies they want you to use in order to get better prices. If you go to a pharmacy that’s not in your plan’s network, you may have to pay more for your prescriptions.
                </p>


                 <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    Mail Order
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Some prescription drug plans can offer you a lower price if you get your medicine through a mail-order pharmacy. The plan may also require that you get a three-month supply at one time. In most cases, this isn’t a problem, but you may want to check with your doctor to make sure mail order is right for your medicines.
                </p>


                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900 leading-tight">
                    A Word about the Donut Hole
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    During your Medicare Prescription Drug Plan research, you’ve probably heard about the donut hole or coverage gap. The donut hole is a gap in coverage that occurs once you and your plan have met a pre-set spending limit for prescription drugs. When that limit is reached, $4,020 in 2020, you’re in the coverage gap and must pay for the cost of your prescription drugs. In 2020, once you’re in the coverage gap, you pay 25 percent of the cost for both brand-name and generic prescription drugs.<br><br>
                    In 2020, you remain in the donut hole until your out-of-pocket costs reach $6,350. Once that happens, you enter catastrophic coverage and leave the coverage gap. From there, you pay only a small co-pay or co-insurance for the rest of the year.<br><br>
                    Keep in mind that you may never reach the donut hole. What’s more, there are discounts available on both brand and generic prescription drugs for those who do reach the donut hole.<br><br>
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
