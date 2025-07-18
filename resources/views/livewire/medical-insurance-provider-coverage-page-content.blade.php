<main class="bg-white min-h-screen px-4 sm:px-6 lg:px-8 py-8 sm:py-12 flex flex-col items-center">

    <!-- Title -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-6 mt-4">
        Medical Insurance in Alabama
    </h1>

    <!-- Breadcrumb -->
    <div class="flex items-center justify-center mb-7 text-gray-500 text-base">
        <span>Home</span>
        <span class="mx-2 text-lg">&gt;</span>
        <span class="font-semibold text-black">Alabama</span>
    </div>

    <!-- Search Input -->
    <div class="flex flex-row items-center justify-center gap-2 mb-10 w-full max-w-lg">
        <input 
            type="text"
            placeholder="Enter your Zip code"
            class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-orange-400 transition"
        />
        <button class="bg-orange-500 hover:bg-orange-600 text-white rounded-lg px-5 py-2 transition flex-shrink-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8" />
                <path d="M21 21l-3.5-3.5" />
            </svg>
        </button>
    </div>




    <!-- Blue Table Section -->
    <div class="w-full max-w-[1100px] rounded-xl border border-blue-200 bg-white shadow mb-8 p-0">
       <div class="px-4 pt-5 pb-3 sm:px-7 text-center sm:text-left">
            <h2 class="text-xl sm:text-2xl font-bold text-black mb-2">
                Find Medical Insurance near you!
            </h2>
            <div class="text-gray-700 mb-2 text-base">
                There are <span class="font-bold text-blue-700">838</span> result in Alabama.
            </div>
        </div>


        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-gray-800">
                <thead>
                    <tr class="bg-[#276D89] text-white">
                        <th class="py-3 px-4 font-semibold text-left rounded-tl-xl">AL</th>
                        <th class="py-3 px-4 font-semibold text-left">City</th>
                        <th class="py-3 px-4 font-semibold text-left rounded-tr-xl">Zip Code</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Repeat this row for each result -->
                    <tr class="border-b last:border-none hover:bg-blue-50">
                        <td class="py-3 px-4">AL</td>
                        <td class="py-3 px-4">ABBEVILLE</td>
                        <td class="py-3 px-4">36310</td>
                    </tr>
                    <tr class="border-b last:border-none hover:bg-blue-50">
                        <td class="py-3 px-4">AL</td>
                        <td class="py-3 px-4">ABBEVILLE</td>
                        <td class="py-3 px-4">36310</td>
                    </tr>
                    <tr class="border-b last:border-none hover:bg-blue-50">
                        <td class="py-3 px-4">AL</td>
                        <td class="py-3 px-4">ABBEVILLE</td>
                        <td class="py-3 px-4">36310</td>
                    </tr>
                    <tr class="border-b last:border-none hover:bg-blue-50">
                        <td class="py-3 px-4">AL</td>
                        <td class="py-3 px-4">ABBEVILLE</td>
                        <td class="py-3 px-4">36310</td>
                    </tr>
                    <!-- ... -->
                </tbody>
            </table>
        </div>
    </div>

       <!-- PROVIDER COVERAGE SECTION -->
    <livewire:partials.medical-insurance-provider-coverage />  
</main>
