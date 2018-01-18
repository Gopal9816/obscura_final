@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header text-center">
        <h1>Welcome {{ $user->name }}</h1>
    </div>
   
   <img src="{{ asset('img/pills.jpg') }}" class="img-responsive" id="img">
</div>
@endsection
