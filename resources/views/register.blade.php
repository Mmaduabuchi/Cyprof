<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
    <link rel="stylesheet" href="{{asset("assets/bootstrap-4/css/bootstrap.css")}}">
</head>
<body>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h1 class="text-center"><span id="sitename">Cy</span>prof</h1>
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>                
            @endif
            <form action="/registeruser" method="POST" id="signupFormContainer">
                @csrf
                <h2>Create account</h2>
                <br>
                <label><b>Your name</b></label>
                <input type="text" name="username" id="inputBox" placeholder="Enter your name" class="form-control" required>
                <label><b>Your phone</b></label>
                <input type="tel" name="usernumber" id="inputBox" placeholder="Enter your phone number" class="form-control" required>
                <label><b>Your email</b></label>
                <input type="email" name="useremail" id="inputBox" placeholder="Enter your email" class="form-control" required>
                <label><b>Create password</b></label>
                <input type="password" name="userpassword" id="inputBox" placeholder="At least 6 characters" class="form-control" required>
                <label><b>Re-enter pasword</b></label>
                <input type="password" name="re_userpassword" id="inputBox" placeholder="Confirm password" class="form-control" required>
                <span><b>By creating an account, you agree to Cyprof <a href="#">Terms and Conditions</a></b></span>
                <br>
                <hr>
                <input type="submit" value="Continue" class="SignupSubmitBtn">
                <br>
                <hr>
                <span><b>Already have an account? <a href="/signin">Sign in</a></b></span>
                <br>
            </form>
        </div>
        <div class="col"></div>
    </div>



    {{-- footer --}}
    <div class="row">
        @extends('footer')
    </div>
    {{-- end for footer --}}
    <script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>    
</body>
</html>