<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phones & Tablets</title>
</head>
<body class="bg-light">
    {{-- header --}}
    <section class="headerSectionNavContainer">
        <div class="row">
            @include('header')
        </div>
    </section>
    {{-- end for header --}}
    
    <section class="mt-3">
            <div class="row">
                <div class="col col-md-1"></div>
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
                <div class="col col-md-1"></div>
            </div>
        </section>
      
    <div class="row">
        @extends('footer')
    </div>    
</body>
</html>