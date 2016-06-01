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
<h1 class="text-center">Add Subject</h1>
<hr>
{!! Form::open(array('route' => 'subject.store', 'method' => 'POST')) !!}
		<div class="form-group">
			{!! Form::label('cb_id', 'Class Brunch ID:') !!}
			{!! Form::select('cb_id', $class_info, null,['placeholder' => 'Pick your class', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sub_name', 'Subject Name:') !!}
			{!! Form::text('sub_name',null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('textbook_name', 'Textbook Name:') !!}
			{!! Form::text('textbook_name',null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
		</div>
{!! Form::close() !!}

{{--@foreach($class_info as $info)--}}
{{--{{$info->name}}<br>--}}
	{{--{{$info->cb_id}}--}}
	{{--@endforeach--}}

</div>
<!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
</body>
</html>
