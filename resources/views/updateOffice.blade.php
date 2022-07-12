@extends('layout.admin')

@section('title', 'Update Office')

@section('content')
    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: space-between; align-items:center">
        <div class="image" style="width: 40vw">
            <img src="{{ asset('storage/office/office1.jpg')}}" alt="" style="width: 100%">
        </div>
        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:50vw">
            <form action="" method="">
                @csrf

                <div class="mb-3 bg-light">
                  <label for="name" class="form-label">Office Name</label>
                  <input type="text" value="Tes" name="name" class="form-control" id="name">
                </div>

                <div class="mb-3 bg-light">
                    <label for="address" class="form-label">Office Address</label>
                    <input type="text" value="Tes" name="address" class="form-control" id="address">
                </div>

                <div class="mb-3 bg-light">
                    <label for="contact" class="form-label">Contact Name</label>
                    <input type="text" value="Tes" name="contact" class="form-control" id="contact">
                </div>

                <div class="mb-3 bg-light">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" value="Tes" name="phone" class="form-control" id="phone">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
@endsection
