<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
    <link rel="stylesheet" href="{{asset("assets/bootstrap-4/css/bootstrap.css")}}">
    <script src="{{asset("assets/app.js")}}" defer></script>
    <style>
        hr{
            background: grey;
        }
    </style>
</head>
<body class="bg-light">
    <div class="row">
        <div class="col col-md-2 text-light sideBarContainer">
            <div class="row">
                <div class="col-12 p-3">
                    <h4>ADMIN PANEL</h4>
                    <hr>
                </div>
                <div class="col">
                    <div class="sidebarTextContainer">
                        <a href="/admin" class="text-light">
                            <p><span class="fa fa-dashboard"></span> Dashboard</p>
                        </a>
                        <hr>
                        <a href="{{ route('orders') }}" class="text-light">
                            <p><span class="fa fa-shopping-cart"></span> Orders</p>
                        </a>
                        <hr>
                        <a href="{{ route('users') }}" class="text-light">
                            <p><span class="fa fa-users"></span> Customers</p>
                        </a>
                        <hr>
                        <a href="{{ route('upload') }}" class="text-light">
                            <p><span class="fa fa-upload"></span> Upload products</p>
                        </a>
                        <hr>
                        <a href="{{ route('payments') }}" class="text-light">
                            <p><span class="fa fa-money-check"></span> Payment</p>
                        </a>
                        <hr>
                        <p><span class="fa fa-user"></span> Account</p>
                        <hr>
                        <p><span class="fa fa-file"></span> Users Report</p>
                        <hr>
                        <p><span class="fa fa-cog"></span> Settings</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row shadow-sm shadowSmContainer">
                <div class="col p-3">
                    {{-- <form action="" method="post">
                        <input type="text" name="search" placeholder="Search for....." id="inputSearchboxAdmin">
                        <input type="submit" value="SEARCH" id="inputSubmitBtnAdmin">
                    </form> --}}
                </div>
                <div class="col text-left col-md-5 p-3 shadowSmSidebarContainer">
                    <div class="row">
                        <div class="col pt-2 msgNotifContainer">
                            <span class="fa fa-bell"> Notification</span>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('logout') }}" class="text-light">
                                <button class="btn btn-danger">Logout <i class="fa fa-sign-out"></i> </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h3>Dashboard</h3>
                </div>
            </div>
            <div class="row m-4">
                <div class="col">
                    <div class="containerBox1">
                        <div class="row">
                            <div class="col">
                                <span class="containerBox1Text">Users</span>
                                <h2>23,000k</h2>
                            </div>
                            <div class="col">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="containerBox2">
                        <div class="row">
                            <div class="col">
                                <span class="containerBox2Text">Orders</span>
                                <h2>2,300</h2>
                            </div>
                            <div class="col">
                                <span class="fa fa-shopping-cart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="containerBox3">
                        <div class="row">
                            <div class="col">
                                <span class="containerBox3Text">Products</span>
                                <h2>600</h2>
                            </div>
                            <div class="col">
                                <span class="fa fa-store"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="containerBox4">
                        <div class="row">
                            <div class="col">
                                <span class="containerBox4Text">Users</span>
                                <h2>23,000k</h2>
                            </div>
                            <div class="col">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    




    {{-- end for footer --}}
    <script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>
</body>
</html>