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
            <ul>
                <li class="list" id="accountListBtn"><span class="fa fa-user"></span>Account <span class="fa fa-chevron-down"></span> </li>
                <li class="list"><span class="fa fa-question-circle"></span>Help</li>
                <li class="list">
                    <a href="cart" class="text-dark">
                        <span class="fa fa-shopping-cart"></span>Cart
                    </a>
                </li>
            </ul>
        </div>
    </div>
    {{-- navigation bars section --}}
    
</div>
<div class="col-1 headerContainer"></div>