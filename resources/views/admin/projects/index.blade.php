@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-row-reverse my-2">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Crea nuovo</a>
        </div>
        <div class="card my-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">type</th>
                        <th scope="col">slug</th>
                        <th scope="col">content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            
                                <td><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></td>
                                <td>{{ isset($project->type_id) ? $project->type->name : '-' }}</td>
                            
                            <td>{{ $project->slug }}</td>
                            <td>{{ $project->content }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection