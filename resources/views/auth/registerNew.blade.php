@extends('layouts.app')

@section('content')
<h1>Register New</h1>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
        {!! Form::open(['route' => ['register',$id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('phno','Phone Number')}}
                {{Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number'])}}
            </div>
           
            <div class="form-group">
                {{Form::radio('college','home',false,['class' => 'form-control', 'onchange' => 'hideother()'])}}Home <br />
                {{Form::radio('college','others',false,['class' => 'form-control','id' => 'other' , 'onchange' => 'displayother()'])}}Others
                {{Form::text('collegename','',['class' => 'form-control','placeholder' => 'College', 'id' => 'inputother'])}}
            </div>
            
            {{Form::submit('Submit',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection()