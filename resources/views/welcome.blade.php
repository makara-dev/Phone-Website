<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>
            ul, li{
                margin: 0 20px;
            }
            .carousel-inner img {
                width: 100%;
                height: 60%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-success">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#fff">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#fff">Product list</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#fff">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:#fff">In Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}" style="color:#fff">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}" style="color:#fff">Login</a>
                </li>
            </ul>
        </nav>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/1.png') }}" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/2.png') }}" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/1.png') }}" alt="New York" width="1100" height="500">
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
            </div>
        <div class="container">
        </div>
    </body>
</html>
