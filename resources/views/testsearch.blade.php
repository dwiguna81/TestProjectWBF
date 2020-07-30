@extends('master')
@section('content')

    <div class="jumbotron jumbotron-fluid jbbg">
        <div class="container text-jb">
            <h1 class="display-4 text-uppercase" style="font-family: Barlow-Condensed-bold;">all products</h1>
            <p class="lead" style="font-family: Barlow-Condensed-reguler;">Home > All Products</p>
        </div>
    </div>

    <div class="container-fluid" style="justify-items: center">
        <div class="row ml-2 mr-2">
            <div class="col-md-3">
                <div class="container-flex">
                    <div class="row">
                        <div class="card csearch" style="width: 19rem;">
                            <div class="card-body border">
                                <h5 class="card-title text-uppercase fontb">product categories</h5>
                                <div class="wrapper">
                                <nav id="sidebar">
                                    <ul class="list-unstyled components">
                                    <li class="active border-bottom">
                                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dt text-dark sidefont">Men</a>
                                        <ul class="collapse list-unstyled" id="homeSubmenu">
                                            <li class="border-bottom">
                                                <a href="#" class="text-dark sidefont">Shirt</a>
                                            </li>
                                            <li class="border-bottom">
                                                <a href="#" class="text-dark sidefont">T-Shirt</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-dark sidefont">Hoodie</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="border-bottom">
                                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dt text-dark sidefont">Woman</a>
                                        <ul class="collapse list-unstyled" id="pageSubmenu">
                                            <li class="border-bottom">
                                                <a href="#" class="text-dark sidefont">Add Product</a>
                                            </li>
                                            <li class="border-bottom">
                                                <a href="#" class="text-dark sidefont">Add Category</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-dark sidefont">View Product</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="border-bottom">
                                        <a href="#pageSubSecondmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dt text-dark sidefont">Child</a>
                                        <ul class="collapse list-unstyled" id="pageSubSecondmenu">
                                            <li class="border-bottom">
                                                <a href="#" class="text-dark sidefont">Add Product</a>
                                            </li>
                                            <li class="border-bottom">
                                                <a href="#" class="text-dark sidefont">Add Category</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-dark sidefont">View Product</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="text-danger sidefont">On Sale</a>
                                    </li>
                                    </ul>
                                </nav>
                                </div>
                            </div>
                        </div>
                        <div class="card csearch" style="width: 19rem;">
                            <div class="card-body border">
                                <h5 class="card-title text-uppercase mb-4 ml-1 fontb">price range</h5>
                                <div class="row ml-1">
                                    <button class="trp border-dark" style="font-family: Barlow-Condensed-bold; font-size: 1.2em;">Rp</button>
                                    <input type="text" class="border border-secondary firstprice" placeholder="0" name="search">
                                </div>
                                <div class="row ml-1 mt-2">
                                <button class="trp border-dark" style="font-family: Barlow-Condensed-bold; font-size: 1.2em;">Rp</button>
                                    <input type="text" class="border border-secondary firstprice" placeholder="825000" name="search">
                                </div>
                            </div>
                            <div class="border border-top-0">
                                <button type="button" class="btnfilter">FILTER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="container-content">
                    <div class="col">
                        <div class="row display border-top border-bottom">
                            <p class="mp" style="font-family: Barlow-Condensed-semibold; font-size: 1.2em;">Show 166 products for "Men > Shirt"</p>
                        
                            <div class="dropdown mp">
                                <button class="btn btn-white border btn-sm dropdown-toggle display" style="border-radius: 0%; width: 12em; font-size: 0.9em" type="button" data-toggle="dropdown">Default Sorting<span class="caret"></span></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Default Sorting</button>
                                    <button class="dropdown-item" type="button">By Price</button>
                                    <button class="dropdown-item" type="button">By Size</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card mcard" style="width: 14rem;">
                                <div class="card-body">
                                    <div class="d-block">
                                        <img src="{{asset('storage/images/product1.png')}}" class="image-product">
                                    </div>
                                    <button class="rm text-uppercase">Read More</button>
                                    <p class="border-bottom mt-1 mb-1" style="font-size: 0.8em; font-family: Barlow-Condensed-reguler;">In Stock</p>
                                    <p class="text-uppercase mb-0" style="font-size: 1em; font-family: Barlow-Condensed-semibold;">corral wool jacket</p>
                                    <p class="mb-0" style="font-size: 0.7em; font-family: Barlow-Condensed-reguler;">Men, Jacket</p>
                                    <p class="text-uppercase" style="font-size: 1em; font-family: Barlow-Condensed-medium">idr 500.000</p>
                                </div>
                            </div>

                            <div class="card mcard" style="width: 14rem;">
                                <div class="card-body">
                                    <div class="d-block">
                                        <img src="{{asset('storage/images/product2.png')}}" class="image-product">
                                    </div>
                                    <button class="rm text-uppercase">Read More</button>
                                    <p class="border-bottom mt-1 mb-1" style="font-size: 0.8em; font-family: Barlow-Condensed-reguler;">In Stock</p>
                                    <p class="text-uppercase mb-0" style="font-size: 1em; font-family: Barlow-Condensed-semibold;">corral wool jacket</p>
                                    <p class="mb-0" style="font-size: 0.7em; font-family: Barlow-Condensed-reguler;">Men, Jacket</p>
                                    <p class="text-uppercase" style="font-size: 1em; font-family: Barlow-Condensed-medium">idr 500.000</p>
                                </div>
                            </div>

                            <div class="card mcard" style="width: 14rem;">
                                <div class="card-body">
                                    <div class="d-block">
                                        <img src="{{asset('storage/images/product3.png')}}" class="image-product">
                                    </div>
                                    <button class="rm text-uppercase">Read More</button>
                                    <p class="border-bottom mt-1 mb-1" style="font-size: 0.8em; font-family: Barlow-Condensed-reguler;">In Stock</p>
                                    <p class="text-uppercase mb-0" style="font-size: 1em; font-family: Barlow-Condensed-semibold;">corral wool jacket</p>
                                    <p class="mb-0" style="font-size: 0.7em; font-family: Barlow-Condensed-reguler;">Men, Jacket</p>
                                    <p class="text-uppercase" style="font-size: 1em; font-family: Barlow-Condensed-medium">idr 500.000</p>
                                </div>
                            </div>

                            <div class="card mcard" style="width: 14rem;">
                                <div class="card-body">
                                    <div class="d-block">
                                        <img src="{{asset('storage/images/product4.png')}}" class="image-product">
                                    </div>
                                    <button class="rm text-uppercase">Read More</button>
                                    <p class="border-bottom mt-1 mb-1" style="font-size: 0.8em; font-family: Barlow-Condensed-reguler;">In Stock</p>
                                    <p class="text-uppercase mb-0" style="font-size: 1em; font-family: Barlow-Condensed-semibold;">corral wool jacket</p>
                                    <p class="mb-0" style="font-size: 0.7em; font-family: Barlow-Condensed-reguler;">Men, Jacket</p>
                                    <p class="text-uppercase" style="font-size: 1em; font-family: Barlow-Condensed-medium">idr 500.000</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row display pagin">
                            <div>
                                <ul class="pagination">
                                    <li><a href="#">< PREV</a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">NEXT ></a></li>
                                </ul>
                            </div>

                            <p style="font-family: Barlow-Condensed-medium; font-size: 1.1em;">Showing 13-24 of 33 results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection