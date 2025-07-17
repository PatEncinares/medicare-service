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