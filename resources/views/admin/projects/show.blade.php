@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->id }}_{{ $project->slug }}</p>
        @if($project->type)
        <p>
            <strong>{{ $project->type->name }}</strong>
        </p>

        @endif

        <p>{{ $project->content }}</p>

        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">Modifica</a>
    </div>
    
@endsection