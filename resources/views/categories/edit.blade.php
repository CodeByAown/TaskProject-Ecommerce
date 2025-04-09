@extends('layouts.master')

@section('title', 'Edit Category')

@section('content')
<h1>Edit Category</h1>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Category</button>
</form>
@endsection
