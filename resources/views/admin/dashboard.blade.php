<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap css file-->
    <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css')}}">

</head>
<body>
@include('includes.dashboard_header')
<div class="container">
    <div class="btn-group">
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Student <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('add-student')}}">Add</a></li>
                <li><a href="{{url('update-student')}}">Update</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Teacher <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('add-teacher')}}">Add</a></li>
                <li><a href="{{url('update-teacher')}}">Update</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Class <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('add-class')}}">Add</a></li>
                <li><a href="{{url('update-class')}}">Update</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Subject <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Add</a></li>
                <li><a href="#">Update</a></li>
            </ul>
        </div>
        <button type="button" class="btn btn-primary"><a href="{{url('enrollment')}}">Enrollment</a></button>
        <button type="button" class="btn btn-primary"><a href="{{url('file')}}">Notice</a></button>
        <button type="button" class="btn btn-primary"><a href="{{url('result')}}">Result</a></button>
    </div>

</div>

@include('includes.dashboard_footer')
        <!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>