<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
     public function index() {
        $transactions = Transaction::with('items')->latest()->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create() {
        $products = Product::all();
        return view('transactions.create', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'customer_name' => 'required',
            'payment_method' => 'required',
            'items' => 'required|array',
        ]);

        $transaction = Transaction::create([
            'transaction_number' => 'TRX-' . time(),
            'transaction_date' => now(),
            'customer_name' => $request->customer_name,
            'payment_method' => $request->payment_method,
            'total' => 0,
        ]);

        $total = 0;
        foreach ($request->items as $item) {
            $product = Product::find($item['product_id']);
            $subtotal = $product->price * $item['quantity'];
            $total += $subtotal;

            TransactionItem::create([
                'transaction_id' => $transaction->id,
                'product_id' => $product->id,
                'quantity' => $item['quantity'],
                'price' => $product->price,
            ]);
        }

        $transaction->update(['total' => $total]);
        return redirect()->route('transactions.index');
    }

    public function show(Transaction $transaction) {
        $transaction->load('items.product');
        return view('transactions.show', compact('transaction'));
    }
}
