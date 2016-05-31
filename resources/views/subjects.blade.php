{!! Form::open(array('route' => 'subject.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('cb_id', 'Cb_id:') !!}
			{{--incomplete aita normal way te kora lagbo.--}}
{{--			{!! Form::select('cb_id', array("{{$class_info->cb_id}}"=> "{{$class_info->name}}"), null, ['placeholder'=> 'choose your class']) !!}--}}
			{{--input type ki dibo bujhtesi nah --}}
			{{--<select>--}}
				{{--@foreach($class_info as $info)--}}
					{{--<option value="{{$info->cb_id}}">{{$info->name}}</option>--}}
				{{--@endforeach--}}
			{{--</select>--}}
			{{--this is the final version--}}
			{!! Form::select('cb_id', $class_info, null,['placeholder' => 'Pick your class']) !!}

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

{{--@foreach($class_info as $info)--}}
{{--{{$info->name}}<br>--}}
	{{--{{$info->cb_id}}--}}
	{{--@endforeach--}}
