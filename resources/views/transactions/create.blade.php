@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Create Transaction</h2>
    <a href="{{ route('transactions.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Back
    </a>
</div>

<form action="{{ route('transactions.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="customer_name" class="form-label">Customer Name</label>
        <input type="text" name="customer_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="payment_method" class="form-label">Payment Method</label>
        <select name="payment_method" class="form-control" required>
            <option value="Cash">Cash</option>
            <option value="Transfer">Transfer</option>
        </select>
    </div>

    <h5>Items</h5>
    <div id="items">
        <div class="row mb-2">
            <div class="col">
                <select name="items[0][product_id]" class="form-control" required>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Rp{{ $product->price }})</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <input type="number" name="items[0][quantity]" class="form-control" placeholder="Quantity" required>
            </div>
        </div>
    </div>

    <!-- Optional: tombol tambah baris item pakai JS -->

    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save"></i> Save Transaction
    </button>
</form>
@endsection
