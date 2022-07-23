@extends('layout.navbar')

@section('title', 'Cart')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <h3 class="mb-4">Your Cart</h3>

        <div class="d-flex" style="justify-content: space-between">
            @foreach ($user->realestates as $realestate)
                <div class="card" style="width: 17rem;">
                    <img src="{{ asset('storage/realestate/'.$realestate->image)}}" class="card-img-top" alt="..." style="height:150px">
                    <div class="card-body d-flex" style="flex-direction: column; justify-content:space-between">
                        <div>
                            <h5 class="card-title">${{$realestate->price}} / month</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$realestate->location}}</h6>
                        </div>

                        <div>
                            <span class="badge bg-info text-dark">{{$realestate->building_type}}</span>
                            <span class="badge bg-warning text-dark">{{$realestate->pivot->created_at->format('Y-m-d')}}</span>
                            <div class="card text-center mt-3">
                                <a href="/removeFromCart/{{$realestate->id}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            Pagination
        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            <a href="/checkout" class="btn btn-primary">Checkout</a>
        </div>
    </div>
@endsection
