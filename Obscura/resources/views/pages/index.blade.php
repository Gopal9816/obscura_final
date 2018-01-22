@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="jumbotron text-center">
            <h1 class="display-4 animate-pop-in" align="center">OBSCURA</h1>
            <br><br><br>
            @guest
            <p>
                <a href="/login/google"><button id="google" class=btn>Sign In With Google</button></a>
                <a href="/login/facebook"><button id="facebook" class=btn>Sign In With Facebook</button></a>
            </p>
            @else
            <p>
                The game begins soon!!
            </p>
            @endguest
    </div>
</div>
@endsection