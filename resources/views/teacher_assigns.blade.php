{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{!! Form::text('sub_id') !!}
		</li>
		<li>
			{!! Form::label('cb_id', 'Cb_id:') !!}
			{!! Form::text('cb_id') !!}
		</li>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}