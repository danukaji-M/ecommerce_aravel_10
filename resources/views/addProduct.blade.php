@php
    $fname = session('fname');
    $lname = session('lname');
    $email = session('email');
@endphp
@if ($email)
    @extends('leyouts.app')

    @section('title', 'LEOPARD LANKA | ADD PRODUCT')
    @section('content')
        @include('leyouts.navbar')
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-lg-10 card">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <label for="product-name">Product Name</label>
                                    <input type="text" id="product-name" class="form-control">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="product-price">Product Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text">LKR.</span>
                                        <input type="text" id="product-price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="product-description mt-2 mb-3">Product Description</label>
                                    <textarea name="product-description" id="product-description" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="col-12 mt-2 mb-3">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-3">
                                            <label for="img1" class="">
                                                <div class="card ">
                                                    <img src="{{ asset('images/placeholder.jpg') }}" alt=""
                                                        class="img-fluid img-thumbnail">
                                                </div>
                                            </label>
                                            <input type="file" accept="image/*" id="img1"
                                                class=" d-none form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="img2" class="">
                                                <div class="card ">
                                                    <img src="{{ asset('images/placeholder.jpg') }}" alt=""
                                                        class="img-fluid img-thumbnail">
                                                </div>
                                            </label>
                                            <input type="file" accept="image/*" id="img2"
                                                class=" d-none form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="img3" class="">
                                                <div class="card ">
                                                    <img src="{{ asset('images/placeholder.jpg') }}" alt=""
                                                        class="img-fluid img-thumbnail">
                                                </div>
                                            </label>
                                            <input type="file" id="img3" accept="image/*"
                                                class=" d-none form-control">
                                        </div>
                                        <label for="files" class="btn btn-success mt-2 col-10">Add Product images</label>
                                        <input type="file" id="files" class="d-none" accept="image/*" multiple>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="product-category">Product Category</label>
                                    <select name="product-category" id="product-category" class="form-select">
                                        <option value="0">Select Category</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="product-sub-category">Product Sub Category</label>
                                    <select name="product-sub-category" id="product-sub-category" class="form-select">
                                        <option value="0">Select Sub Category</option>
                                    </select>
                                </div>
                                <div class="col=-12 col-lg-6">
                                    <label for="product-quantity">Product Quantity</label>
                                    <input type="number" id="product-quantity" class="form-control">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="product-color">Product Color</label>
                                    <select name="color" class="form-control" id="product-color">
                                        <option value="0">Select A Color</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
@else
    <script>
        window.location = "/";
    </script>
@endif
