@extends('layout.guest')

@section('title', 'Login')

@section('content')
    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: center">
        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:50vw">
            <h3 class="mb-4" style="text-align: center">Login</h3>

            <form action="" method="">
                @csrf

                <div class="mb-3 bg-light">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email Address Here...">
                </div>

                <div class="mb-3 bg-light">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Your password must be at least 8 characters.">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="rememberMe" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                </div>

                <div class="d-flex" style="justify-content: center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
              </form>
        </div>
    </div>
@endsection
