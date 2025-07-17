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