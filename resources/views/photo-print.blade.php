@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/photo-studio.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/landing.css') }}" />
    <title>Home</title>
</head>
<body>
    <div class="container-header" id="section1">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('/image/bg-photoprint.png')}}" alt="First slide">
                </div>
            </div>
        </div>
    </div>

    <div class="container-body">
    <div class="card-head text-center">
                <h2>Our Products</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Print On Block</p>
                            <h5 class="card-title">Rp. 200.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">PhotoMix Series</p>
                            <h5 class="card-title">Rp. 200.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Printing With Frame</p>
                            <h5 class="card-title">Rp. 100.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card border-0">
                        <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Coming Soon</p>
                            <h5 class="card-title">Rp. 50.000</h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <div class="card border-0">
                            <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Coming Soon</p>
                                <h5 class="card-title">Rp. 500.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="card border-0">
                            <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Coming Soon</p>
                                <h5 class="card-title">Rp. 500.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="card border-0">
                            <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Coming Soon</p>
                                <h5 class="card-title">Rp. 2.000.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="card border-0">
                            <img src="{{URL::asset('/image/photo-produk-photoprint.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Coming Soon</p>
                                <h5 class="card-title">Rp. 600.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</body>
</html>
@include('layouts.footer')
@endsection