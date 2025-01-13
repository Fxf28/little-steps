@extends('app')

@section('content')
    @include('partials.hero')
    @include('partials.article-haidar', ['posts' => $posts])
    {{-- @include('partials.articles', ['posts' => $posts]) --}}
    @include('partials.about')
    @include('partials.contact')
@endsection
