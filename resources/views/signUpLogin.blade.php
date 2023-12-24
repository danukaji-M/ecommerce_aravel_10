@extends('leyouts.app')
@if (session()->has('email'))
    <script>
        window.location.href = "/";
    </script>
@endif
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
@section('title', 'Sign Up')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row mt-5 justify-content-center align-items-center">
                    <div class="col-11 col-md-10 col-lg-9 col-xl-9 card">
                        <div class="text-primary text-bold text-center">
                            <h1 class="display-6 text-bold">Sign Up</h1>
                        </div>
                        <div class="row">
                            <div class="col-12 img1 d-none d-md-block col-md-6 col-lg-6 col-xl-6">

                            </div>
                            <div class="col-12 text-capitalize col-md-6">
                                <div class="col-12 mb-3">
                                    <label for="name" class=" text-muted color123">first name</label>
                                    <input type="text" id="name" class=" form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="lname" class=" text-muted ">last name</label>
                                    <input type="text" id="lname" class=" form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="email" class=" text-muted ">email</label>
                                    <input type="email" id="email" class=" form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="password" class=" text-muted ">password</label>
                                    <input type="password" id="password" class=" form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="password2" class=" text-muted ">retype password</label>
                                    <input type="password" id="password2" class=" form-control">
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="phone" class=" text-muted ">mobile number</label>
                                            <input type="text" id="phone" class=" form-control">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="gender" class=" text-muted ">gender</label>
                                            <select id="gender" class="form-control">
                                                <option value="0">Select Gender</option>
                                                @foreach ($data as $gender)
                                                    <option value="{{ $gender['gender_id'] }}">{{ $gender['gender_name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <button onclick="signUp();"
                                                class="btn btn-primary form-control mb-4 btn-block">Sign Up
                                                Here</button>
                                        </div>
                                        <div class="col-6">
                                            <a href="/login"
                                                class="btn form-control btn-outline-primary mb-5 btn-block">Login here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
