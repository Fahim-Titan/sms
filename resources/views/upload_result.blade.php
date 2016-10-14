{!! Form::open(array('route' => 'result.store', 'method' => 'POST', 'files' => true)) !!}

<ul>
    <li>
        {!! Form::label('file', 'Upload:') !!}
        {!! Form::file('file',null,['class' => 'form-control']) !!}
    </li>
    <li>
        {!! Form::submit('upload') !!}
    </li>
</ul>

{!! Form::close() !!}