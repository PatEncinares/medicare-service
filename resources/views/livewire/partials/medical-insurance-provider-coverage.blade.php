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