<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgotten password to your account</title>
    <link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/style.css") }}">
    <link rel="stylesheet" href="{{asset("assets/bootstrap-4/css/bootstrap.css")}}">
</head>

<body>
    <div class="row">
        <div class="col-1 col-md-3"></div>
        <div class="col">
            <div class="row mt-5">
                <div class="col text-center">
                    <h3>Reset your password!</h3>
                    <hr>
                </div>
            </div>
            <section class="sectionBar-forgotten-password mt-1 mb-5">
                <div class="row mb-3">
                    <div class="col">
                        <p>
                            <b>Hey,</b>
                        </p>
                        <p>Need to reset your password? No problem!</p>
                    </div>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
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

                <form action="{{ route('forgot') }}" method="post">
                    @csrf
                    <label for="email">Enter your Email:</label>
                    <input type="email" name="email" placeholder="John@gmail.com" class="form-control">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </section>
        </div>
        <div class="col-1 col-md-3"></div>
    </div>



    {{-- footer --}}
    <div class="row">
        @extends('footer')
    </div>
    {{-- end for footer --}}
    <script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>
</body>

</html>