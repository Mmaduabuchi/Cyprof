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
        <div class="col-10 col-md-4">
            <h3 class="text-center"><span id="sitename">Cy</span>prof</h3>
            <hr>
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>                
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>                
            @endif
            <section  id="signupFormContainer" class="mb-5">
                <form action="{{ route('loginpost') }}" method="post">
                    @csrf
                    <h3>Welcome Back!</h3>
                    <br>
                    <label><b>Your email</b></label>
                    <input type="email" name="email" id="inputBox" placeholder="Enter your email" class="form-control">
                    <label><b>Enter password</b></label>
                    <input type="password" name="password" id="inputBox" placeholder="At least 6 characters" class="form-control">
                    <span><b>By continuing, you agree to Cyprof <a href="#">Terms and Conditions</a></b></span>
                    <br>
                    <input type="submit" value="Continue" class="SignupSubmitBtn">
                </form>
                <button class="btn btn-danger mt-3 w-100">Forgotten password!</button>
                <a href="{{ route('register') }}">
                    <button class="btn btn-success text-light w-100 fw-bold mt-2">New to Cyprof? Create an account</button>
                </a>
            </section>
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