@extends('layout.main')

@section('title', 'Manage Company')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <a href="/addOffice" class="btn btn-primary mb-4">+ Add Office</a>

        <div class="offices d-flex" style="justify-content: space-between">
            @foreach ($offices as $office)
                <div class="card" style="width: 14rem;">
                    <img src="{{ asset('storage/office/'.$office->image)}}" class="card-img-top" style="height: 150px" alt="...">
                    <div class="card-body d-flex" style="flex-direction: column; justify-content:space-between">
                        <div>
                            <h5 class="card-title">{{ $office->office_name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $office->address }}</h6>
                        </div>

                        <div>
                            <p class="card-text"> <i>{{ $office->contact_name }}</i> - {{$office->phone}} </p>
                            <div class="cardButton d-flex" style="justify-content: space-between">
                                <a href="/updateOffice/{{$office->id}}" class="btn btn-primary">Update</a>
                                <a href="/deleteOffice/{{$office->id}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            {{$offices->links()}}
        </div>
    </div>
@endsection
