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
    <hr> @endsection
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
