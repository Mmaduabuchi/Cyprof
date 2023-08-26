<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('application.name', 'Cyprof') }}</title>
    </head>
    <body class=" bg-light">
        {{-- header --}}
        <div class="row">
            @include('header')
        </div>
        <section class="dropdownRowContainer">
            <div class="signIBtnNavContainer text-center pb-3">
                <h5 class="text-right pr-4 closeBtn">X</h5>
                <hr>
                <a href="/signup">
                    <button class="signIBtnNav">SIGN IN</button>
                </a>
                <hr>
                <div class="text-left">
                    <span class="fa fa-user Icon"></span> My Account
                    <br><hr>
                    <span class="fa fa-users Icon"></span> Orders
                </div>
            </div>
        </section>
        {{-- end for header --}}
        <div class="row mt-3">
            <div class="col col-md-1"></div>
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
        {{-- footer --}}
        <div class="row">
            @extends('footer')
        </div>
    </body>
</html>