@props(['testimonials'])
<section>
    <div class="container mx-auto px-4 lg:px-0 py-20 text-center">
        <h1 class="text-3xl lg:text-4xl font-semibold text-textColor leading-tight mb-2">
            Apa Kata Mereka?
        </h1>

        <p class="text-base mx-auto md:w-3/4 font-normal text-textColor mb-10">
            Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak pengalaman mereka
            yang telah membuktikan sendiri fitur dari layanan kami.
        </p>

        <swiper-container pagination="true" pagination-clickable="true" grab-cursor="true" space-between="30" loop="true">
            @foreach ($testimonials as $testimonial)
                <swiper-slide>
                    <div class="card text-center mb-8">
                        <div class="flex flex-col justify-center items-center mb-6">
                            <img class="w-80 h-auto" src="{{ asset($testimonial['photo_url']) }}"
                                alt="{{ $testimonial['name'] }}">
                            <h1 class="text-2xl font-bold text-textColor">{{ $testimonial['name'] }}</h1>
                            <h4 class="text-sm font-normal text-gray-400">{{ $testimonial['position'] }}</h4>
                        </div>
                        <div class="mb-6 mx-auto w-full md:w-[80%] lg:w-3/5 text-textColor">
                            <p class="text-base md:text-lg font-medium">{{ $testimonial['comment'] }}</p>
                            <p class="text-sm md:text-base font-light">{{ $testimonial['desc'] }}</p>
                        </div>
                        <a href="#"
                            class="text-base md:text-lg font-medium text-primary hover:text-primary/90 transition-default">Lihat
                            Video Lainnya</a>
                    </div>
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>
</section>
