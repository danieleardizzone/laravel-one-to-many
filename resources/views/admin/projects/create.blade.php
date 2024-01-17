@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="POST">
        
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Categories</label>
                <select name="type_id" class="form-control" id="type_id">
                  <option value="">Seleziona una categoria</option>
                  @foreach($types as $type)
                    <option @selected( old('type_id') == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Crea</button>
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