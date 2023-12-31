@php
    $fname = session('fname');
    $lname = session('lname');
    $email = session('email');
@endphp
@if ($email)
    @extends('leyouts.app')

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
                                                        <img src="
                                                    @if ($userProfile) {{ $userProfile->profile_pic }}
                                                        @else
                                                        {{ asset('profile_img/default.png') }} @endif
                                                    "
                                                            alt="" class="img-fluid user-profile-img"
                                                            srcset="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="user-profile-name m-4">
                                                        <p class=" h4 d-none d-md-block">{{ $fname }}
                                                            {{ $lname }}
                                                        </p>
                                                        <p class=" fw-bold d-none d-md-block">{{ $email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 text-end">
                                            <div class="user-profile-edit m-4 ">
                                                <a href="" id="openModalButton" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" class="btn btn-primary">Edit Profile</a>
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
                        @if ($addressData)
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-12 col-md-11 col-lg-10 card">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <div
                                class="row
                    @if ($addressData) d-none @endif
                    justify-content-center text-center align-items-center">
                                <div class="col-12">
                                    <a href="/addressupdate" class="btn mt-4 btn-info">
                                        Add Adresses
                                    </a>
                                </div>
                            </div>
                        @endif
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
@else
    <script>
        window.location = "/";
    </script>
@endif
