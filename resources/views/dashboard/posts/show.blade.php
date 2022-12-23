@extends('dashboard.layouts.main')

@section('container')    
<div class="container">
    <div class="row justify-center">
        <div class="col">
            <h2>{{ $post->title }}</h2>
            <div class="mb-3">
                <a href="/dashboard/posts" class="badge bg-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger"><span data-feather="x-circle"></span></a>
            </div>
            <img src="https://source.unsplash.com/1200x500?{{ $post->category->slug }}" class="card-img-top mb-3 img-fluid" alt="..."/>
            <p>By. <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </div>
    </div>
</div>
@endsection