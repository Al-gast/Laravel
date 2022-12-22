@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-center">
        <div class="col">
            <h2>{{ $post->title }}</h2>
            <img src="https://source.unsplash.com/1200x500?{{ $post->category->slug }}" class="card-img-top mb-3 img-fluid" alt="..."/>
            <p>By. <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </div>
    </div>
</div>

<a href="/blog">Back To Posts</a>
@endsection

