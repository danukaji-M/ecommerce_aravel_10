<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @stack('styles')
</head>

<body class="body1">
    @yield('content')
    @stack('scripts')
</body>

</html>
