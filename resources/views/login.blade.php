@extends('leyouts.app')
@php
    $email = request()->cookie('email');
    $password = request()->cookie('password');
@endphp
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="row justify-content-center align-items-center ">
                    <div class=" card col-11 col-md-8 col-lg-6">
                        <h1 class="text-center">Logine Here</h1>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="email" class=" text-muted ">Email</label>
                                <input value="{{ $email }}" class=" form-control" type="text" name="login"
                                    id="email">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="password" class=" text-muted ">password</label>
                                <input value="{{ $password }}" class=" form-control" type="password" name="password"
                                    id="password">
                            </div>
                            <div class="col-12">
                                <input type="checkbox" name="rememberme" id="rbm" checked>
                                <label for="rbm">Remember Me</label>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-success form-control" onclick="login();">
                                            Login </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ '/signup' }}" class="btn btn-primary form-control">
                                            Sign Up </a>
                                    </div>
                                    <div class="col-12 mt-3 mb-3">
                                        <a href="{{ '/forgotpass' }}" class="">
                                            Forget Password ? </a>
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
@section('title', 'Login')
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
