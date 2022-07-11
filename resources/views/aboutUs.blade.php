@extends('layout.guest')

@section('title', 'About Us')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <div class="banner mb-4 d-flex" style="flex-direction:column; justify-content:space-around; padding-left:50px; padding-right:50px; height: 300px; width:100%; background-size: conver; background-image: url('{{ asset('storage/banner/about.png')}}')">
            <div class="title" style="color:white">
                <h1 style="text-align: center">About Our Company</h1>
            </div>

            <p style="color: white; text-align: center">
                Our company was founded at 2008 by our founder Renanda. At that time, we started as a law firm specializing in real estate and construction. In 2012, our company expanded our service to real estates with the included service of real estates lawyers. Today, our company have 5 offices throughout the states and is planning to build more.
            </p>
        </div>

        <h3 class="mb-4">Our Offices</h3>

        <div class="offices d-flex" style="justify-content: space-between">
            @for ($i = 0; $i<5; $i++)
                <div class="card" style="width: 14rem;">
                    <img src="{{ asset('storage/office/office1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Office name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Address</h6>
                        <p class="card-text"> <i>Name</i> - Phone Number </p>
                    </div>
                </div>
            @endfor
        </div>

        <div class="d-flex mt-4" style="justify-content: center">
            Pagination
        </div>
    </div>
@endsection
