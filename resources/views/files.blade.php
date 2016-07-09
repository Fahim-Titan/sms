you are signed in as {{Auth::user()->name}}
{{--{{Auth::id()}}--}}


{!! Form::open(array('route' => 'file.store', 'method' => 'POST', 'files' => true)) !!}
	<ul>
		<li>
			{!! Form::label('file_path', 'File_path:') !!}
			{!! Form::file('file_path') !!}
		</li>
		<li>
			{!! Form::label('date', 'Date:') !!}
			{!! Form::date('date') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::select('type', array('notice'=> 'Notices', 'files' => 'Files'), null, ['placeholder' => 'Select your roles'])!!}
		</li>

		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}