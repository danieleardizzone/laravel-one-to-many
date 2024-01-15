@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->slug }}</p>
        <h3>{{ $project->id }}</h3>
        <p>{{ $project->content }}</p>

        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">Modifica</a>
    </div>
    
@endsection