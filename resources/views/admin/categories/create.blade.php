@extends('layout.layout')

@section('content')
    <h1>Ajouter une Catégorie</h1>

    <form action="{{ route('admin.categories.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nom de la Catégorie</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection
