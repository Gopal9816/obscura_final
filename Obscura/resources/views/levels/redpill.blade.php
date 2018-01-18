@extends('layouts.app')

@section('content')
<div class ="row">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['action' => 'GameController@answer', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('answer','Answer')}}
                {{Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])}}
            </div>
            {{Form::submit('Submit',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection