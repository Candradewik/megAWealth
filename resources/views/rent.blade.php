@extends('layout.navbar')

@section('title', 'Rent')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <h3 class="mb-4">Showing Real Estates For Rent</h3>

        @if ($realestates->isEmpty())
            <div>
                <h5 style="text-align: center"> No data in rent yet</h5>
            </div>

        @else
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
                            <div class="card text-center mt-3">
                                @if (!Auth::user())
                                <a href={{route('login')}} class="btn btn-primary">Rent</a>
                                @else
                                <a href="/addToCart/{{$realestate->id}}" class="btn btn-primary">Rent</a>
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

        @endif
    </div>
@endsection
