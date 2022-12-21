<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="all,follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Dashboard</title>
    
    <link href="{{asset('BackEnd/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <!-- Style -->
        <link  href="{{asset('css/app.css')}}">
        <link href="{{asset('BackEnd/css/sb-admin-2.min.css')}}" rel="stylesheet">
        @yield('style')
        <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">

    <link href="{{asset('BackEnd/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
            
        @yield('content')
    </div>

      


    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('BackEnd/vendor/jquery/jquery.min.js')}}"></>
        <script src="{{asset('BackEnd/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        @yield('script')
    