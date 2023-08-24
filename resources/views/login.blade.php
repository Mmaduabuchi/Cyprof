<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login to your account</title>
    <link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
    <link rel="stylesheet" href="{{asset("assets/bootstrap-4/css/bootstrap.css")}}">
</head>
<body>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h1 class="text-center"><span id="sitename">Cy</span>prof</h1>
            <form action="post" method="post" id="signupFormContainer">
                <h2>Create account</h2>
                <br>
                <label><b>Your email</b></label>
                <input type="email" name="useremail" id="inputBox" placeholder="Enter your email" class="form-control">
                <label><b>Enter password</b></label>
                <input type="password" name="userpassword" id="inputBox" placeholder="At least 6 characters" class="form-control">
                <span><b>By continuing, you agree to Cyprof <a href="#">Terms and Conditions</a></b></span>
                <br>
                <input type="submit" value="Continue" class="SignupSubmitBtn">
            </form>
            <div class="row mt-4 mb-5">
                <div class="col-1"></div>
                <div class="col text-center">
                    <span id="NewToCyprofText">
                        <b>New to Cyprof?</b>
                    </span>
                    <a href="/signup">
                        <button class="SigninSubmitBtn bg-primary text-light fw-bold mt-3">Create an account</button>
                    </a>
                </div>
                <div class="col-1"></div>
            </div>
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