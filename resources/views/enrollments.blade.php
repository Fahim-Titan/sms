{!! Form::open(array('route' => 'enrollment.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::text('id') !!}
		</li>
		<li>
			{!! Form::label('cb_id', 'Cb_id:') !!}
			{!! Form::text('cb_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}

{{--ai gula k option er moddhe dhukate hobe.--}}
@foreach($info as $key)
	{{$key -> sub_id}} -> {{$key->sub_name}} ===>
	{{$key-> cb_id}} -> {{$key->name}}
	<br>
	@endforeach