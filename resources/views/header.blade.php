<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
    <link rel="stylesheet" href="{{asset("assets/bootstrap-4/css/bootstrap.css")}}">
    <script src="{{asset("assets/app.js")}}" defer></script>
    <script src="{{asset("assets/addToCart.js")}}" defer></script>
</head>

<body>
    <!-- small screen display -->
    <div class="row bg-white d-md-none pt-2 pb-2">
        <div class="col pl-4">
            <i class="fa fa-bars fa-1x"></i>
            <a href="/" class="text-dark">
                <span class="h4" id="sitename">Cy</span>prof
            </a>
        </div>
        <div class="col linknavcontainer pt-2 text-right">
            <a href="{{ route('help') }}">
                <span class="fa fa-question-circle fa-1x"></span>
            </a>
            <a href="{{ route('dashboard') }}">
                <span class="fa fa-user fa-1x"></span>
            </a>
            <a href="{{ route('cart') }}">
                <span class="fa fa-shopping-cart fa-1x"></span>
            </a>
        </div>
        <hr>
        <div class="col-12 text-center mt-3">
            <form action="" method="get">
                <input type="text" name="searchBox" id="searchBox" placeholder="Search products, brands and categories">
                <input type="submit" value="SEARCH" class="btnSubmit">
                {{-- <button type="submit" class="btn btn-primary">SEARCH</button> --}}
            </form>
        </div>
    </div>
    <div class="row d-md-none mb-3" style="background: orange;">
        <div class="col text-center" style="color: white;">
            <h5>CALL TO ORDER: 08132824987, 08132824987</h5>
        </div>
    </div>

    <!-- big screen display -->
    <div class="row d-none d-md-flex">
        <div class="col-1 headerContainer"></div>
        <div class="col headerContainer">
            <div class="row p-3">
                <div class="col-6 col-md-2">
                    <h1>
                        <a href="/" class="text-dark">
                            <span id="sitename">Cy</span>prof
                        </a>
                    </h1>
                </div>
                <div class="col-6 d-block d-md-none">
                    {{-- nothing is here yet --}}
                </div>
                <div class="col d-none d-md-block p-2">
                    <form action="" method="get">
                        <input type="text" name="searchBox" id="searchBox" placeholder="Search products, brands and categories">
                        <input type="submit" value="SEARCH" class="btnSubmit">
                        {{-- <button type="submit" class="btn btn-primary">SEARCH</button> --}}
                    </form>
                </div>
                <div class="col cartContainer p-2">
                    <div class="row">
                        <div class="col linknavcontainer pt-2">
                            <a href="{{ route('dashboard') }}">
                                <span class="fa fa-user"></span>Account
                            </a>
                            |
                            <a href="{{ route('help') }}">
                                <span class="fa fa-question-circle"></span>Help
                            </a>
                            |
                            <a href="{{ route('cart') }}">
                                <span class="fa fa-shopping-cart"></span>Cart
                            </a>
                        </div>
                        <div class="col col-md-4">
                            @auth
                            <a href="{{ route('logout') }}">
                                <button class="signIBtnNav">LOG OUT</button>
                            </a>
                            @else
                            <a href="{{ route('login') }}">
                                <button class="signIBtnNav">SIGN IN</button>
                            </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            {{-- navigation bars section --}}

        </div>
        <div class="col-1 headerContainer"></div>
    </div>