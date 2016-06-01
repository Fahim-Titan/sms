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
	<h1 class="text-center">Teacher Assign</h1>
	<hr>
{!! Form::open(array('route' => 'teacher.store', 'method' => 'POST')) !!}
	
		<div class="form-group">
			{!! Form::label('sub_id', 'Subject ID:') !!}
			{!! Form::select('sub_id',$sub_info,null,['placeholder' => 'Select Subject','class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cb_id', 'Class Branch ID:') !!}
			{!! Form::select('cb_id',$class_info,null,['placeholder' => 'Select Class Branch','class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('id', 'ID:') !!}
			{!! Form::select('id',$teacher,null,['placeholder' => 'Select ID','class' => 'form-control']) !!}
		</div>
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