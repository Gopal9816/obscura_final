@extends('layouts.app')

@section('content')
<link href="{{ asset('css/rep.css') }}" rel="stylesheet">
<div class ="row rym animated fadeIn">
    
        <h3 id="rhyme" >OH DO!</h2>
        <h3 id="rhyme" >INDULGE an IDIOSYNCRASY</h2>
        <h3 id="rhyme" >make BULLETS of LEAD</h2>
        <h3 id="rhyme" >Reconcile DOG to CAT</h2>
        <h3 id="rhyme" >Lay KNIFE by FORK</h2>
        <h3 id="rhyme" >CONVERSE CHEERFULLY</h2>
        <h3 id="rhyme" >WEDNESDAY AFTERNOON</h2>
        <h3 id="rhyme" >COOK the DINNER</h2>
        <h3 id="rhyme" >SPREAD the BANQUET</h2>
        <h3 id="rhyme" >DEMAND a CORMORANT</h2>
    <br><br>
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