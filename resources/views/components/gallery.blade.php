<section class="space-y-10">

    @if (Route::currentRouteName() !== 'gallery')
    <h1 class="text-2xl md:text-3xl font-medium font-sans text-[#0d321b] w-full">Galeri</h1>
    @endif

    <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
        @foreach ($gallerys as $gallery)
        <div class=" border relative w-full group mx-auto h-[13rem] md:h-[19rem] lg:h-[25rem] xl:h-[28rem] overflow-hidden rounded-lg cursor-pointer">
            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->description }}" class="w-full h-full relative z-0 rounded-lg transition-all duration-300 hover:scale-110 object-cover">



            <div class="absolute opacity-0 group-hover:opacity-100 scale-90 group-hover:scale-100  bottom-2 left-2 right-2">
                <div class="bg-white/30 backdrop-blur px-2 py-1 rounded-xl w-auto max-w-full h-10 max-h-20 flex space-x-2 items-center">

                    <p class="text-white font-medium ">{{ $gallery->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>