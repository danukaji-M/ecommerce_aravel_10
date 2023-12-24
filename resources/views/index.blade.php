@extends('leyouts.app')
@php
    $fname = session('fname');
    $lname = session('lname');
    $email = session('email');
@endphp
@section('title', 'LEOPARD LANKA | HOME')
@section('content')
    @include('leyouts.navbar')
    <hr>
    @include('leyouts.slider')
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 mt-3">
                    <h3 class="text-center">New Arrivals</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-11 col-md-11 col-lg-10">
                    <div class="row align-items-center justify-content-center">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="col-6 col-md-3 ">
                                <div class="row">
                                    <div class="card mt-3 col-11 col-lg-10">
                                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('images/product1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('images/product1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <hr>
                                            <p class="fw-bold" style="font-size: 0.5rem">
                                                POCO M3 Pro 5G (Cool Yellow, 64 GB) (4 GB RAM)
                                            </p>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="fw-bold text-info" style="font-size: 0.5rem">
                                                        Rs. 13,999</p>
                                                    <p class="btn1 ">free delevery</p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <button class="text-center bg-warning form-control btn text-light fw-bold" >SHOP NOW</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @include('leyouts.footer')
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endpush
@push('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endpush
