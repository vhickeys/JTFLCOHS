<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>
        @yield('title', config('app.name')) | {{ config('app.name') }}
    </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ config('app.name') }}" />
    <meta name="keywords" content="{{ config('app.name') }}" />
    <meta content="Olvios Tech" name="author" />
    <meta content="2.6.0" name="version" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="{{ asset('client/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Tobii Lightbox -->
    <link href="{{ asset('client/css/tobii.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('client/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Swiper -->
    <link href="{{ asset('client/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="{{ asset('client/css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('client/css/custom.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('client/css/colors/default.css') }}" rel="stylesheet" id="color-opt" />

    <style>
        .btn-hover-dark:hover {
            color: #000 !important;
        }
    </style>
</head>

<body>

    {{-- @include('layouts.partials.tagline') --}}

    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')

</body>

</html>