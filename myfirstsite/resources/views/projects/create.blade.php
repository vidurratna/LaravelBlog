
@extends('layouts.main')

@section('title', 'Create new Project')

@section('content')
    <h1>Create new projects!</h1>

    <form method="POST" action="/projects">

        {{ csrf_field() }}
        <div>
            <input type="text" name="title" class="{{$errors->has('title') ? 'error' : ''}}" placeholder="Project Title" value="{{old('title')}}">
        </div>

        <div>
            <textarea name="description" class="{{$errors->has('description') ? 'error' : ''}}" placeholder="Project description" value="{{old('description')}}"></textarea>
        </div>

        <div>
            <button type="submit">Create Project!</button>
        </div>

        @if ($errors->any())

            <div>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
            
        @endif
    </form>


@endsection