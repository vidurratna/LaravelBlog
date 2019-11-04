
@extends('layouts.main')

@section('title', 'My Projects')

@section('content')
    <h1>My Projects</h1>
    @foreach ($projects as $project)

        <li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
        
    @endforeach
@endsection