<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/all.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</head>

<body id="top">
    <div id="app">
        @include('layouts.gust.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{-- <script src="{{ asset('js/all.js') }}"></script> --}}
</body>

</html>
