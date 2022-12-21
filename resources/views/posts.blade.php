{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-5 pb-4">
        <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <h5><a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a></h5>
        {{ $post["excerpt"] }}
        <p><a href="/post/{{ $post->slug }}">Read More...</a></p>
    </article>
    @endforeach
@endsection
