@extends('layout.layout')

@section('content')
    <h1>Modifier la Catégorie</h1>

    <form action="{{ route('admin.categories.update', $category) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Nom de la Catégorie</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection
