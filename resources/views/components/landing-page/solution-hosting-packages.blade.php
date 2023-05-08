@props(['solutions'])
<section>
    <div class="container mx-auto px-4 lg:px-0 py-20 flex flex-col justify-center text-center">
        <h1 class="text-3xl lg:text-4xl font-semibold text-textColor leading-tight mb-2">
            Solusi Paket Hosting Terbaik Dari Kami
        </h1>

        <p class="text-base font-normal text-textColor mb-8">
            Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem Anda.
            <br class="hidden lg:block">Mulai dari blog hingga website bisnis dan perusahaan
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-6">
            @foreach ($solutions as $solution)
                <div class="card min-h-[240px] relative bg-primary p-6 text-left text-white rounded-2xl overflow-hidden shadow-md"
                style="background-image: url('{{ $solution['img_url'] }}'); background-size: cover; background-position: center;">
                    <h1 class="text-xl font-semibold mb-2">{{ $solution['title'] }}</h1>
                    <p class="text-sm font-light w-3/4">{{ $solution['desc'] }}</p>

                </div>
            @endforeach
        </div>
    </div>
</section>
