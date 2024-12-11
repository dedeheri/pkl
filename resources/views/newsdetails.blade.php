@extends('components.container')

@section('title', 'Home Page')

@section('container')
<section>
    <div class="pt-16 space-y-8">

        <h1 class="font-medium text-4xl max-w-3xl mx-auto text-sans">{{$post->title}} </h1>
        <div class="max-w-3xl mx-auto flex items-center space-x-2">
            <p class="ont-medium">{{$post->created_at}}</p>
            <p class="text-gray-300">•</p>
            <p class="font-medium rounded-full">{{$post->category}}</p>
        </div>
        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-[40rem] max-w-6xl mx-auto rounded-xl">
        <h1 class="max-w-3xl mx-auto">{!! $post->content !!}</h1>
        <div class="max-w-3xl mx-auto flex items-center space-x-2">
            <p>
                @foreach ($post->tags as $tag)
                <span class="bg-gray-200 px-4 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </p>
        </div>
    </div>
</section>
@endsection