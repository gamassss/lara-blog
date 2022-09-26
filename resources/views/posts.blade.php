@extends('layouts.main')

@section('container')
    <h1 class="mb-4">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <small class="text-muted">by : <a href="/authors/{{ $posts[0]->author->username }}"
                        class="text-decoration-none">{{ $posts[0]->author->name }}</a>, Kategori <a
                        href="/categories/{{ $posts[0]->category->slug }}"
                        class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}</small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more..</a>
            </div>
        </div>
    @else
        <p class="fs-4 text-center position-absolute top-50 start-50 translate-middle">No Post Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="position-absolute px-2 py-2" style="background-color: rgba(0,0,0,0.5)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5>
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                        </h5>
                        <p>by : <a href="/authors/{{ $post->author->username }}"
                                class="text-decoration-none">{{ $post->author->name }}</a>, Kategori <a
                                href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none">{{ $post->category->name }}</a></p>
                        <p>{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more..</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection
