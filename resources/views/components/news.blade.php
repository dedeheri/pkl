<section class="space-y-10">
    @if (Route::currentRouteName() === 'home')
    <h1 class="text-2xl md:text-3xl font-medium font-sans text-[#0d321b] w-full">Berita</h1>
    @endif
    <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5  cursor-pointer">
        @foreach ($posts as $post)
        <a class="space-y-2 group" href="{{ url('news/' . $post->slug) }}">
            <div class=" border relative  w-full  mx-auto h-[13rem] md:h-[19rem] lg:h-[25rem] xl:h-[20rem] overflow-hidden rounded-lg cursor-pointer">
                <!-- image -->
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-full relative z-0 rounded-lg transition-all duration-300 group-hover:scale-110 object-cover">


                <div class="absolute top-4 left-3">
                    <div class="bg-white/30 backdrop-blur px-2 py-1 rounded-full flex space-x-2 items-center">
                        <p class="text-white font-medium text-sm">{{$post->category}}</p>
                    </div>
                </div>


            </div>
            <!-- date -->
            <p class="text-sm text-gray-600">{{$post->created_at}}</p>
            <!-- title -->
            <h1 class="text-2xl text-[#0d321b] leading-7">{{$post->title}}</h1>
            <!-- content -->
            <h2 class="text-xl font-sans text-green-900 leading-5">{!! \Illuminate\Support\Str::limit($post->content, 60, '...') !!}</h2>
        </a>
        @endforeach
    </div>
</section>