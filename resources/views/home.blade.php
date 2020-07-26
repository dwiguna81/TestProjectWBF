@extends('master')
@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner slider">
        <div class="carousel-item active">
        <img src="{{asset('storage/images/4.PNG')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('storage/images/3.PNG')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('storage/images/4.PNG')}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="text-uppercase text-center mt-5">
        <p>new arrivals</p>
    </div>

    <div class="container">
        <div class="row justify-content-around mt-5">
            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner disc">
            <div class="carousel-item active">
                <img src="{{asset('storage/images/3.PNG')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="text-uppercase text-center mt-5">
        <p>for you</p>
    </div>

    <div class="container">
        <div class="row justify-content-around mt-5">
            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

            <div class="card col-md-3" style="width: 18rem;">
                <img src="{{asset('storage/images/3.PNG')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <input type="button" value="SEE ALL PRODUCT">
    </div>

@endsection