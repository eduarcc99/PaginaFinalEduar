<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/tepusdominius-boostrap-4.min.css') }}">


</head>
<body>
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    <script src="{{ asset('resources/js/boostrap.js') }}"></script>
    <script src="{{ asset('resources/js/main.js') }}"></script>
    <script src="{{ asset('resources/js/easing.js') }}"></script>
    <script src="{{ asset('resources/js/easing.min.js') }}"></script>
    <script src="{{ asset('resources/js/moment.min.js') }}"></script>
    <script src="{{ asset('resources/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('resources/js/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('resources/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('resources/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script src="{{ asset('resources/js/contact.js') }}"></script>
</body>
</html>