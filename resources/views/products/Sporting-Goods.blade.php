<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sporting Goods</title>
</head>
<body class="bg-light">
    {{-- header --}}
    <section class="headerSectionNavContainer">
        <div class="row">
            @include('header')
        </div>
    </section>
    {{-- end for header --}}
    
    <div class="row mt-3">
        <div class="col text-center p-4 contactHelpContainer">
            <h1>HELP CENTER</h1>
        </div>
    </div>
      
    <div class="row">
        @extends('footer')
    </div>    
</body>
</html>