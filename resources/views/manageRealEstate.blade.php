@extends('layout.admin')

@section('title', 'Manage Real Estate')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <a href="#" class="btn btn-primary mb-4">+ Add Real Estate</a>

        <div class="offices d-flex" style="justify-content: space-between">
            @for ($i = 0; $i<4; $i++)
                <div class="card" style="width: 17rem;">
                    <img src="{{ asset('storage/office/office1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">$price / month</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Address</h6>

                        <span class="badge bg-info text-dark">Apartment</span>
                        <span class="badge bg-primary">Rent</span>
                        <span class="badge bg-success">Open</span>


                        <div class="cardButton d-flex mt-3" style="justify-content: space-between">
                            <a href="#" class="btn btn-primary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-success">Finish</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            Pagination
        </div>
    </div>
@endsection
