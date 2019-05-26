@extends('layout')
@section ('title')
    My First Website
@endsection
@section ('content')
    <h1>My {{ $foo }} Website</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection