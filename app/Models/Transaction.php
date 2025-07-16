<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $fillable = [
        'transaction_number',
        'transaction_date',
        'customer_name',
        'payment_method',
        'total'
    ];

    public function items() {
        return $this->hasMany(TransactionItem::class);
    }
}
