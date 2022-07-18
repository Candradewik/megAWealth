@extends('layout.guest')

@section('title', 'About Us')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <div class="banner mb-4 d-flex" style="flex-direction:column; justify-content:space-around; padding-left:50px; padding-right:50px; height: 300px; width:100%; background-size: conver; background-image: url('{{ asset('storage/banner/about.png')}}')">
            <div class="title" style="color:white">
                <h1 style="text-align: center">About Our Company</h1>
            </div>

            <p style="color: white; text-align: center">
                {{$description}}
            </p>
        </div>

        <h3 class="mb-4">Our Offices</h3>

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
                            <p class="card-text"> <i>{{ $office->contact_name }}</i> - +{{$office->phone}} </p>
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
