<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('application.name', 'Cyprof') }}</title>
        <link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.css")}}">
        <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
        <link rel="stylesheet" href="{{asset("assets/bootstrap-4/css/bootstrap.css")}}">
    </head>
    <body class=" bg-light">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <div class="row p-3">
                    <div class="col-6 col-md-2">
                        <h1><span id="sitename">Cy</span>prof</h1>
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
                            <li class="list"><span class="fa fa-shopping-cart"></span>Cart</li>
                        </ul>
                    </div>
                </div>
                {{-- navigation bars section --}}
        <div class="row">
            <div class="col">
                <div class="navigationContainer">
                    <ul class="navigationContainerUl">
                        <li class="listNavBar"><span class="fa fa-apple-alt Icon"></span>Supermarket</li>
                        <li class="listNavBar"><span class="fa fa-home Icon"></span>Health & Beauty</li>
                        <li class="listNavBar"><span class="fa fa-blender Icon"></span>Appliances</li>
                        <li class="listNavBar"><span class="fa fa-mobile-screen Icon"></span>Phones & Tablets</li>
                        <li class="listNavBar"><span class="fa fa-desktop Icon"></span>Computing</li>
                        <li class="listNavBar"><span class="fa fa-tv Icon"></span>Electronics</li>
                        <li class="listNavBar"><span class="fa fa-shirt Icon"></span>Fashion</li>
                        <li class="listNavBar"><span class="fa fa-baby Icon"></span>Baby Products</li>
                        <li class="listNavBar"><span class="fa fa-gamepad Icon"></span>Gaming</li>
                        <li class="listNavBar"><span class="fa fa-dumbbell Icon"></span>Sporting Goods</li>
                    </ul>
                </div>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            @extends('footer')
        </div>
        <script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>
    </body>
</html>