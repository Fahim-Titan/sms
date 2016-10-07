<h1>this is the result upload page for {{$subject_name[0]}}</h1>
{{$count = 0}}
{!! Form::open(array('route' => 'result.store', 'method' => 'POST')) !!}
@foreach($id as $info)
        <div class="form-group">
    {!! Form::label('id','Roll number')!!}
            {!! Form::text('id',$info->id,['class' => 'form-control']) !!}
            {!! Form::text('sub_id',$sub_id,['class' => 'form-control']) !!}
            {!! Form::text('e_id',$e_id,['class' => 'form-control']) !!}
    {!! Form::number('marks',null,['class' => 'form-control']) !!}
    </div>
    {{$count++}}
    @endforeach
<div class="form-group">
    {!! Form::submit('upload result', ['class' => 'btn btn-default']) !!}
</div>
{!! Form::close() !!}
{{--{{$id}}--}}

{{--{{$sub_id}}--}}