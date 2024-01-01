@extends('leyouts.app')
@php
    $fname = session('fname');
    $lname = session('lname');
    $email = session('email');
@endphp
@section('title', 'LEOPARD LANKA | ADDRESS INSERT')
@section('content')
    @include('leyouts.navbar')
    <div class="raw">
        <div class="col-12">
            <div class="row">
                <div class="col-12 mt-3">
                    <h3 class="text-center">Address Insert</h3>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 card col-md-10 col-lg-9">
                            <span class="text-info h5 fw-bold">
                                Add Your Address
                            </span>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="line1">Address Line 1</label>
                                    <input type="text" id="line1" class="form-control"
                                        placeholder="Enter Your Address Line 1">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="line2">Address Line 2</label>
                                    <input type="text" id="line2" class="form-control"
                                        placeholder="Enter Your Address Line 2">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="postal">Postal Code</label>
                                    <input type="text" id="postal" class="form-control"
                                        placeholder="Enter Your Postal Code">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="phnnum">Phone Number</label>
                                    <input type="text" id="phnnum" class="form-control"
                                        placeholder="Enter Your Phone Number">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="city">Select Your City</label>
                                    <select name="city" class="form-control" id="city">
                                        <option value="0">Select Your City</option>
                                        @foreach ($city as $cities)
                                            <option value="{{ $cities->id }}">
                                                {{ $cities->city_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="city">Select Your District</label>
                                    <select name="district" class="form-control" id="district">
                                        <option value="0">Select Your Dsitrict</option>
                                        @foreach ($district as $districts)
                                            <option value="{{ $districts->id }}">
                                                {{ $districts->district_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="city">Select Your Province</label>
                                    <select name="province" class="form-control" id="province">
                                        <option value="0">Select Your Province</option>
                                        @foreach ($province as $provinces)
                                            <option value="{{ $provinces->id }}">
                                                {{ $provinces->province_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="checkbox" id="default">
                                    <label class="form-label text-warning" for="default">Use As Default Address</label>
                                    <input type="checkbox" id="billing">
                                    <label class="form-label text-warning" for="billing">Use As Billing Address</label>
                                </div>
                                <div class="col-12 m-5 col-lg-6">
                                    <button onclick="insertAddress();" class="btn btn-block btn-warning" >
                                        Add Address
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
