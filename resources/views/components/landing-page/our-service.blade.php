@props(['ourservices'])
<section class="bg-secondary">
    <div class="container mx-auto px-4 lg:px-0 py-20 flex flex-col justify-center text-center">
        <h1 class="text-3xl lg:text-4xl font-semibold text-textColor leading-tight mb-2">
            Lihat Juga Layanan Kamu Lainnya
        </h1>

        <p class="text-base font-normal text-textColor mb-8">
            Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($ourservices as $ourservice)
            <div class="card p-6 bg-white rounded-2xl shadow-md text-textColor text-left">
                <div class="flex items-center gap-2">
                    <img src="{{ asset($ourservice['img_url']) }}" :alt="$ourservice['title']">
                    <h1 class="text-2xl font-semibold">{{ $ourservice['title'] }}</h1>
                </div>

                <p class="my-4 text-base font-normal text-textColor text-opacity-90">
                    {{ $ourservice['desc'] }}
                </p>

                <p class="text-lg font-medium">Mulai Dari</p>
                <div class="mb-8">
                    <span class="text-2xl font-semibold text-primary">Rp {{ number_format($ourservice['price'], 0, ',', '.') }}</span>
                    <span class="text-base font-medium text-textColor">{{ $ourservice['each'] }}</span>
                </div>

                <a href="#" class="inline-block w-full py-3 bg-primary rounded-full text-white text-base font-medium text-center hover:bg-primary/90 focus:outline-none focus:ring-4 focus:ring-primary/90 shadow">Pesan Sekarang</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
