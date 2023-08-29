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
        <section class="headerSectionNavContainer">
            <div class="row">
                @include('header')
            </div>
        </section>
        {{-- end for header --}}

        <section>
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
        </section>
        {{-- footer --}}
        <div class="row">
            @extends('footer')
        </div>
    </body>
</html>