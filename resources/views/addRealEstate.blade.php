@extends('layout.admin')

@section('title', 'Add Real Estate')

@section('content')
    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: center">
        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:50vw">
            <form action="/addRealEstate" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 bg-light">
                    <label for="sales" class="form-label">Sales Type</label>
                    <select class="form-select" name="sales" id="sales">
                        <option selected>Choose the type of sales</option>
                        <option value="Sale">Sale</option>
                        <option value="Rent">Rent</option>
                    </select>
                </div>

                @error('sales')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="building" class="form-label">Building Type</label>
                    <select class="form-select" name="building" id="building">
                        <option selected>Choose the Building Type</option>
                        <option value="House">House</option>
                        <option value="Apartment">Apartment</option>
                    </select>
                </div>

                @error('building')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" value="{{old('price')}}" class="form-control" id="price">
                </div>

                @error('price')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" value="{{old('location')}}" class="form-control" id="location">
                </div>

                @error('location')
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
