{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{!! Form::text('sub_id') !!}
		</li>
		<li>
			{!! Form::label('e_id', 'E_id:') !!}
			{!! Form::text('e_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}