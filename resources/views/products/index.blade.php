@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Products</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Add Product
    </a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Price</th><th>Stock</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>Rp{{ number_format($product->price) }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">
                <i class="bi bi-pencil"></i>
            </a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
