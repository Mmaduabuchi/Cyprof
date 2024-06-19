<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Cyprof Products</title>
</head>
<body class="bg-light">
    {{-- header --}}
    <section class="headerSectionNavContainer">
        <div class="row">
            @include('header')
        </div>
    </section>
    {{-- end for header --}}

    <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col">
            <div class="row">
                <div class="col-8 itemDescriptionContainer">
                    <div class="row">
                        @foreach ($match as $item)
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('storage/'.$item->productimage) }}" id="productpageImage" alt="item image">
                                    </div>
                                    <div class="col-12">
                                        <div class="gridItemImageContainer mt-2">
                                            <div>
                                                <img src="{{ asset('storage/'.$item->productimage) }}" class="gridItemImage" alt="item image">
                                            </div>
                                            <div>
                                                <img src="{{ asset('storage/'.$item->productimage) }}" class="gridItemImage" alt="item image">
                                            </div>
                                            <div>
                                                <img src="{{ asset('storage/'.$item->productimage) }}" class="gridItemImage" alt="item image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 pt-3">
                                <div class="row">
                                    <div class="col">
                                        <span class="TxtDetailsHolder bg-primary text-light">Official Store</span>
                                        <span class="TxtDetailsHolder bg-warning text-light">Free Delivery</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="fa fa-heart heartIcon"></span>
                                    </div>
                                </div>
                                <br>
                                <h4>{{ $item->productname }}</h4>
                                <div class="divPriceContainer mt-2">
                                    <div class="divPriceInnerContainer">Flash Sale</div>
                                    <h4 class="m-3"> <i class="fa-solid fa-naira-sign"></i>{{ $item->productprice }} <sub><del style="color: grey">{{ $item->productOldprice }}.00</del></sub> </h4>
                                </div>
                                <span> + Shipping From Cyprof</span>
                                <button class="btn btnAddToCartItem mt-1">ADD TO CART</button>
                                <div class="mt-2 text-center addItemNumberContainer">
                                    <!-- <form action="{{ route('addtocart') }}" id="addtocartFromContainer" method="post">
                                        @csrf -->
                                        <div class="row">
                                            <div class="col text-left">
                                                <span>Add Product Quantity:</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-end">
                                                <button class="btn btn-info w-100" id="minusBtn">-</button>
                                            </div>
                                            <div class="col text-center">
                                                <input type="text" class="form-control w-100" value="1" id="answer" name="answer" disabled>
                                            </div>
                                            <div class="col text-start">
                                                <button class="btn btn-info w-100" id="addBtn">+</button>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col text-left">
                                                <!-- Button trigger modal -->
                                                <!-- <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Add Item To Cart <i class="fa fa-shopping-cart"></i></button> -->
                                                
                                                <form name="addtocartFromContainer" id="addtocartFromContainer">
                                                    <!-- @csrf -->
                                                    <input type="hidden" name="InputproductIDCode" id="productIDCode" value="{{ $item->id }}">
                                                    <input type="hidden" name="productsQuantity" id="productsQuantity" value="1">
                                                    <button class="btn btn-success" id="addToCartSubmitBtn">Add Item To Cart <i class="fa fa-shopping-cart"></i></button>
                                                </form>
                                            </div>
                                            <div class="col text-right">
                                                <button class="btn btn-primary">Proceed To Checkout <i class="fa fa-credit-card"></i></button>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Item Added To Cart</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <span class="text-success">You have successfully added item to your cart.</span>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="{{ route('cart') }}">
                                                        <button type="button" class="btn btn-primary">Proceed to Cart</button>
                                                    </a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- </form> -->
                                    
                                </div>
                                <hr>
                                <span><b>PROMOTIONS</b></span>
                                <ul>
                                    <li> <i class="fa fa-star"></i> Call 08132824987</li>
                                    <li> <i class="fa fa-star"></i> Enjoy cheaper shipping fees when you select a Pickup Station at checkout.</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col itemDescriptionContainer">
                    <div class="itemDescriptionInnerContainer">
                        DELIVERY & RETURNS
                    </div>
                    <div class="itemDescriptionInnerContainer">
                        <span> <b>Cyprof</b> </span>
                        <br>
                        <span>Free delivery on thousand of products in lagos, Abuja</span>
                    </div>
                    <div class="itemDescriptionInnerContainer">
                        <span> <b>Choose your location</b> </span>
                        <form action="" method="post" class="mt-2 mb-2">
                            <select name="" id="selectState" onchange="State()" class="form-control">
                                <option value="Abia state">Abia state</option>
                                <option value="Anambra state">Anambra state</option>
                                <option value="Rivers state">Rivers state</option>
                                <option value="Enugu state">Enugu state</option>
                                <option value="Imo state">Imo state</option>
                            </select>
                            <select name="" id="Abia" class="form-control mt-2">
                                <option value="Umudike North">Umudike North</option>
                                <option value="Umudike South">Umudike South</option>
                                <option value="Aba North">Aba North</option>
                                <option value="Aba South">Aba South</option>
                                <option value="Isiala Ngwa North">Isiala Ngwa North</option>
                                <option value="Isiala Ngwa South">Isiala Ngwa South</option>
                                <option value="Ukwa West">Ukwa West</option>
                                <option value="Ukwa East">Ukwa East</option>
                                <option value="Obingwa">Obingwa</option>
                                <option value="Ikwuano">Ikwuano</option>
                                <option value="Bende">Bende</option>
                                <option value="Arochukwu">Arochukwu</option>
                                <option value="Ohafia">Ohafia</option>
                                <option value="Isuikwuato">Isuikwuato</option>
                                <option value="Ugwunagbo">Ugwunagbo</option>
                                <option value="Osisioma">Osisioma</option>
                                <option value="Nnochi">Nnochi</option>
                            </select>
                            <select name="" id="Rivers" class="form-control mt-2">
                                <option value="Port Harcourt">Port Harcourt</option>
                                <option value="Obio-Akpor">Obio-Akpor</option>
                                <option value="Okrika">Okrika</option>
                                <option value="Ogu–Bolo">Ogu–Bolo</option>
                                <option value="Eleme">Eleme</option>
                                <option value="Tai">Tai</option>
                                <option value="Gokana">Gokana</option>
                                <option value="Khana">Khana</option>
                                <option value="Oyigbo">Oyigbo</option>
                                <option value="Opobo–Nkoro">Opobo–Nkoro</option>
                                <option value="Andoni">Andoni</option>
                                <option value="Bonny">Bonny</option>
                                <option value="Degema">Degema</option>
                                <option value="Asari-Toru">Asari-Toru</option>
                                <option value="Akuku-Toru">Akuku-Toru</option>
                                <option value="Abua–Odual">Abua–Odual</option>
                                <option value="Ahoada West">Ahoada West</option>
                                <option value="Ahoada East">Ahoada East</option>
                                <option value="Ogba–Egbema–Ndoni">Ogba–Egbema–Ndoni</option>
                                <option value="Emohua">Emohua</option>
                                <option value="Ikwerre">Ikwerre</option>
                                <option value="Etche">Etche</option>
                                <option value="Omuma">Omuma</option>
                            </select>
                            <select name="" id="Anambra" class="form-control mt-2">
                                <option value="Aguata">Aguata</option>
                                <option value="Awka North">Awka North</option>
                                <option value="Awka South">Awka South</option>
                                <option value="Anambra East">Anambra East</option>
                                <option value="Anambra West">Anambra West</option>
                                <option value="Anaocha">Anaocha</option>
                                <option value="Ayamelum">Ayamelum</option>
                                <option value="Dunukofia">Dunukofia</option>
                                <option value="Ekwusigo">Ekwusigo</option>
                                <option value="Idemili North">Idemili North</option>
                                <option value="Idemili South">Idemili South</option>
                                <option value="Ihiala">Ihiala</option>
                                <option value="Njikoka">Njikoka</option>
                                <option value="Nnewi North">Nnewi North</option>
                                <option value="Nnewi South">Nnewi South</option>
                                <option value="Ogbaru">Ogbaru</option>
                                <option value="Onitsha North">Onitsha North</option>
                                <option value="Onitsha South">Onitsha South</option>
                                <option value="Orumba North">Orumba North</option>
                                <option value="Orumba South">Orumba South</option>
                                <option value="Oyi">Oyi</option>
                            </select>
                            <select name="" id="Enugu" class="form-control mt-2">
                                <option value="Aninri">Aninri</option>
                                <option value="Awgu">Awgu</option>
                                <option value="Enugu East">Enugu East</option>
                                <option value="Enugu North">Enugu North</option>
                                <option value="Enugu South">Enugu South</option>
                                <option value="Ezeagu">Ezeagu</option>
                                <option value="Igbo Etiti">Igbo Etiti</option>
                                <option value="Igbo Eze North">Igbo Eze North</option>
                                <option value="Igbo Eze South">Igbo Eze South</option>
                                <option value="Isi Uzo">Isi Uzo</option>
                                <option value="Nkanu East">Nkanu East</option>
                                <option value="Nkanu West">Nkanu West</option>
                                <option value="Nsukka">Nsukka</option>
                                <option value="Oji River">Oji River</option>
                                <option value="Udenu">Udenu</option>
                                <option value="Udi">Udi</option>
                                <option value="Uzo-Uwani">Uzo-Uwani</option>
                            </select>
                            <select name="" id="Imo" class="form-control mt-2">
                                <option value="Aboh Mbaise">Aboh Mbaise</option>
                                <option value="Ahiazu Mbaise">Ahiazu Mbaise</option>
                                <option value="Ehime Mbano">Ehime Mbano</option>
                                <option value="Ezinihitte Mbaise">Ezinihitte Mbaise</option>
                                <option value="Ideato North">Ideato North</option>
                                <option value="Ideato South">Ideato South</option>
                                <option value="Ihitte/Uboma">Ihitte/Uboma</option>
                                <option value="Ikeduru">Ikeduru</option>
                                <option value="Isiala Mbano">Isiala Mbano</option>
                                <option value="Isu">Isu</option>
                                <option value="Mbaitoli">Mbaitoli</option>
                                <option value="Ngor Okpala">Ngor Okpala</option>
                                <option value="Njaba">Njaba</option>
                                <option value="Nkwerre">Nkwerre</option>
                                <option value="Nwangele">Nwangele</option>
                                <option value="Obowo">Obowo</option>
                                <option value="Oguta">Oguta</option>
                                <option value="Ohaji/Egbema">Ohaji/Egbema</option>
                                <option value="Okigwe">Okigwe</option>
                                <option value="Onuimo">Onuimo</option>
                                <option value="Orlu">Orlu</option>
                                <option value="Orsu">Orsu</option>
                                <option value="Oru East">Oru East</option>
                                <option value="Oru West">Oru West</option>
                                <option value="Owerri Municipal">Owerri Municipal</option>
                                <option value="Owerri North">Owerri North</option>
                                <option value="Owerri West">Owerri West</option>
                            </select>
                        </form>

                        <span> <b>Pickup Station</b> </span>
                        <br>
                        <span>Delivery</span>
                        <span class="fa-solid fa-naira-sign">1,700</span>
                        <br>
                        <span>Arriving at pickup station between 31 April & 04 May when you order within next 16hrs 59mins.</span>
                    </div>
                    <div class="itemDescriptionInnerContainer mt-2 mb-2">
                        <span> <b>Return Policy</b> </span>
                        <br>
                        <span>Free return within 7days</span>
                    </div>
                    <span> <b>Warranty</b> </span>
                    <br>
                    <span>Techincal issues</span>
                    <br>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12 itemDescriptionContainer">
                            <div class="itemDescriptionInnerContainer">
                                <span><b>PRODUCTS DETAILS</b></span>
                            </div>
                            <p>{{ $item->productdescription }}</p>
                        </div>
                        <div class="col-12 mt-3 itemDescriptionContainer">
                            <div class="itemDescriptionInnerContainer">
                                <span><b>SPECIFICATIONS</b></span>
                            </div>
                            <p>this is a nice products</p>
                        </div>
                        <div class="col-12 mt-3 itemDescriptionContainer">
                            <div class="itemDescriptionInnerContainer">
                                <span><b>Verified Customer Feedback</b></span>
                            </div>
                            <p>this is a nice products</p>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col">
                    <div class="row">
                        <div class="col itemDescriptionContainer">
                            <div class="itemDescriptionInnerContainer">
                                <span><b>SELLER INFORMATION</b></span>
                            </div>
                            <span>Cyprof</span>
                            <br>
                            <span>100% secure & safe</span>
                        </div>
                        <div class="col-12 mt-3 itemDescriptionContainer">
                            <div class="itemDescriptionInnerContainer">
                                <span><b>Questions about this products</b></span>
                            </div>
                            <button class="btn btn-success m-3">Chat me</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    
    
    
    
    
    
    {{-- footer --}}
    <div class="row">
        @extends('footer')
    </div>    
</body>
</html>