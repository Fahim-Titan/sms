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
	<h1 class="text-center">Add Files</h1>
	<hr>
{!! Form::open(array('route' => 'file.store', 'method' => 'POST', 'files' => true)) !!}
		<div class="form-group">
			{!! Form::label('file_path', 'File path:') !!}
			{!! Form::file('file_path',null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('date', 'Date:') !!}
			{!! Form::date('date',null,['class' => 'form-control']) !!}
		</div>
		{{--<div class="form-group">--}}
			{{--{!! Form::label('type', 'Type:') !!} <br>--}}
			{{--{!! Form::select('type', array('notice'=> 'Notices', 'files' => 'Files'), null, ['placeholder' => 'Select your roles', 'class' => 'form-control'])!!}--}}
		{{--</div>--}}

		<div class="form-group">
			{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
		</div>
{!! Form::close() !!}
</div>
<!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
</body>
</html>