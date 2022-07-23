<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark d-flex ps-4 pe-4" style="background-color: navy; justify-content:space-between">
        <a class="navbar-brand" href="/"> MEGAWEALTH </a>

        <div class="menu">
            <ul class="navbar-nav">
                <li class="nav-item" style="color: white">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/buy">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rent">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('login')}}>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('register')}}>Register</a>
                </li>
                @auth
                @if (Illuminate\Support\Facades\Gate::allows('isMember'))
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Cart</a>
                </li>
                @endif
                @if (Illuminate\Support\Facades\Gate::allows('isAdmin'))
                <li class="nav-item">
                    <a class="nav-link" href="/manageCompany">Manage Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/manageRealEstate">Manage Real Estates</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href={{route('logout')}}>Logout</a>
                </li>
                @endauth
            </ul>
          </div>
      </nav>

    @yield('content')
</body>
</html>
