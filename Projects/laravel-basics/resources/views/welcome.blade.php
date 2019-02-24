@extends('layout')

@section('header')
    <div class="title m-b-md">
        Alexander er kul!
    </div>
    <ul style="text-align: left">
        @foreach ($tasks as $task)

            <li>{{ $task }}</li>

        @endforeach
    </ul>
@endsection