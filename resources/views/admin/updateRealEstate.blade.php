@extends('layout.navbar')

@section('title', 'Update Real Estate')

@section('content')
    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: space-between; align-items:center">
        <div class="image" style="width: 40vw">
            <img src="{{ asset('storage/realestate/'.$realestate->image)}}" alt="" style="width: 100%">
        </div>

        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:48vw">
            <form action="/updateRealEstate/{{$realestate->id}}" method="post">
                @csrf

                <div class="mb-3 bg-light">
                    <label for="sales" class="form-label">Sales Type</label>
                    <select class="form-select" name="sales" id="sales">
                        <option value="{{$realestate->sales_type}}">{{$realestate->sales_type}}</option>
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
                        <option value="{{$realestate->building_type}}">{{$realestate->building_type}}</option>
                        <option value="House">House</option>
                        <option value="Apartment">Apartment</option>
                    </select>
                </div>

                @error('building')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" value="{{$realestate->price}}" name="price" class="form-control" id="price">
                </div>

                @error('price')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <div class="mb-3 bg-light">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" value="{{$realestate->location}}" name="location" class="form-control" id="location">
                </div>

                @error('location')
                    <div class="alert-danger mb-3">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
@endsection
