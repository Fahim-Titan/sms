<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap css file-->
    <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css')}}">
    {{--Home Page Slider--}}
    <link rel="stylesheet" href="{{ URL::to('src/css/slider.css')}}">
    {{--Style.css--}}
    <link rel="stylesheet" href="{{ URL::to('src/css/style.css')}}">
    <!-- Font awesome css file-->
    <link href="{{ URL::to('src/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Google fonts -->
    <link href="{{ URL::to('http://fonts.googleapis.com/css?family=Merriweather')}}" rel='stylesheet' type='text/css'>
    <link href="{{ URL::to('http://fonts.googleapis.com/css?family=Varela')}}" rel='stylesheet' type='text/css'>


    @yield('styles')
</head>
<body>
@include('includes.header')

<div class="main">
    @yield('content')
</div>
@include('includes.footer')
        <!-- Javascript Files
    ================================================== -->
<!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
</body>
</html>