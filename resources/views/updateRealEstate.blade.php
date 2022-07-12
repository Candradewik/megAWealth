@extends('layout.admin')

@section('title', 'Update Real Estate')

@section('content')
    <div class="content pt-4 pb-4 d-flex" style="margin-left: 50px; margin-right: 50px; justify-content: space-between; align-items:center">
        <div class="image" style="width: 40vw">
            <img src="{{ asset('storage/office/office1.jpg')}}" alt="" style="width: 100%">
        </div>

        <div class="form-container form-control d-flex p-4" style="flex-direction:column; justify-content: center; width:48vw">
            <form action="" method="" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 bg-light">
                    <label for="sales" class="form-label">Sales Type</label>
                    <select class="form-select" name="sales" id="sales">
                        <option value="Tes">Choose the type of sales</option>
                        <option value="Sale">Sale</option>
                        <option value="Rent">Rent</option>
                    </select>
                </div>

                <div class="mb-3 bg-light">
                    <label for="building" class="form-label">Building Type</label>
                    <select class="form-select" name="building" id="building">
                        <option value="Tes">Choose the Building Type</option>
                        <option value="House">House</option>
                        <option value="Apartment">Apartment</option>
                    </select>
                </div>

                <div class="mb-3 bg-light">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" value="10000" name="price" class="form-control" id="price">
                </div>

                <div class="mb-3 bg-light">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" value="Tes" name="location" class="form-control" id="location">
                </div>

                <button type="submit" class="btn btn-primary">Insert</button>
              </form>
        </div>
    </div>
@endsection
