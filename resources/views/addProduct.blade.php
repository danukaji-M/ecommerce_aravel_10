@php
    $fname = session('fname');
    $lname = session('lname');
    $email = session('email');
    $cloth = 'false';
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
                                    <label for="product-description">Product Description</label>
                                    <textarea name="product-description" id="product-description" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="col-12 mt-2 mb-3">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-3">
                                            <label for="files" class="">
                                                <div class="card ">
                                                    <img src="{{ asset('images/placeholder.jpg') }}" alt=""
                                                        class="img-fluid img-thumbnail">
                                                </div>
                                            </label>
                                            <input type="file" accept="image/*" id="img1"
                                                class=" d-none form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="files" class="">
                                                <div class="card ">
                                                    <img src="{{ asset('images/placeholder.jpg') }}" alt=""
                                                        class="img-fluid img-thumbnail">
                                                </div>
                                            </label>
                                            <input type="file" accept="image/*" id="img2"
                                                class=" d-none form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="files" class="">
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
                                        @foreach ($category as $items)
                                            <option value="{{ $items->id }}">{{ $items->product_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="product-brand">Product Brand</label>
                                    <select name="product-brand" id="product-brand" class="form-select">
                                        <option value="0">Select Brand</option>
                                        @foreach ($brand as $brands)
                                            <option value="{{ $brands->id }}">{{ $brands->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="clothview" class="d-none col-12">
                                    <div class="row mt-4 mb-4">
                                        <div class="col-12 col-lg-10 offset-lg-1 card">
                                            <div class=" input-group-prepend">
                                                <input type="checkbox" id="small">
                                                <label for="small">S</label>
                                            </div>
                                            <div class=" input-group-prepend">
                                                <input type="checkbox" name="" id="medium">
                                                <label for="medium">M</label>
                                            </div>
                                            <div class=" input-group-prepend">
                                                <input type="checkbox" name="" id="L">
                                                <label for="L">L</label>
                                            </div>
                                            <div class=" input-group-prepend">
                                                <input type="checkbox" name="" id="XL">
                                                <label for="XL">XL</label>
                                            </div>
                                            <div class=" input-group-prepend">
                                                <input type="checkbox" name="" id="XXL">
                                                <label for="XXL">XXL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mobileview" class="d-none col-12">
                                    <div class="row mt-4 mb-4">
                                        <div class="col-12 col-lg-10 offset-lg-1 card">
                                            @foreach ($mobilecapacity as $mbitem)
                                                <div class=" input-group-prepend">
                                                    <input type="checkbox" id="{{ $mbitem->id }}mb">
                                                    <label class="fw-bold"
                                                        for="{{ $mbitem->id }}mb">{{ $mbitem->storage }} GB</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col=-12 col-lg-6">
                                    <label for="product-quantity">Product Quantity</label>
                                    <input type="number" id="product-quantity" class="form-control">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="product-color">Product Color</label>
                                    <select name="color" class="form-control" id="product-color">
                                        <option value="0">Select A Color</option>
                                        @foreach ($color as $colors)
                                            <option value="{{ $colors->id }}">{{ $colors->color_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="shipping">Product Shipping Cost</label>
                                    <div class=" input-group">
                                        <span class=" input-group-text">LKR</span>
                                        <input type="text" id="shipping" class="form-control">
                                    </div>
                                </div>
                                <div class="col-10 mt-4 mb-5 offset-1">
                                    <div class="row justify-content-center text-center align-items-center ">
                                        <div class="col-12">
                                            <button onclick="addProduct()"
                                                class="btn text-center btn-warning form-control">
                                                Add Product
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('leyouts.footer')
    @endsection
    @push('scripts')
    <script>
        window.onload = function() {
            load();
        }
    </script>
    @endpush
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
