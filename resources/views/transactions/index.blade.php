@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Transactions</h2>
    <a href="{{ route('transactions.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> New Transaction
    </a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th><th>No. Transaksi</th><th>Date</th><th>Customer</th><th>Payment</th><th>Total</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transactions as $trx)
    <tr>
        <td>{{ $trx->id }}</td>
        <td>{{ $trx->transaction_number }}</td>
        <td>{{ $trx->transaction_date }}</td>
        <td>{{ $trx->customer_name }}</td>
        <td>{{ $trx->payment_method }}</td>
        <td>Rp{{ number_format($trx->total) }}</td>
        <td>
            <a href="{{ route('transactions.show', $trx) }}" class="btn btn-info btn-sm">
                <i class="bi bi-eye"></i>
            </a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
