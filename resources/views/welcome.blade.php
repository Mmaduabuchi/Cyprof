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
        {{-- header --}}
        <div class="row">
            @include('header')
        </div>
        {{-- end for header --}}
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
        {{-- footer --}}
        <div class="row">
            @extends('footer')
        </div>
        {{-- end for footer --}}
        <script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>
    </body>
</html>