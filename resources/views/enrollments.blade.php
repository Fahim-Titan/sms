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
	</style>
</head>
<body>
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
			{!! Form::text('cb_id',null,['class' => 'form-control']) !!}
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
</div>
<!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
</body>
</html>