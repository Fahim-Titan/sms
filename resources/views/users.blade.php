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
	<h1 class="text-center">Add User</h1>
	<hr>
{!! Form::open(array('route' => 'user.store', 'method' => 'POST', 'files' => true)) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('dob', 'Dob:') !!}<br>
		{!! Form::date('dob',\Carbon\Carbon::now(),null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('address', 'Address:') !!}
		{!! Form::text('address',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email:') !!}
		{!! Form::text('email',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('contact_number', 'Contact Number:') !!}
		{!! Form::text('contact_number',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('guardian_name', 'Guardian Name:') !!}
		{!! Form::text('guardian_name',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('gurdian_phone_number', 'Gurdian Phone Number:') !!}
		{!! Form::text('gurdian_phone_number',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('guardian_email', 'Guardian Email:') !!}
		{!! Form::text('guardian_email',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password:') !!}
		{!! Form::text('password',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::file('image',null,['class' => 'form-control']) !!}
	</div>:label('image', 'Image:') !!}
		{!! Form:
	<div class="form-group">
		{!! Form::label('qualification', 'Qualification:') !!}
		{!! Form::text('qualification',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('blood_type', 'Blood Type:') !!}
		{!! Form::text('blood_type',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('gender', 'Gender:') !!}
{{--		{!! Form::text('gender') !!}--}}
		{!! Form::select('gender',array('male'=>'Male','female'=>'Female'),null,['placeholder' => 'Select your gender', 'class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('roles', 'Roles:') !!}
		{{--{!! Form::text('roles') !!}--}}
		{!! Form::select('roles', array('admin' => 'Admin', 'teacher' => 'Teacher','student' => 'Student'), null, ['placeholder' => 'Select your roles', 'class' => 'form-control'])!!}
	</div>
	<div class="form-group">
		{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
	</div>

{!! Form::close() !!}
	</div>
	<!--@include('includes.dashboard_footer')-->
<!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
</body>
</html>