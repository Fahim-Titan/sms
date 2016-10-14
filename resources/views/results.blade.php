{!! Form::open(array('route' => 'result.create', 'method' => 'GET')) !!}
	<ul>
		<li>
			{!! Form::label('sub_id', 'Sub_id:') !!}
			{{--{!! Form::text('sub_id') !!}--}}
			{!! Form::select('sub_id',$sub_info,null,['placeholder' => 'choose subject', 'class' => 'form-control']) !!}
		</li>

		<li>
			{!! Form::label('e_id', 'Exam Type') !!}
			{!! Form::select('e_id', array('1' => 'First Term', '2' => 'Second Term', '3' => 'Third Term'), null, ['placeholder' => 'Select Term']); !!}

		</li>
		<li>
			{!! Form::submit('download .xls file') !!}
		</li>
	</ul>
{!! Form::close() !!}