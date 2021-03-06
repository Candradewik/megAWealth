@extends('layout.navbar')

@section('title', 'Register')

@section('content')
    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: center">
        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:50vw">
            <h3 class="mb-4" style="text-align: center">Register</h3>

            <form action="{{route('register')}}" method="post">
                @csrf

                <div class="mb-3 bg-light">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name Here..." required value="{{ old('name') }}">
                </div>

                <div class="mb-3 bg-light">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email Address Here..." required value="{{ old('email') }}">
                </div>

                <div class="mb-3 bg-light">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Your password must be at least 8 characters." required>
                </div>

                <div class="mb-3 bg-light">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Re-type your password" required>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif

                <div class="d-flex" style="justify-content: center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </form>
        </div>
    </div>
@endsection
