<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cart</title>
</head>
<body class="bg-light">
    {{-- header --}}
    <section class="headerSectionNavContainer">
        <div class="row">
            @include('header')
        </div>
    </section>
    {{-- end for header --}}

    <div class="row mt-3">
        <div class="col ml-5">
            <div class="navigationContainer">
                <ul class="navigationContainerUl">
                    <a href="/">
                        <li class="listNavBar"><span class="fa fa-apple-alt Icon"></span>Supermarket</li>
                    </a>
                    <a href="{{ url('/HealthBeauty') }}">
                        <li class="listNavBar"><span class="fa fa-home Icon"></span>Health & Beauty</li>
                    </a>
                    <a href="{{ url('/Appliances') }}">
                        <li class="listNavBar"><span class="fa fa-blender Icon"></span>Appliances</li>
                    </a>
                    <a href="{{ url('/Phones&Tablets') }}">
                        <li class="listNavBar"><span class="fa fa-mobile-screen Icon"></span>Phones & Tablets</li>
                    </a>
                    <a href="{{ url('/Computing') }}">
                        <li class="listNavBar"><span class="fa fa-desktop Icon"></span>Computing</li>
                    </a>
                    <a href="{{ url('/Electronics') }}">
                        <li class="listNavBar"><span class="fa fa-tv Icon"></span>Electronics</li>
                    </a>
                    <a href="{{ url('/Fashion') }}">
                        <li class="listNavBar"><span class="fa fa-shirt Icon"></span>Fashion</li>
                    </a>
                    <a href="{{ url('/Baby-Products') }}">
                        <li class="listNavBar"><span class="fa fa-baby Icon"></span>Baby Products</li>
                    </a>
                    <a href="{{ url('/Gaming') }}">
                        <li class="listNavBar"><span class="fa fa-gamepad Icon"></span>Gaming</li>
                    </a>
                    <a href="{{ url('/Sporting-Goods') }}">
                        <li class="listNavBar"><span class="fa fa-dumbbell Icon"></span>Sporting Goods</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col col-md-7">
            <div class="cartContainer2 text-center">
                <i class="fa fa-shopping-cart cartpageIcon"></i>
                <br>
                <span>
                    <b>Your cart is empty!</b>
                </span>
                <br><br>
                <span>Browse our categories and discover our best deals</span>
                <br><br>
                <a href="{{ route('home') }}">
                    <button class="cartBtn">START SHOPPING</button>
                </a>

            </div>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
    </div>

    <div class="row">
        @extends('footer')
    </div>    
</body>
</html>