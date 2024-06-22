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
            <!-- <div class="cartContainer2 text-center"> -->
                @if ($cartsData == null)
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
                @else
                    <div class="cartContainer2inner">
                        <h4>Your Cart</h4>
                        <hr>
                        @foreach ($cartsData as $Data)
                            <div class="row mr-1 ml-1 mb-2 cartContainerInnerBox">
                                <div class="col">
                                    <img src="{{ asset('storage/'.$Data->productimage) }}" alt="product icon" style="width: 50%;">
                                </div>
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="color: orange;">{{ $Data->productname }}</h5>
                                            <h6>N {{ $Data->productprice }}</h6>
                                            <span>In stock</span>
                                        </div>
                                        <div class="col">
                                            <h5>{{ $Data->productamount }} items</h5>
                                            <span class="cartContainerInnerBoxSpanText">Added on: {{ $Data->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-12 p-2"></div>
                                        <div class="col-12">
                                            <button class="btn btn-danger"> <i class="fa fa-trash"></i> Remove Item</button>
                                        </div>
                                        <div class="col-12 p-2"></div>
                                    </div>
                                </div>
                            </div>                            
                        @endforeach
                        <div class="row">
                            <div class="col">
                                <h5>Total: <span style="color: orange;"> N 1,900,800 </span> </h5>
                            </div>
                        </div>
                    </div>                   
                @endif

            <!-- </div> -->
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