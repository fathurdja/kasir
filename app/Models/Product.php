<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['name', 'price', 'stock'];


    public function transactionItems() {
        return $this->hasMany(TransactionItem::class);
    }
}
