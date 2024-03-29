@extends('layout.navbar')

@section('title', 'Search Result')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <h3 class="mb-4">Showing Search Results for {{$keyword}}</h3>

        @if ($realestates->isEmpty())
            <p>No data for "{{$keyword}}" yet</p>
        @else
            <div class="realestates d-flex" style="justify-content: space-between">
                @foreach ($realestates as $realestate)
                    <div class="card" style="width: 17rem;">
                        <img src="{{ asset('storage/realestate/'.$realestate->image)}}" class="card-img-top" alt="..." style="height:150px">
                        <div class="card-body d-flex" style="flex-direction: column; justify-content:space-between">
                            <div>
                                <h5 class="card-title">
                                    @if ($realestate->sales_type == "Sale")
                                        ${{$realestate->price}}
                                    @else
                                        ${{$realestate->price}} / month
                                    @endif
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$realestate->location}}</h6>
                            </div>

                            <div>
                                <span class="badge bg-info text-dark">{{$realestate->building_type}}</span>
                                <div class="card text-center mt-3">
                                    @if (!Auth::user())
                                    <a href={{route('login')}} class="btn btn-primary">
                                        @if ($realestate->sales_type == "Sale")
                                        Buy
                                        @else
                                        Rent
                                        @endif
                                    </a>
                                    @else
                                    <a href="/addToCart/{{$realestate->id}}}" class="btn btn-primary">
                                        @if ($realestate->sales_type == "Sale")
                                        Buy
                                        @else
                                        Rent
                                        @endif
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex mt-4" style="justify-content: center">
                {{$realestates->withQueryString()->links()}}
            </div>

        @endif
    </div>
@endsection
