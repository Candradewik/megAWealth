@extends('layout.guest')

@section('title', 'Search Result')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <h3 class="mb-4">Showing Search Results for Keyword</h3>

        <div class="offices d-flex" style="justify-content: space-between">
            @for ($i = 0; $i<2; $i++)
                <div class="card" style="width: 17rem;">
                    <img src="{{ asset('storage/office/office1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">$price / month</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Address</h6>
                        <span class="badge bg-info text-dark">Apartement</span>

                        <div class="card text-center mt-3">
                            <a href="#" class="btn btn-primary">Rent</a>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 17rem;">
                    <img src="{{ asset('storage/office/office1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">$price</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Address</h6>
                        <span class="badge bg-info text-dark">House</span>

                        <div class="card text-center mt-3">
                            <a href="#" class="btn btn-primary">Buy</a>
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
