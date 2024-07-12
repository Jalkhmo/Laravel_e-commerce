@extends('layouts.admin')

@section('title', 'Ajouter un produit')

@section('content')
    <h1>Ajouter un produit</h1>
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select id="category_id" name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="promo">Promo</label>
            <input type="checkbox" id="promo" name="promo" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>    
@endsection
