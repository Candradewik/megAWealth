@extends('layout.admin')

@section('title', 'Manage Real Estate')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <a href="/addRealEstate" class="btn btn-primary mb-4">+ Add Real Estate</a>

        <div class="realestates d-flex" style="justify-content: space-between">
            @foreach ($realestates as $realestate)
                <div class="card" style="width: 17rem;">
                    <img src="{{ asset('storage/realestate/'.$realestate->image)}}" class="card-img-top" alt="..." style="height:150px">
                    <div class="card-body d-flex" style="flex-direction: column; justify-content:space-between">
                        <div>
                            <h5 class="card-title">${{$realestate->price}} / month</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$realestate->location}}</h6>
                        </div>

                        <div>
                            <span class="badge bg-info text-dark">{{$realestate->building_type}}</span>
                            @if ($realestate->status != "Transaction completed")
                                <span class="badge bg-primary">{{$realestate->sales_type}}</span>
                            @endif
                            <span class="badge bg-success">{{$realestate->status}}</span>

                            <div class="cardButton d-flex mt-3" style="justify-content: space-between;">
                                <a href="/updateRealEstate/{{$realestate->id}}" class="btn btn-primary">Update</a>
                                <a href="/deleteRealEstate/{{$realestate->id}}" class="btn btn-danger">Delete</a>

                                @if ($realestate->status == "Cart")
                                    <a href="/updateStatus/{{$realestate->id}}" class="btn btn-success">Finish</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            {{$realestates->links()}}
        </div>
    </div>
@endsection
