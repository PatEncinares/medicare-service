
<section class="w-full flex justify-center px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="w-full max-w-[1500px]">
            <div class="grid grid-cols-3 sm:grid-cols-6 gap-6 sm:gap-12 items-center">
                @foreach (['cigna', 'humana', 'mutual-omaha', 'aetna', 'wellcare', 'wellcare'] as $logo)
                    <img src="{{ asset('images/logos/' . $logo . '.png') }}"
                        alt="{{ ucfirst($logo) }}"
                        class="h-10 sm:h-16 md:h-20 object-contain mx-auto" />
                @endforeach
            </div>
        </div>
</section>