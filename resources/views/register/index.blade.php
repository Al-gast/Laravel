@extends('layouts.main')

@section('container')

<main class="form-signin w-100 m-auto">
    <form action="/register" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please Register</h1>
      <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name" name="name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
     <div class="form-floating">
        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Userame" name="username" id="username" required value="{{ old('username') }}">
        <label for="username">Userame</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Register</button>
    </form>
    <p>Already have account? <a href="/login">Login</a></p>
  </main>

@endsection