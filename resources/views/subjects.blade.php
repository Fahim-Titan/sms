{!! Form::open(array('route' => 'subject.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('cb_id', 'Cb_id:') !!}
			{!! Form::text('cb_id') !!}
		</li>
		<li>
			{!! Form::label('sub_name', 'Sub_name:') !!}
			{!! Form::text('sub_name') !!}
		</li>
		<li>
			{!! Form::label('textbook_name', 'Textbook_name:') !!}
			{!! Form::text('textbook_name') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}

@foreach($class_info as $info)
{{$info->name}}
	@endforeach
