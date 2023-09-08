<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Orders</title>
</head>
<body  class="bg-light">
    {{-- header --}}
    <section class="headerSectionNavContainer">
        <div class="row">
            @include('header')
        </div>
    </section>
    {{-- end for header --}}
    
    <section>
        <div class="row m-1 m-md-0 mt-md-3">
            <div class="col col-md-1 d-none d-md-block"></div>
            <div class="col">
                <div class="navigationContainer">
                    <ul class="navigationContainerUlUserPage pt-3 pb-3">
                        <li class="listNavBar">
                            <a href="{{ route('dashboard') }}" class="userpagelink"><span class="fa fa-user Icon"></span>My Cyprof Account</a>                   
                        </li>
                        <li class="listNavBarUserPage">
                            <a href="{{ route('orders') }}"  class="text-white">
                                <span class="fa fa-shopping-cart Icon"></span>Orders
                            </a>
                        </li>
                        <li class="listNavBar"><span class="fa fa-message Icon"></span>Inbox</li>
                        <li class="listNavBar"><span class="fa fa-mobile-screen Icon"></span>Pending Reviews</li>
                        <hr>
                        <li class="listNavBar">
                            <a href="{{ route('settings') }}" class="userpagelink">Account Management</a>
                        </li>
                        <li class="listNavBar">Address Book</li>
                        <hr>
                        <li class="listNavBar">Close Account</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 bg-white col-md-7">
                <div class="row">
                    <div class="col p-3">
                        <h4>Orders</h4>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row"></div>
                    </div>
                </div>
            </div>
            <div class="col col-md-1 d-none d-md-block"></div>
        </div>
    </section>







    {{-- footer --}}
    <div class="row">
        @extends('footer')
    </div>
    {{-- end for footer --}}    
</body>
</html>