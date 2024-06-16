<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    <link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
    <link rel="stylesheet" href="{{asset("assets/bootstrap-4/css/bootstrap.css")}}">
</head>
<body class="bg-light">
    <div class="row p-3">
        <div class="col text-center col-md-2">
            <h1>
                <a href="/" class="text-dark">
                    <span id="sitename">Cy</span>prof
                </a>
            </h1>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-12 mb-5 text-center">
                    <h3>Hello <span id="sitename">{{ Auth()->user()->name }}</span></h3>
                </div>
                <div class="col">
                    <div class="settingsBox bg-white pt-3 p-2">
                        <h5 class="text-center"> <span class="fa fa-user mr-3 text-dark"></span> Profile Details</h5>
                        <hr>
                        <span>Basic Details</span>
                        <br><br>
                        <span>Edit Phone Number</span>
                    </div>
                </div>
                <div class="col">
                    <div class="settingsBox bg-white pt-3 p-2">
                        <h5 class="text-center"> <span class="fa fa-key mr-3 text-dark"></span> Security Settings</h5>
                        <hr>
                        <span>Change Password</span>
                        <br><br>
                        <span>Pin Settings</span>
                        <br><br>
                        <span class="text-danger">Delete Account</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-md-1"></div>
    </div>
    
</body>
</html>