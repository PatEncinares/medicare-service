<section class="w-full bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Medical Insurance Provider Coverage</h2>
        <div 
            x-data="{
                states: [
                    'Alabama','Colorado','Iowa','Maine','Minnesota','Arizona','Connecticut','Kansas','Maryland','Mississippi',
                    'Arkansas','Delaware','Kentucky','Massachusetts','Missouri','California','Florida','Louisiana','Michigan','Montana',
                    // More states if needed
                    'Nevada','New York','New Jersey','Oregon','Texas','Washington','Wyoming','Idaho','Georgia','Hawaii'
                ],
                showAll: false,
                active: 'Iowa'
            }"
        >
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 text-center">
                <template x-for="(state, i) in (showAll ? states : states.slice(0, 20))" :key="state">
                    <button 
                        @click="active = state"
                        :class="active === state 
                            ? 'bg-orange-500 text-white' 
                            : 'bg-white text-gray-900 hover:bg-orange-100 transition'"
                        class="px-4 py-2 rounded-md shadow text-sm font-medium outline-none focus:ring-2 focus:ring-orange-400"
                        x-text="state">
                    </button>
                </template>
            </div>
            <div class="mt-8 text-center">
                <button 
                    class="text-orange-500 font-medium text-sm inline-flex items-center gap-1"
                    @click="showAll = !showAll"
                    x-text="showAll ? 'Load less' : 'Load more'">
                </button>
                <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" :d="showAll ? 'M19 15l-7-7-7 7' : 'M19 9l-7 7-7-7'" />
                </svg>
            </div>
        </div>
    </div>
</section>
