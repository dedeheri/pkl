@extends('layouts.app')

@section('title', 'Home Page')


<section class=" px-[2rem] xl:px-[14rem]">
    @include('components.navbar')
    <main class="space-y-28 md:space-y-36 mb-32">
        @yield('container')
    </main>
</section>