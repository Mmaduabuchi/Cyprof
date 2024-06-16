<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin uploading products page</title>
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
            <section class="headerSectionNavContainer">
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
            </section>
        </div>
        <div class="col">
            <section class="headerSectionNavContainer">
                <div class="row shadow-sm shadowSmContainer">
                    <div class="col p-3">
                        {{-- <h2>UPLOAD NEW PRODUCTS</h2> --}}
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
            </section>
            <div class="row mt-3">
                <div class="col">
                    <h3>Upload New Products</h3>
                </div>
                <div class="col-12">
                    <div class="row mt-5">
                        <div class="col-1"></div>
                        <div class="col bg-white mb-5 p-5">
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
                            <section>
                                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label for="product name">Product name</label>
                                    <input type="text" name="productname" placeholder="Enter Name:" class="form-control p-3 w-100" required>
                                    <br>
                                    <label for="product price">Product price</label>
                                    <input type="text" name="productprice" placeholder="Enter Price:" class="form-control w-100 p-3" required>
                                    <br>
                                    <label for="product price">Product old price</label>
                                    <input type="text" name="productOldprice" placeholder="Enter Old Price:" class="form-control w-100 p-3" required>
                                    <br>
                                    <label for="product image">Product Image</label>
                                    <input type="file" name="productimage" class="form-control p-3" required>
                                    <br>
                                    <label for="product price">Product Number in stock</label>
                                    <select name="productInStock" id=""  class="form-control" required>
                                        <option value="100">1-100</option>
                                        <option value="200">100-200</option>
                                        <option value="300">200-300</option>
                                        <option value="400">300-400</option>
                                        <option value="500">400-500</option>
                                        <option value="600">500-600</option>
                                        <option value="700">600-700</option>
                                        <option value="800">700-800</option>
                                        <option value="900">800-900</option>
                                        <option value="1000">900-Unlimited</option>
                                    </select>
                                    <br>
                                    <label for="old and new">Old or New Product</label>
                                    <select name="productbrand" class="form-control">
                                        <option value="New">Brand New</option>
                                        <option value="Old">Fairly Used</option>
                                    </select>
                                    <br>
                                    <label for="Product Categories">Product Categories</label>
                                    <select name="productcategories" class="form-control">
                                        <option value="Fashion">Fashion</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Babies">Babies</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="Appliances">Appliances</option>
                                        <option value="Health">Health</option>
                                        <option value="Phone">Phone</option>
                                        <option value="Computing">Computing</option>
                                    </select>
                                    <br>
                                    <label for="product description">Enter Product Details</label>
                                    <textarea name="productdescription" id="" placeholder="Describe your product here." cols="30" rows="10" class="form-control"></textarea>
                                    <br>
                                    <input type="submit" value="UPLOAD PRODUCT" class="btn btn-primary w-100 p-3">
                                </form>
                            </section>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    




    {{-- end for footer --}}
    <script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>
</body>
</html>