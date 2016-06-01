{!! Form::open(array('route' => 'teacher.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{!! Form::select('sub_id',$sub_info) !!}
		</li>
		<li>
			{!! Form::label('cb_id', 'Cb_id:') !!}
			{!! Form::select('cb_id',$class_info) !!}
		</li>
		<li>
			{!! Form::label('id', 'Id:') !!}
			{!! Form::select('id',$teacher) !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}