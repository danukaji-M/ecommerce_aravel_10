@extends('leyouts.app')
@php
    $fname = session('fname');
    $lname = session('lname');
    $email = session('email');
@endphp
@section('title', 'LEOPARD LANKA | USER PROFILE')
@section('content')
    @include('leyouts.navbar')
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="row">
                                            <div class="col-3 col-md-2">
                                                <div class="user-profile-img m-4">
                                                    <img src="{{ asset('img/user.png') }}" alt="" srcset="">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="user-profile-name m-4">
                                                    <p class=" h4 d-none d-md-block">{{ $fname }} {{ $lname }}
                                                    </p>
                                                    <p class=" fw-bold d-none d-md-block">{{ $email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5 text-end">
                                        <div class="user-profile-edit m-4 ">
                                            <a href="" id="openModalButton" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btn btn-primary">Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h2 class="fw-bold">About</h2>
                            <br>
                            <br>
                            <div class="user-profile-name d-block d-md-none">
                                <span class="h6 fw-bold">Name :</span>
                                <span>{{ $fname }} {{ $lname }}</span>
                                <br>
                                <span class="h6 fw-bold">Email :</span>
                                <span>{{ $email }}</span>
                            </div>
                            <span class="h6 fw-bold">Location :</span>
                            <span>Sri Lanka</span>
                            <br>
                            <span class="h6 fw-bold">Member Since :</span>
                            <span>DD/MM/YYYY</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 mt-3 col-lg-4">
                                    <div class="card">
                                        <div class="h3 text-info">Primary Address</div>
                                        <div class="address">
                                            <span class="fw-bold">Address Line 1:</span>
                                            <span>line 1</span>
                                            <br>
                                            <span class="fw-bold">Address Line 2:</span>
                                            <span>line 2</span>
                                            <br>
                                            <span class="fw-bold">City:</span>
                                            <span>city</span>
                                            <br>
                                            <span class="fw-bold">District:</span>
                                            <span>district</span>
                                            <br>
                                            <span class="fw-bold">Province:</span>
                                            <span>Province</span>
                                            <br>
                                            <span class="fw-bold">Postal Code:</span>
                                            <span>Psotal Code</span>
                                            <br>
                                            <input name="setPrimary" id="setPrimary" type="radio">
                                            <label for="setPrimary">Use As A Billing Address</label>
                                        </div>
                                        <button class="btn mt-4 btn-warning">Change Primary Address</button>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 col-lg-4">
                                    <div class="card">
                                        <div class="h3 text-info">Primary Address</div>
                                        <div class="address">
                                            <span class="fw-bold">Address Line 1:</span>
                                            <span>line 1</span>
                                            <br>
                                            <span class="fw-bold">Address Line 2:</span>
                                            <span>line 2</span>
                                            <br>
                                            <span class="fw-bold">City:</span>
                                            <span>city</span>
                                            <br>
                                            <span class="fw-bold">District:</span>
                                            <span>district</span>
                                            <br>
                                            <span class="fw-bold">Province:</span>
                                            <span>Province</span>
                                            <br>
                                            <span class="fw-bold">Postal Code:</span>
                                            <span>Psotal Code</span>
                                            <br>
                                            <input name="setPrimary" id="setPrimary1" type="radio">
                                            <label for="setPrimary1">Use As A Billing Address</label>
                                        </div>
                                        <button class="btn mt-4 btn-warning">Change Secondary Address</button>

                                    </div>
                                </div>
                                <div class="col-12 mt-3 col-lg-4">
                                    <div class="card">
                                        <div class="h3 text-info">Primary Address</div>
                                        <div class="address">
                                            <span class="fw-bold">Address Line 1:</span>
                                            <span>line 1</span>
                                            <br>
                                            <span class="fw-bold">Address Line 2:</span>
                                            <span>line 2</span>
                                            <br>
                                            <span class="fw-bold">City:</span>
                                            <span>city</span>
                                            <br>
                                            <span class="fw-bold">District:</span>
                                            <span>district</span>
                                            <br>
                                            <span class="fw-bold">Province:</span>
                                            <span>Province</span>
                                            <br>
                                            <span class="fw-bold">Postal Code:</span>
                                            <span>Psotal Code</span>
                                            <br>
                                        </div>
                                        <button class="btn mt-4 btn-warning">Change Billing Address</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------Modal-------------------------->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!------------------------Modal-------------------------->
    <br>
    <br>
    @include('leyouts.footer')
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endpush
@push('scripts')
    <script>
        document.getElementById("openModalButton")
            .addEventListener("click", function() {
                var myModal = new bootstrap.Modal(document.getElementById("myModal"));
                myModal.show();
            });
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endpush
