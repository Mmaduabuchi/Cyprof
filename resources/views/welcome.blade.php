<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('application.name', 'Welcome to Cyprof Home') }}</title>
</head>

<body class="HomeBg">
    {{-- header --}}
    <section class="headerSectionNavContainer">
        @include('header')
    </section>
    {{-- end for header --}}

    <section>

        <div class="row">
            <div class="col"></div>
        </div>

        <div class="row d-none d-md-flex mt-3">
            <div class="col col-md-1"></div>
            <div class="col">
                <div class="navigationContainer">
                    <ul class="navigationContainerUl">
                        <a href="/">
                            <li class="listNavBar"><span class="fa fa-apple-alt Icon"></span>Supermarket</li>
                        </a>
                        <a href="{{ route('HealthBeauty') }}">
                            <li class="listNavBar"><span class="fa fa-home Icon"></span>Health & Beauty</li>
                        </a>
                        <a href="{{ route('Appliances') }}">
                            <li class="listNavBar"><span class="fa fa-blender Icon"></span>Appliances</li>
                        </a>
                        <a href="{{ route('Phones&Tablets') }}">
                            <li class="listNavBar"><span class="fa fa-mobile-screen Icon"></span>Phones & Tablets</li>
                        </a>
                        <a href="{{ route('Computing') }}">
                            <li class="listNavBar"><span class="fa fa-desktop Icon"></span>Computing</li>
                        </a>
                        <a href="{{ route('Electronics') }}">
                            <li class="listNavBar"><span class="fa fa-tv Icon"></span>Electronics</li>
                        </a>
                        <a href="{{ route('Fashion') }}">
                            <li class="listNavBar"><span class="fa fa-shirt Icon"></span>Fashion</li>
                        </a>
                        <a href="{{ route('Baby-Products') }}">
                            <li class="listNavBar"><span class="fa fa-baby Icon"></span>Baby Products</li>
                        </a>
                        <a href="{{ route('Gaming') }}">
                            <li class="listNavBar"><span class="fa fa-gamepad Icon"></span>Gaming</li>
                        </a>
                        <a href="{{ route('Sporting-Goods') }}">
                            <li class="listNavBar"><span class="fa fa-dumbbell Icon"></span>Sporting Goods</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col">h</div>
            <div class="col">
                <div class="row">
                    <div class="col-12">
                        <div class="HomeContactContainer">
                            <div class="row">
                                <div class="col-2">
                                    <h2><i class="fa-solid fa-phone"></i></h2>
                                </div>
                                <div class="col">
                                    <h6>Call to Order</h6>
                                    <span>08132824987</span>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col-2">
                                    <h2><i class="fa-solid fa-landmark"></i></h2>
                                </div>
                                <div class="col mt-2">
                                    <h6>Sell on Cyprof</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <h2><i class="fa-solid fa-trophy"></i></h2>
                                </div>
                                <div class="col mt-2">
                                    <h6>Best Deals on Cyprof</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="HomeContactContainer">
                            <div class="row">
                                <div class="col-2">
                                    <h2><i class="fa-solid fa-phone"></i></h2>
                                </div>
                                <div class="col">
                                    <h6>Call to Order</h6>
                                    <span>08132824987</span>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col-2">
                                    <h2><i class="fa-solid fa-landmark"></i></h2>
                                </div>
                                <div class="col mt-2">
                                    <h6>Sell on Cyprof</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <h2><i class="fa-solid fa-trophy"></i></h2>
                                </div>
                                <div class="col mt-2">
                                    <h6>Best Deals on Cyprof</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col goodsContainer bg-white">
                <div class="row p-3">
                    <div class="topDealTextContainer col-12">
                        <h2>Top Deals</h2>
                    </div>
                    @foreach ($products as $productItem)
                    <div class="col col-md-2 mt-2 shadow-lg">
                        <div class="d-flex p-2 flex-column productsItemsContainer">
                            <a href="{{ route("products", ["productCodeID" => $productItem['id'] ]) }}" id="productID" class="text-dark text-decoration-none">
                                <img src="{{ asset('storage/'.$productItem['productimage']) }}" alt="product image" class="w-100">
                                <br>
                                <span>{{ $productItem['productname'] }}</span>
                                {{-- <span>{{ $productItem['productdescription'] }}</span> --}}
                                <br>
                                <!-- <p> -->
                                <b>
                                    <i class="fa-solid fa-naira-sign"> {{ $productItem['productprice'] }}</i>
                                    <!-- <br> -->
                                    <sub><del style="color: grey">{{ $productItem['productOldprice'] }}</del></sub>
                                </b>
                                <!-- </p> -->
                                <br>
                                <span style="font-weight: bold;">{{ $productItem['productInStock'] }} items left</span>
                                <progress value="40" max="100"></progress>
                                <span class="cyprofExpress">
                                    <b>CYPROF</b><i class="fa fa-wind"></i><span style="font-weight: bold; color: orange;">EXPRESS</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <br><br>
                    @endforeach
                </div>
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
    </section>

    <section class="mt-3">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col goodsContainer bg-white">
                <div class="row">
                    <div class="topDealTextContainer2 col-12">
                        <h3>Phone & Tablets</h3>
                    </div>
                    @foreach ($phoneProductsData as $productItem)
                    <div class="col col-md-2 mt-2 shadow-lg">
                        <div class="d-flex p-2 flex-column productsItemsContainer">
                            <a href="{{ route("products", ["productCodeID" => $productItem->id ]) }}" class="text-dark text-decoration-none">
                                <img src="{{ asset('storage/'.$productItem->productimage) }}" alt="product image" class="w-100">
                                <span>{{ $productItem->productname }}</span>
                                {{-- <span>{{ $productItem->productdescription }}</span> --}}
                                <p>
                                    <b>
                                        <i class="fa-solid fa-naira-sign"> {{ $productItem->productprice }}</i>
                                        <br>
                                        <sub><del style="color: grey">{{ $productItem->productOldprice }}</del></sub>
                                    </b>
                                </p>
                                <span style="font-weight: bold;">{{ $productItem->productInStock }} items left</span>
                                <progress value="30" max="100"></progress>
                                <p> <b>CYPROF</b><i class="fa fa-wind"></i><span style="font-weight: bold; color: orange;">EXPRESS</span></p>
                            </a>
                        </div>
                    </div>
                    <br><br>
                    @endforeach
                </div>
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
    </section>


    <section class="mt-3">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col goodsContainer bg-white">
                <div class="row">
                    <div class="topDealTextContainer3 col-12">
                        <h3>Electronics</h3>
                    </div>
                    @foreach ($ElectronicsData as $productElectronicsItem)
                    <div class="col col-md-2 mt-2 shadow-lg">
                        <div class="d-flex p-2 flex-column productsItemsContainer">
                            <a href="{{ route("products", ["productCodeID" => $productElectronicsItem->id ]) }}" class="text-dark text-decoration-none">
                                <img src="{{ asset('storage/'.$productElectronicsItem->productimage) }}" alt="product image" class="w-100">
                                <span>{{ $productElectronicsItem->productname }}</span>
                                {{-- <span>{{ $productItem['productdescription'] }}</span> --}}
                                <p>
                                    <b>
                                        <i class="fa-solid fa-naira-sign"> {{ $productElectronicsItem->productprice }}</i>
                                        <br>
                                        <sub><del style="color: grey">{{ $productElectronicsItem->productOldprice }}</del></sub>
                                    </b>
                                </p>
                                <span style="font-weight: bold;">{{ $productElectronicsItem->productInStock }} items left</span>
                                <progress value="60" max="100"></progress>
                                <p> <b>CYPROF</b><i class="fa fa-wind"></i><span style="font-weight: bold; color: orange;">EXPRESS</span></p>
                            </a>
                            <!-- <button class="btn text-light btnAddToCart ">ADD TO CART</button> -->
                        </div>
                    </div>
                    <br><br>
                    @endforeach
                </div>
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
    </section>


    <section class="mt-3">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col goodsContainer bg-white">
                <div class="row">
                    <div class="topDealTextContainer4 col-12">
                        <h3>Fashion</h3>
                    </div>
                    @foreach ($Fashion as $productItem)
                    <div class="col col-md-2 mt-2 shadow-lg">
                        <div class="d-flex p-2 flex-column productsItemsContainer">
                            <a href="{{ route("products", ["productCodeID" => $productItem->id ]) }}" class="text-dark text-decoration-none">
                                <img src="{{ asset('storage/'.$productItem->productimage) }}" alt="product image" class="w-100">
                                <span>{{ $productItem->productname }}</span>
                                {{-- <span>{{ $productItem->productdescription }}</span> --}}
                                <p>
                                    <b>
                                        <i class="fa-solid fa-naira-sign"> {{ $productItem->productprice }}</i>
                                        <br>
                                        <sub><del style="color: grey">{{ $productItem->productOldprice }}</del></sub>
                                    </b>
                                </p>
                                <span style="font-weight: bold;">{{ $productItem->productInStock }} items left</span>
                                <progress value="30" max="100"></progress>
                                <p> <b>CYPROF</b><i class="fa fa-wind"></i><span style="font-weight: bold; color: orange;">EXPRESS</span></p>
                            </a>
                        </div>
                    </div>
                    <br><br>
                    @endforeach
                </div>
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
    </section>


    <section class="mt-3">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col goodsContainer bg-white">
                <div class="row">
                    <div class="topDealTextContainer5 col-12">
                        <h3>Baby Products</h3>
                    </div>
                    @foreach ($Babies as $productItem)
                    <div class="col col-md-2 mt-2 shadow-lg">
                        <div class="d-flex p-2 flex-column productsItemsContainer">
                            <a href="{{ route("products", ["productCodeID" => $productItem->id ]) }}" class="text-dark text-decoration-none">
                                <img src="{{ asset('storage/'.$productItem->productimage) }}" alt="product image" class="w-100">
                                <span>{{ $productItem->productname }}</span>
                                {{-- <span>{{ $productItem->productdescription }}</span> --}}
                                <p>
                                    <b>
                                        <i class="fa-solid fa-naira-sign"> {{ $productItem->productprice }}</i>
                                        <br>
                                        <sub><del style="color: grey">{{ $productItem->productOldprice }}</del></sub>
                                    </b>
                                </p>
                                <span style="font-weight: bold;">{{ $productItem->productInStock }} items left</span>
                                <progress value="80" max="100"></progress>
                                <p> <b>CYPROF</b><i class="fa fa-wind"></i><span style="font-weight: bold; color: orange;">EXPRESS</span></p>
                            </a>
                        </div>
                    </div>
                    <br><br>
                    @endforeach
                </div>
            </div>
            <div class="col-1 col-md-1"></div>
        </div>
    </section>




    {{-- footer --}}
    <div class="row">
        @extends('footer')
    </div>
</body>

</html>