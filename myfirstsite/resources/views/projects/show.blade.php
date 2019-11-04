@extends('layouts.main')

@section('content')

    <h1>{{$project->title}}</h1>
    <a href="/projects/{{$project->id}}/edit">Edit Project</a>

    <p>{{$project->description}}</p>

    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{$task->id}}">
                        @method('PATCH')
                        @csrf
                        <label for="completed">
                            <input type="checkbox" {{$task->completed ? 'checked' : ''}} name="completed" onChange="this.form.submit()" id="">
                        </label>
                    </form>
                    {{$task->description }}
                </div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/projects/{{$project->id}}/tasks">
        <label for="description">New Task</label>
        @csrf
        <div>
            <input type="text" name="description" placeholder="New Task!" id="">
        </div>

        <button type="submit">Add Task</button>

    </form>
    

@endsection