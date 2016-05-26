{!! Form::open(array('route' => 'user.store', 'method' => 'POST', 'files' => true)) !!}
<ul>
	<li>
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name') !!}
	</li>
	<li>
		{!! Form::label('dob', 'Dob:') !!}
		{!! Form::date('dob',\Carbon\Carbon::now()) !!}
	</li>
	<li>
		{!! Form::label('address', 'Address:') !!}
		{!! Form::text('address') !!}
	</li>
	<li>
		{!! Form::label('email', 'Email:') !!}
		{!! Form::text('email') !!}
	</li>
	<li>
		{!! Form::label('contact_number', 'Contact_number:') !!}
		{!! Form::text('contact_number') !!}
	</li>
	<li>
		{!! Form::label('guardian_name', 'Guardian_name:') !!}
		{!! Form::text('guardian_name') !!}
	</li>
	<li>
		{!! Form::label('gurdian_phone_number', 'Gurdian_phone_number:') !!}
		{!! Form::text('gurdian_phone_number') !!}
	</li>
	<li>
		{!! Form::label('guardian_email', 'Guardian_email:') !!}
		{!! Form::text('guardian_email') !!}
	</li>
	<li>
		{!! Form::label('password', 'Password:') !!}
		{!! Form::text('password') !!}
	</li>
	<li>
		{!! Form::label('image', 'Image:') !!}
		{!! Form::file('image') !!}
	</li>
	<li>
		{!! Form::label('qualification', 'Qualification:') !!}
		{!! Form::text('qualification') !!}
	</li>
	<li>
		{!! Form::label('blood_type', 'Blood_type:') !!}
		{!! Form::text('blood_type') !!}
	</li>
	<li>
		{!! Form::label('gender', 'Gender:') !!}
{{--		{!! Form::text('gender') !!}--}}
		{!! Form::select('gender',array('male'=>'Male','female'=>'Female'),null,['placeholder' => 'Select your gender']) !!}
	</li>
	<li>
		{!! Form::label('roles', 'Roles:') !!}
		{{--{!! Form::text('roles') !!}--}}
		{!! Form::select('roles', array('admin' => 'Admin', 'teacher' => 'Teacher','student' => 'Student'), null, ['placeholder' => 'Select your roles'])!!}
	</li>
	<li>
		{!! Form::submit() !!}
	</li>
</ul>
{!! Form::close() !!}