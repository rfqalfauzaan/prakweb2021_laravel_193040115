@extends('layouts.main')
    
@section('container')
    <article class="mb-5">
    @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post->id }}"> {{ $post->title }}</a>
            </h2>
        <h5>by: {{ $post->author }}</h5>
        <p>{{  $post->exceprt }}</p>
    </article>
    @endforeach

@endsection