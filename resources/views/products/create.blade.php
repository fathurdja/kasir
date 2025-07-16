@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Add New Product</h2>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Back
    </a>
</div>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price (Rp)</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        <i class="bi bi-check-circle"></i> Save
    </button>
</form>
@endsection
