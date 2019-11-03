@extends('layouts.main')

@section('content')
    <h1>KiwiClipClop</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection