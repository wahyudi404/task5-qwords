@props(['commitments'])
<section class="bg-secondary">
    <div class="container mx-auto px-4 lg:px-0 py-20 flex flex-col justify-center text-center">
        <h1 class="text-3xl lg:text-4xl font-semibold text-textColor leading-tight mb-2">
            Komitmen Qwords
        </h1>

        <p class="text-base font-normal text-textColor mb-8">
            Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords
        </p>

        <div class="flex flex-wrap justify-center items-stretch">
            @foreach ($commitments as $commitment)
                <div class="card basis-full md:basis-1/2 lg:basis-1/3 p-3">
                    <div class=" h-full bg-white rounded-2xl p-8 hover:shadow-md transition-default">
                        <img class="inline-block aspect-square mb-4" src="{{ asset($commitment['icon']) }}" alt="{{ $commitment['title'] }}">
                        <h1 class="text-xl font-bold text-primary mb-2.5">{{ $commitment['title'] }}</h1>
                        <p class="text-base font-normal text-textColor text-justify md:text-center text-opacity-75">{{ $commitment['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
