<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link type="image/png" sizes="96x96" rel="icon" href="{{ asset('favicon.ico') }}">
    @stack('styles')
</head>

<body class="body1 overflow-x-hidden ">
    <div class="container-fluid">
        @yield('content')
        @stack('scripts')
    </div>

</body>

</html>
