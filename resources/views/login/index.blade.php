@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin w-100 m-auto">
            <form action="login" method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal">Please Login</h1>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" autofocus required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Login</button>
            </form>
            <p>Dont have account? <a href="/register">Register</a></p>
          </main>
    </div>
</div>

@endsection