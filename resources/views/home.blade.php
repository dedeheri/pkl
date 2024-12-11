@extends('components.container')

@section('title', 'Home Page')


@section('container')
@include('components.banner')
@include('components.visionandmission')
@include('components.gallery')
@include('components.news')
@endsection