@extends('app')

@section('content')
    @include('partials.hero')
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    @include('partials.products')
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    @include('partials.article-haidar', ['posts' => $posts])
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    {{-- @include('partials.articles', ['posts' => $posts]) --}}
    @include('partials.about')
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    @include('partials.contact')
@endsection
