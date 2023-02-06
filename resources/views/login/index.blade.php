@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
      @elseif (session('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session ('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session ('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
    </div>
    @endif
    <!-- Section: Design Block -->
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-4 fw-bold ls-tight">
          Let the journey begin <br />
            <span class="text-primary">try different places in the world</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="/login" method="POST">
                @csrf
                <!-- Username input -->
                <div class="form-outline mb-4">
                  <input type="text" name=username id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Username</label>
                </div>
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name=email id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
                <div>
                    <p class="mb-0">Don't have an account? <a href="/register" class="text-blue-50 fw-bold">Register</a>
                    </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
<!-- Section: Design Block -->
@endsection