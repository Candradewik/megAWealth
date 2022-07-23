@extends('layout.navbar')

@section('title', 'Update Office')

@section('content')
    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: space-between; align-items:center">
        <div class="image" style="width: 40vw">
            <img src="{{ asset('storage/office/'.$office->image)}}" alt="" style="width: 100%">
        </div>
        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:48vw">
            <form action="/updateOffice/{{$office->id}}" method="post">
                @csrf

                <div class="mb-3 bg-light">
                  <label for="name" class="form-label">Office Name</label>
                  <input type="text" value="{{$office->office_name}}" name="name" class="form-control" id="name">
                </div>

                @error('name')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="address" class="form-label">Office Address</label>
                    <input type="text" value="{{$office->address}}" name="address" class="form-control" id="address">
                </div>

                @error('address')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="contact" class="form-label">Contact Name</label>
                    <input type="text" value="{{$office->contact_name}}" name="contact" class="form-control" id="contact">
                </div>

                @error('contact')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" value="{{$office->phone}}" name="phone" class="form-control" id="phone">
                </div>

                @error('phone')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
@endsection
