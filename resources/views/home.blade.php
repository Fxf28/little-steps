@extends('app')

@section('content')
    @include('partials.hero')
    @include('partials.article')
    @include('partials.about')
    @include('partials.articles', ['posts' => $posts])
    @include('partials.contact')

@endsection
