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
                </div>
                @foreach ($addressType as $types)
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $types->address_type }} Address</h5>
                                <hr>
                                <label for="line1-{{ $types->address_type }}" class="form-label">Address Line 1</label>
                                <input placeholder="Enter Your Address Line 1
                                "
                                    value="@if ($addressData) @foreach ($addressData as $adData)
                                        @if ($adData->address_type == $types->address_type)
                                            {{ $adData->ad_ln1 }} @endif
                                    @endforeach
                                @endif"
                                    type="text" id="line1-{{ $types->address_type }}" class="form-control">
                                <label for="line2-{{ $types->address_type }}" class="form-label">Address Line 2</label>
                                <input placeholder="Enter Your Address Line 2"
                                value="@if ($addressData) @foreach ($addressData as $adData)
                                        @if ($adData->address_type == $types->address_type)
                                            {{ $adData->ad_ln2 }} @endif
                                    @endforeach
                                @endif"
                                type="text" id="line2-{{ $types->address_type }}" class="form-control">
                                <label for="city-{{ $types->address_type }}" class="form-label">Select City</label>
                                <select class="form-select" id="city-{{ $types->address_type }}">
                                    <option value="0">Select Your City</option>
                                    @foreach ($city as $cities)
                                        <option value="{{ $cities->id }}">{{ $cities->city_name }}</option>
                                    @endforeach
                                </select>
                                <label for="district-{{ $types->address_type }}" class="form-label">Select District</label>
                                <select class="form-select" id="district-{{ $types->address_type }}">
                                    <option value="0">Select Your Distrct</option>
                                    @foreach ($district as $districts)
                                        <option value="{{ $districts->id }}">{{ $districts->district_name }}</option>
                                    @endforeach
                                </select>
                                <label for="province-{{ $types->address_type }}" class="form-label">Select Province</label>
                                <select class="form-select" id="province-{{ $types->address_type }}">
                                    <option value="0">Select Your Proince</option>
                                    @foreach ($province as $provincess)
                                        <option value="{{ $provinces->id }}">{{ $provinces->province_name }}</option>
                                    @endforeach
                                </select>
                                <hr>
                                <!--update And change address-->
                                <button href="#"
                                    onclick="
                                    
                                @if ($addressType) updateAddress({{ $types->id }});
                                    @else
                                    insertAddress({{ $types->id }}); @endif
                                "
                                    class="btn btn-danger">
                                    @if ($addressType)
                                        Update {{ $types->address_type }} Address
                                    @endif
                                </button>
                                <!--update And change address-->
                            </div>
                        </div>
                    </div>
                @endforeach
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
