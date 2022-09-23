@extends('layouts.main')

@section('container')

    <h1>Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h2>
                <a href="/categories/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>by: {{ $post->author }}</p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection