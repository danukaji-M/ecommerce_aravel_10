@php
    $fname = session('fname');
    $lname = session('lname');
    $email = session('email');
@endphp
@extends('leyouts.app')

@section('title', 'LEOPARD LANKA | SELLER ACCOUNT')
@section('content')
    @include('leyouts.navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @if ($seller)
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2 d-none d-lg-block">
                                    <div class="row">
                                        <div class="col-12">
                                            seller name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-lg-5 m-lg-4 card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ asset('images/seller/') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-7">
                                            <span class="fw-bold text-info">Product Name</span>
                                            <br>
                                            <span class="fw-bold text-info">product Price</span>
                                            <br>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <button
                                                        class="btn btn-outline-warning form-control btn-sm">Discount</button>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <button
                                                        class="btn btn-outline-info form-control btn-sm">Desable/Enable</button>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="col-12 mb-4 col-lg-6">
                                                    <button class="btn btn-outline-danger form-control btn-sm">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 m-lg-4 card">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ asset('images/seller/') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-7">
                                            <span class="fw-bold text-info">Product Name</span>
                                            <br>
                                            <span class="fw-bold text-info">product Price</span>
                                            <br>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <button
                                                        class="btn btn-outline-warning form-control btn-sm">Discount</button>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <button
                                                        class="btn btn-outline-info form-control btn-sm">Desable/Enable</button>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="col-12 mb-4 col-lg-6">
                                                    <button class="btn btn-outline-danger form-control btn-sm">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <button class="btn btn-link text-center" onclick="sellerReg();">Register As
                                                a
                                                Seller</button>
                                        </div>
                                    </div>
                                </strong>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('leyouts.footer')
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endpush
@push('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endpush
