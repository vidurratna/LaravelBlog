@extends('layouts.main')

@section('content')

    <h1>Edit Project!</h1>

    <form method="POST" action="/projects/{{$project->id}}">

        @method('PATCH')
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title" value="{{$project->title}}" required>

        <label for="description">Description</label>
        <textarea name="description" required>{{$project->description}}</textarea>

        <button type="submit">Update Project</button>
    </form>

    <form method="POST" action="/projects/{{$project->id}}">

        @method('DELETE')
        @csrf

        <button type="submit">Delete Project</button>
    </form>

@endsection