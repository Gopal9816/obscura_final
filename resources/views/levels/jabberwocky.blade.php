@extends('layouts.app')

@section('content')

<!--<div class="page-header text-center">
    <h1>Welcome {{ $user->name }}</h1>
</div> 
<link href="{{ asset('css/lev1.css') }}" rel="stylesheet">-->
<div class="row">
    <div class="col-md-1 col-xs-1"></div>
    <div class="col-md-10 col-xs-10  rym animated fadeIn">
        <h2 id="rhyme" class="text-center" style="color:white;">
            Avanmar ith vare thanilla -_-.<br>
        </h2>
    </div>
    <div class="col-md-1 col-xs-1"></div>
</div>
<div class="row" >
    <div class="col-md-6 col-xs-6 hand" align="center">
        <a href="/game/red">
            <!--<img src="{{ asset('img/p1.png') }}" class="img-responsive">-->
            
            <img src="../img/jw1.jpg" class="img-responsive">
        </a> 
    </div>
    <div class="col-md-6 col-xs-6 hand" align="center">
        <a href="/game/blue">
            <!--<img src="{{ asset('img/p2.png') }}" class="img-responsive" >-->
           
            <img src="../img/jw2.jpg" class="img-responsive">
        </a> 
    </div>

<div class="col-md-6 col-md-offset-3" style="padding-bottom: 20px;">        
    {!! Form::open(['action' => 'GameController@answer', 'method' => 'POST']) !!}
        <div class="form-group" align="center">
            {{Form::label('answer','Answer')}}
            {{Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])}}
        </div>
    {{Form::submit('Submit',['class' => 'btn btn-success editb'])}}
{!! Form::close() !!}
</div>
</div>



@endsection
