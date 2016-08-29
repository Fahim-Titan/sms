{!! Form::open(array('route' => 'result.create', 'method' => 'GET')) !!}
	<ul>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{!! Form::text('sub_id') !!}
		</li>
		<li>
			{!! Form::label('e_id', 'E_id:') !!}
			{!! Form::text('e_id') !!}
		</li>
		<li>
			{!! Form::submit('generate') !!}
		</li>
	</ul>
{!! Form::close() !!}