<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    @stack('meta')
    <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extended.css') }}">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @stack('style-lib')

    @stack('style')

</head>

<body class="{{ $bodyClass ?? ''}}">

    @yield('content')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('script')
</body>

</html>
