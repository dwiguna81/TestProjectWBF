@extends('master')
@section('content')

  <div class="jumbotron jumbotron-fluid jbbg">
    <div class="container text-jb">
      <h1 class="display-4 text-uppercase">all products</h1>
      <p class="lead">Home > All Products</p>
    </div>
  </div>

  <!-- search -->
  <div class="container-flex">
    <div class="row">
      <div class="col-md-3">
        <div class="card csearch" style="width: 19rem;">
          <div class="card-body border">
            <h5 class="card-title text-uppercase">product categories</h5>
            <div class="wrapper">
              <nav id="sidebar">
                <ul class="list-unstyled components">
                <li class="active border-bottom">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dt">Men</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li class="border-bottom">
                            <a href="#">Shirt</a>
                        </li>
                        <li class="border-bottom">
                            <a href="#">T-Shirt</a>
                        </li>
                        <li>
                            <a href="#">Hoodie</a>
                        </li>
                    </ul>
                </li>
                <li class="border-bottom">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dt">Woman</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="border-bottom">
                            <a href="#">Add Product</a>
                        </li>
                        <li class="border-bottom">
                            <a href="#">Add Category</a>
                        </li>
                        <li>
                            <a href="#">View Product</a>
                        </li>
                    </ul>
                </li>
                <li class="border-bottom">
                    <a href="#pageSubSecondmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dt">Child</a>
                    <ul class="collapse list-unstyled" id="pageSubSecondmenu">
                        <li class="border-bottom">
                            <a href="#">Add Product</a>
                        </li>
                        <li class="border-bottom">
                            <a href="#">Add Category</a>
                        </li>
                        <li>
                            <a href="#">View Product</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">On Sale</a>
                </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="card" style="width: 19rem;">
          <div class="card-body border">
            <h5 class="card-title text-uppercase mb-4">price range</h5>
            <div class="row ml-1">
              <p class="trp">RP</p>
              <input type="text" class="border border-secondary" placeholder="0" name="search">
            </div>
            <div class="row ml-1 mt-2">
              <p class="bg-dark text-white">RP</p>
              <input type="text" class="border border-secondary" placeholder="825000" name="search">
            </div>
          </div>
          <div class="border border-top-0">
            <button type="button" class="btnfilter">FILTER</button>
          </div>
        </div>
      </div>
  </div>

  <!-- content -->
  <div class="container-content">
    <div class="col-md-12">
      <div class="row display border-top border-bottom">
          <p class="mp">Show 166 products for "Men > Shirt"</p>
          
          <div class="dropdown mp">
            <button class="btn btn-white border btn-sm dropdown-toggle display" style="border-radius: 0%; width: 12em" type="button" data-toggle="dropdown">Default Sorting<span class="caret"></span></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">Default Sorting</button>
                <button class="dropdown-item" type="button">By Price</button>
                <button class="dropdown-item" type="button">By Size</button>
              </div>
          </div>
      </div>
        <div class="row">
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product1.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product2.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product3.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product4.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product1.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product2.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product3.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product4.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product1.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product2.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product3.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product4.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product1.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product2.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product3.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
          <div class="card mcard" style="width: 13rem;">
            <div class="card-body">
              <div class="d-block">
                <img src="{{asset('storage/images/product4.png')}}" class="image-product">
              </div>
              <button class="rm text-uppercase">Read More</button>
              <p class="border-bottom font-weight-normal" style="font-size: 0.8em;">In Stock</p>
                <p class="text-uppercase mb-0 font-weight-bolder" style="font-size: 0.9em;">corral wool jacket</p>
                <p class="mb-0 font-weight-normal" style="font-size: 0.7em;">Men, Jacket</p>
                <p class="text-uppercase font-weight-bolder" style="font-size: 0.9em;">idr 500.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection