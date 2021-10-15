@extends('layouts.main')
    
@section('container')
    <h1 class=="mb-5">Post Category :{{ $category }}</h1>
    <article class="mb-5">
    @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/posts/{{ $category->slug }}"> {{ $category->name }}</a>
            </li>
        </ul>
            
            
    </article>
    @endforeach

@endsection