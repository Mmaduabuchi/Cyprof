<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin/message</title>
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
                        <p><span class="fa fa-shopping-cart"></span> Orders</p>
                        <hr>
                        <p><span class="fa fa-users"></span> Customers</p>
                        <hr>
                        <a href="/admin/account" class="text-light">
                            <p><span class="fa fa-message"></span> Messages</p>
                        </a>
                        <hr>
                        <p><span class="fa fa-bell"></span> Notifications</p>
                        <hr>
                        <p><span class="fa fa-money-check"></span> Payment</p>
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
                    <h2>MESSAGE</h2>
                </div>
                <div class="col text-left col-md-5 p-3 shadowSmSidebarContainer">
                    <div class="row">
                        <div class="col pt-2 msgNotifContainer">
                            <span class="fa fa-message"> Message</span>
                            <span class="fa fa-bell"> Notification</span>
                        </div>
                        <div class="col col-md-2 text-center logoutContainer mr-5 bg-danger text-light fw-bold">
                            <span class="fa fa-sign-out"></span>Logout
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h3>Admin message</h3>
                </div>
            </div>
        </div>
    </div>
    




    {{-- end for footer --}}
    <script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>
</body>
</html>