<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cart</title>
</head>
<body class="bg-light">
    <div class="row">
        @include('header')
    </div>
    <div class="row mt-3">
        <div class="col ml-5">
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
                <button class="cartBtn">START SHOPPING</button>

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