@props(['clouds'])
<section>
    <div class="container mx-auto px-5 lg:px-0 py-20 flex flex-col justify-center text-center">
        <h1 class="text-3xl lg:text-4xl font-semibold text-textColor leading-tight mb-2">
            Cloud Hosting Indonesia <br>
            <span class="text-primary">Diskon Hingga 50%</span>
        </h1>

        <p class="text-base font-normal text-textColor mb-8">
            Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($clouds as $cloud)
            <div class="p-6 rounded-2xl shadow-md text-left">
                <h1 class="text-2xl font-semibold text-textColor">{{ $cloud['title'] }}</h1>
                <p class="text-sm font-medium text-textColor text-opacity-50">{{ $cloud['subtitle'] }}</p>

                <div class="my-5">
                    <span class="mr-1 text-xl font-normal text-textColor text-opacity-40 line-through">Rp {{ number_format($cloud['price'], 0, ',', '.') }}</span>
                    <span class="text-xl font-semibold text-primary">Rp {{ number_format($cloud['discount'], 0, ',', '.') }}</span>
                </div>

                <div class="mb-8">
                    <h4 class="text-sm font-medium text-textColor text-opacity-80">Resource</h4>
                    <ul class="flex flex-col gap-3.5 my-2">
                        @foreach ($cloud['resource'] as $resource)
                        <li class="flex items-center gap-2">
                            <x-icons.check-circle class="w-6 h-6 text-primary" />
                            <span class="font-normal text-base text-textColor">{!! $resource !!}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <a href="#" class="inline-block w-full py-3 bg-primary rounded-full text-base text-white font-medium text-center hover:bg-primary/90 focus:outline-none focus:ring-4 focus:ring-primary/50 transition-default">Pesan Sekarang</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
