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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
</body>
</html>
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