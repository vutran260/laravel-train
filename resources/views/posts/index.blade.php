@extends('layouts.app')

@section('content')
    <h1>This is Posts page</h1>

    @isset($post)
        <h2> {{ $post->title }}</h2>
        <h3> {{ $post->body }}</h3>
    @endisset

@endsection