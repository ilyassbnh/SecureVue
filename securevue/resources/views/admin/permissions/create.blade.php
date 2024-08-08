@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Créer une Nouvelle Permission</h1>
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom de la Permission</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
