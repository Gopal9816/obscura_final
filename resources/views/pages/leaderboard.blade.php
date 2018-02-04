@extends('layouts.app')

@section('content')
<div class="row">
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">College</th>
            <th scope="col">Level</th>
            <th scope="col">Points</th>
          </tr>
    </thead>
    <tbody>
        @if(count($users) > 0)
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->college }}</td>
                    <td>{{ $user->level }}</td>
                    <td>{{ $user->points }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
</div>
@endsection