<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" style="background-color: #ECE852; height:100vh;">
                <img src="{{ asset('img/logo-queen-latifa.png') }}" class="img-fluid mt-5 mb-5" width="100%" alt="">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('rs.dashboard') }}"><strong>Master Obat</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('rs.profile') }}"><strong>Profile</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('logout') }}"><strong>Logout</strong></a>
                </li>
                </ul>
            </div>
            <div class="col-10 p-5">
                @yield('content')
            </div>
        </div>
    </div>
    
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>