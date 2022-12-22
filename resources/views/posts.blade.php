{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
<h1 class="mb-3">{{ $title }}</h1>

@if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400/?technologies" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h4 class="card-title"><a href="" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h4>
            <small class="text-muted">
                <p>By: <a href="/author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]      ->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
            </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
@else 
    <p class="text-center fs-4">No Post Find.</p>
@endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="position-absolute p-2" style="background-color: rgba(0,0,0,0.7);"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a></div>
                        <img src="https://source.unsplash.com/500x300?{{ $post->category->slug }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</h5>
                            <small class="text-muted">
                                <p>By: <a href="/author/{{ $post->user->username}}">{{ $post->user->name }}</a>{{ $post->created_at->diffForHumans() }}</p>
                            </small>
                        <p class="card-text mb-2">{{ $post["excerpt"] }}</p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>

@endsection
