<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="@if(isset($appSettings['institute_settings']['favicon'])){{asset('storage/logo/'.$appSettings['institute_settings']['favicon'])}} @else{{ asset('images/favicon.png') }}@endif">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Pace loading -->
    <script src="{{ asset('/js/pace.js') }}"></script>
    <link href="{{ asset('/css/pace.css') }}" rel="stylesheet" type="text/css">

    <!-- vendor libraries CSS -->
    <link href="{{ asset('/css/vendor.css') }}" rel="stylesheet" type="text/css">
    <!-- theme CSS -->
    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" type="text/css">
    <!-- app CSS -->
    <link href="{{ asset('/css/app1.css') }}" rel="stylesheet" type="text/css">

    <!-- print CSS -->
    <link href="{{ asset('/css/print.css') }}" rel="stylesheet" type="text/css">

    @yield('script')

</head>
<body class="hold-transition skin-blue sidebar-mini fixed ">
<div id="app">

    <div class="wrapper">

        @include('DashboardAdmin.inic.navbar')

        @include('DashboardAdmin.inic.leftslidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

</div>

@yield('script')

<script src="{{ asset('/js/manifest.js') }}"></script>
<!-- vendor libaries js -->
<script src="{{ asset('/js/vendor.js') }}"></script>
<!-- theme js -->
<script src="{{ asset('/js/theme.js') }}"></script>
<!-- app js -->
<script src="{{ asset('/js/app.js') }}"></script>





</body>
</html>
