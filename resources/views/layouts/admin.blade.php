<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MASK Application">
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

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>SB Admin 2 - Dashboard</title>
    
        <!-- Custom fonts for this template-->
        <link href="{{asset('BackEnd/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        

</head>


<body id="page-top">
<div id="app">
    
    <div id="wrapper">
        @include('partial.BackEnd.SideBar ')
    <div id="content-wrapper" class="d-flex flex-column">
    
        <div id="content">
            @include('partial.BackEnd.TopBar')
            
            <div class="container-fluid">
                @yield('content')
            </div>
            </div>
            @include('partial.BackEnd.footer')

        </div>
    </div>
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('partial.BackEnd.Model')
    
</div>
    


    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->



    <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('BackEnd/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('BackEnd/js/sb-admin-2.min.js')}}"></script>
@yield('script')
    