@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>
        <h5 class="mb-4" >{{ $post->author }}</h5>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection


