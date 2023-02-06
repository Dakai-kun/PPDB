@extends('layouts.main')
@section('container')
                <!-- Section: Design Block -->
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-4 fw-bold ls-tight">
          Start your journey <br />
            <span class="text-primary">try different places in the world</span>
          </h2>
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
              <form action="/register" method="POST">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" name=name id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Name</label>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                  <input type="username" name=username id="form3Example3" class="form-control" />
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
                    <p class="mb-0">Already have an account? <a href="/login" class="text-blue-50 fw-bold">Log In</a>
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