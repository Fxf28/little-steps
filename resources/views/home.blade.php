@extends('app')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.articles', ['posts' => $posts])
    @include('partials.contact')
    @include('partials.article')
@endsection
