<main class="bg-white w-full flex flex-col items-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
    <!-- Hero Section -->
    <section class="w-full max-w-[1500px] mx-auto rounded-2xl overflow-hidden mt-6 mb-16 relative shadow">
        <div class="relative w-full h-[650px] md:h-[400px]">
            <!-- Background Image: adjust object position on mobile -->
            <img 
                src="{{ asset('images/hero-images/medicare-part-c.png') }}" 
                alt="Medicare Part C"
                class="absolute inset-0 w-full h-full object-cover object-[80%] md:object-center"
            />
            <!-- Gradient Overlay -->
            {{-- <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-[#16739B] via-[#16739bcc] to-transparent"></div> --}}
            
            <!-- Content -->
            <div class="relative z-10 h-full flex flex-col justify-end items-start pb-10 px-6 md:justify-center md:pb-0 md:px-16">
                <h1 class="text-white text-3xl md:text-5xl font-bold mb-4 max-w-lg leading-tight drop-shadow">
                    What Does Medicare<br>
                    Part C Cover?
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
                    Medicare Part C Coverage
                </h2>
                <p class="text-base md:text-xl text-gray-700 mb-8">
                    Medicare Part C is sometimes called “hospital insurance.” In general, it covers inpatient care in hospitals, care in skilled nursing facilities, home health services, and hospice care. It can even help cover nursing home care (as long as it is not custodial or long-term care).
                </p>

                <h3 class="text-2xl md:text-3xl font-semibold mb-3 mt-10 text-gray-900">
                    Part C Enrollment
                </h3>
                <p class="text-base md:text-xl text-gray-700 mb-2">
                    Some individuals are automatically enrolled in Medicare Part A when they turn 65. However, if you aren’t getting Social Security or RRB (Railroad Retirement Board) benefits on your 65th birthday, you need to sign up for Medicare Part A. Another reason you might need to sign up is if you qualify for Medicare because you have End-Stage Renal Disease (ESRD).
                    Many people do not have to pay a monthly premium for Medicare Part A. If you or your spouse paid Medicare taxes for a total of 10 years while working, you will not have to pay this premium. For individuals with limited income and resources, your state may help you pay for Medicare Part A.
                    Even if you, or your spouse, did not pay Medicare taxes before retirement, you can still buy Medicare Part A if you are over 65 years old, meet U.S. citizenship and residency requirements, and aren’t entitled to Social Security, or if you are under 65, disabled, and lost your Medicare Part A coverage because you went back to work. Medicare does not require you to buy Part B, but you will be assessed a late penalty if you do not take it when it becomes available. If you have limited income, your state may provide financial assistance for your Medicare Part A and Part B coverage.
                </p>

                <h3 class="text-2xl md:text-3xl font-semibold mb-3 mt-10 text-gray-900">
                    Medicare Part C Hospital Coverage
                </h3>
                <p class="text-base md:text-xl text-gray-700 mb-2">
                    Medicare Part C will cover hospital stays if a doctor makes an official order which says you need two or more nights of medically necessary treatment and the hospital formally admits you. Medicare Part A also covers you if you need the kind of care that can only be given in a hospital and the hospital accepts Medicare. Hospital services such as anesthesia, chemotherapy, and inpatient dialysis are covered by Medicare Part A as long as they are deemed medically necessary. Personal care items and private rooms are not covered by Medicare Part A unless they are considered medically necessary.
                    Blood is another service that the Medicare Part A program covers. As long as the hospital receives blood from a blood bank without any charge, you do not need to worry about payment. However, if the hospital needs to purchase blood for you, you must either pay the hospital costs for the first 3 units of blood you get in a calendar year or have the blood donated. This service includes blood transfusions as well as other blood work you are given in a hospital.
                </p>

                <h3 class="text-2xl md:text-3xl font-semibold mb-3 mt-10 text-gray-900">
                    Medicare Part C Hospital Coverage
                </h3>
                <p class="text-base md:text-xl text-gray-700 mb-2">
                    Hospice, skilled nursing facility, and home health services are also covered by Medicare Part A. If you have a terminal illness, and your doctor has confirmed that you have 6 months or less to live, your hospice care (including pain relief, grief counseling, and other services) will be covered by Medicare. In order to receive skilled nursing facility care, a doctor must declare that you are in need of daily skilled care like physical therapy as long as you need and get the therapy services each day they’re offered. Home health services are also covered, provided you are under the care of a doctor and are also cared for by a Medicare-certified home health agency. You must be determined home-bound in order to receive these services, and the home health services are again limited to medically necessary care.
                </p>

                <h3 class="text-2xl md:text-3xl font-semibold mb-3 mt-10 text-gray-900 mt-10">
                    Part C Does Not Cover Private Nursing or Private Rooms
                </h3>
                <p class="text-base md:text-xl text-gray-700 mb-2">
                   Medicare Part C provides you with a semi-private room and meals in hospitals and nursing facilities. These services do not include private nursing or private rooms, and unless deemed medically necessary, also do not cover long-term or custodial care. Televisions and telephones are also not covered if they incur an additional charge.
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
