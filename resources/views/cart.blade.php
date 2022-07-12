@extends('layout.member')

@section('title', 'Cart')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <h3 class="mb-4">Your Cart</h3>

        <div class="offices d-flex" style="justify-content: space-between">
            @for ($i = 0; $i<4; $i++)
                <div class="card" style="width: 17rem;">
                    <img src="{{ asset('storage/office/office1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">$price</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Address</h6>
                        <span class="badge bg-info text-dark">Apartment</span>
                        <span class="badge bg-warning text-dark">2022-04-11</span>

                        <div class="card text-center mt-3">
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            Pagination
        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            <a class="btn btn-primary" href="#" role="button">Checkout</a>
        </div>
    </div>
@endsection
