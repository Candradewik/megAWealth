@extends('layout.admin')

@section('title', 'Manage Company')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <a href="#" class="btn btn-primary mb-4">+ Add Office</a>

        <div class="offices d-flex" style="justify-content: space-between">
            @for ($i = 0; $i<4; $i++)
                <div class="card" style="width: 17rem;">
                    <img src="{{ asset('storage/office/office1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Office name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Address</h6>
                        <p class="card-text"> <i>Name</i> - Phone Number </p>

                        <div class="cardButton d-flex" style="justify-content: space-between">
                            <a href="#" class="btn btn-primary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
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
