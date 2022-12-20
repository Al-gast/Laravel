@extends('layouts.main')

@section('container')
    <h3>{{ $name }}</h3>
    <h4>{{ $email }}</h4>
    <img src="img/{{ $image }}" alt="{{ $name }}">
@endsection

