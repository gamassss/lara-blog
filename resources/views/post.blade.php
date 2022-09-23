@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>
        <p>by : {{ $post->author }}, Kategori <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts" class="text-decoration-none">Back to Posts</a>
@endsection


