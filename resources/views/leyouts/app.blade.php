<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @stack('styles')
</head>

<body class="body1 overflow-x-hidden ">
    <div class="container-fluid">
        @yield('content')
        @stack('scripts')
    </div>

</body>

</html>
