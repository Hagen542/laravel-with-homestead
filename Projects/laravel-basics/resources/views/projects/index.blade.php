@extends('layout')

@section('title', 'About Alexander')

@section('header')
    <div class="title m-b-md">
        Projects
    </div>
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection
