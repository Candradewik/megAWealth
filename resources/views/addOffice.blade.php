@extends('layout.admin')

@section('title', 'Add Office')

@section('content')

    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: center">

        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:50vw">
            <form action="/addOffice" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 bg-light">
                  <label for="name" class="form-label">Office Name</label>
                  <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
                </div>

                @error('name')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="address" class="form-label">Office Address</label>
                    <input type="text" name="address" value="{{old('address')}}" class="form-control" id="address">
                </div>

                @error('address')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="contact" class="form-label">Contact Name</label>
                    <input type="text" name="contact" value="{{old('contact')}}" class="form-control" id="contact">
                </div>

                @error('contact')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="phone">
                </div>

                @error('phone')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="image" class="form-label">Upload the Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                @error('image')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Insert</button>

              </form>
        </div>
    </div>
@endsection
