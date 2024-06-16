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
    <div class="row mb-5">
        <div class="col"></div>
        <div class="col-10 col-md-4">
            <h3 class="text-center"><span id="sitename">Cy</span>prof</h3>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('registerpost') }}" method="POST" id="signupFormContainer">
                @csrf
                <h3>Create account</h3>
                <br>
                <label><b>Your name</b></label>
                <input type="text" name="username" id="inputBox" placeholder="Enter your name" value="{{ old('username') }}" class="form-control" required>
                <label><b>Your phone</b></label>
                <input type="tel" name="phone" id="inputBox" placeholder="Enter your phone number" value="{{ old('phone') }}" class="form-control" required>
                <label><b>Your email</b></label>
                <input type="email" name="email" id="inputBox" placeholder="Enter your email" value="{{ old('email') }}" class="form-control" required>
                <label><b>Create password</b></label>
                <input type="password" name="password" id="inputBox" placeholder="At least 6 characters" value="{{ old('password') }}" class="form-control" required>
                <label><b>Re-enter pasword</b></label>
                <input type="password" name="Confirm_password" id="inputBox" placeholder="Confirm password" class="form-control" required>
                <span><b>By creating an account, you agree to Cyprof <a href="#">Terms and Conditions</a></b></span>
                <br>
                <hr>
                <input type="submit" value="Continue" class="SignupSubmitBtn">
                <br>
                <hr>
                <span><b>Already have an account? <a href="{{ route('login') }}">Sign in</a></b></span>
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