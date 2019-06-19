<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/app.css">

        <link rel="stylesheet" href="/css/Boot.min.css" />
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstraps.min.css">
        
        <link rel="stylesheet" href="/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/css/animate.min.css" />
        <link rel="stylesheet" href="/css/hover.css" />
        <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="/css/style.css" />

    <!-- <link rel="stylesheet" href="/css/bootstraps.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/Boot.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/animate.min.css" />
    <link rel="stylesheet" href="/css/hover.css" />
    <link rel="stylesheet" href="/css/hover.min.css" />
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/select2.css">
    <link rel="stylesheet" href="/css/Italent.css"> -->


    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
        .active-like{
            text-decoration: underline;
            color: red;
        } 

        
    </style>
</head>
<body id="app-layout">
    
@include('layouts.frontnavbar');
 @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>



    <script src="/js/jquery-1.12.0.min.js"></script>
    <script src="/js/jquery.nicescroll.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugin.js"></script>
    <script src="/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="/js/jquery.fancybox.min.js"></script>

    <!-- <script src="/js/app.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/jquery-1.12.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/plugin.js"></script>
    <script src="/js/vendor.js"></script> -->

    
</body>
</html>