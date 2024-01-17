@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('admin.projects.update', $project)}}" method="POST">

        @csrf
        
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <input type="text" class="form-control" id="content" name="content" value="{{ old('content', $project->content) }}">
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Categories</label>
            <select name="type_id" class="form-control" id="type_id">
              <option value="">Seleziona una categoria</option>
              @foreach($types as $type)
                <option @selected( old('type_id', optional($project->type)->id ) == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
              @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Modifica</button>
        </form>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>

@endsection