@extends('layout.guest')

@section('title', 'Home')

@section('content')
    <div class="content pt-4 pb-4" style="margin-left: 50px; margin-right: 50px">
        <div class="banner mb-4 ps-4 pe-4 d-flex" style="flex-direction:column; justify-content:space-around; height: 300px; width:100%; background-size: cover; background-image: url('{{ asset('storage/banner/home.jpg')}}')">
            <div class="title" style="color:white">
                <h1 style="text-align: center">Find Your Future Home</h1>
            </div>

            <form class="d-flex" action="" style="margin-bottom: 30px">
                <input class="form-control me-2" type="search" placeholder="Enter a City, Property Type, Buy or Rent" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>

        <div class="menus d-flex" style="justify-content: space-between">
            <a href="" style="text-decoration: none; color:black">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/menu/rent.png')}}" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: navy">
                      <h5 class="card-title" style="text-align: center; color:white">RENT</h5>
                    </div>
                </div>
            </a>

            <a href="" style="text-decoration: none; color:black">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/menu/sale.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: navy">
                      <h5 class="card-title" style="text-align: center; color:white">SALE</h5>
                    </div>
                </div>
            </a>

            <a href="" style="text-decoration: none; color:black">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/menu/about.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: navy">
                      <h5 class="card-title" style="text-align: center; color:white">ABOUT</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
