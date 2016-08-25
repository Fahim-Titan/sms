<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap css file-->
	<link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css')}}">
	<style>
		.my-form-size
		{
			width: 50%;
		}
		
		div.card {
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            /*text-align: center;*/
            padding: 10px;
        }
		

  .navbar {
      
      background-color: #f4511e;
      z-index: 9999;
      
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
	</style>
</head>
<body>
@include('includes.dashboard_header')
<div class="container">
	<h1 class="text-center">Enrollment</h1>
	<hr>
{!! Form::open(array('route' => 'enrollment.store', 'method' => 'POST')) !!}

		<div class="form-group">
			{!! Form::label('id', 'ID:') !!}
			{!! Form::text('id',null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cb_id', 'Class Branch ID:') !!}
			{!! Form::select('cb_id',$info,null,['placeholder' => 'Pick your class', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
		</div>
	
{!! Form::close() !!}

{{--ai gula k option er moddhe dhukate hobe.--}}
{{--@foreach($info as $key)--}}
	{{--{{$key -> sub_id}} -> {{$key->sub_name}} ===>--}}
	{{--{{$key-> cb_id}} -> {{$key->name}}--}}
	{{--<br>--}}
	{{--@endforeach--}}


    @if (!empty($success))
        {{ $success }}
    @endif

    @if($errors->any())

        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

</div>
<!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
</body>
</html>