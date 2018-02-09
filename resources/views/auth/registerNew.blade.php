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

<<<<<<< HEAD
            <!--<div class="form-group">
                {{ Form::radio('home', 'CET(home)') }}<br>
                {{ Form::radio('home', 'Others') }}
            </div>-->
=======
           
>>>>>>> 541aac8b9fa321c602e5ef3ff6ecc19f35752a3e
            
        
            <div class="form-group">
                {{Form::label('college','College')}}
                {{Form::text('college','',['class' => 'form-control','placeholder' => 'College'])}}
            </div>
            
            {{Form::submit('Submit',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection()