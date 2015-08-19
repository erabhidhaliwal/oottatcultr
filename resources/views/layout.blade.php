<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Custom FONTS -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,200,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Core CSS -->
    <link href="{{  asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/css/lightbox.css') }}" rel="stylesheet">

    @yield('header')

</head>

<body>

@include('inc.header')

{{--Show Errors--}}
@foreach ($errors->all() as $error)
    <?php var_dump($error); ?> <br><hr>
@endforeach

@yield('content')

{{--JAVASCRIPTS--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{  asset('assets/js/bootstrap.js') }}"></script>
<script src="{{  asset('assets/js/lightbox.min.js') }}"></script>

<script src="{{  asset('assets/js/scripts.js') }}"></script>

@include('inc.footer')

<!--Page only scripts-->
@yield('footer')

</body>
</html>
