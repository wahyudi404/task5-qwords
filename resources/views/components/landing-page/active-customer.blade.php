@props(['customers'])
<section>
    <div class="container mx-auto px-4 lg:px-0 py-20 flex flex-col justify-center text-center">
        <h1 class="text-3xl lg:text-4xl font-semibold text-textColor leading-tight mb-2">
            Telah Dipercaya oleh 45.000+ Pelanggan Aktif
        </h1>

        <div class="flex justify-start items-center overflow-x-auto">
            <swiper-container init="false" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                @foreach ($customers as $customer)
                    <swiper-slide class="p-4">
                        <img class="w-full object-contain saturate-0 hover:saturate-100 transition-all-default"
                            src="{{ asset($customer['logo']) }}" alt="{{ $customer['title'] }}">
                    </swiper-slide>
                @endforeach
            </swiper-container>
        </div>
    </div>

    <script>
        const swiperEl = document.querySelector('swiper-container')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            grabCursor: true,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
        swiperEl.initialize();
    </script>
</section>
