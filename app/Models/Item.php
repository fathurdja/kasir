<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'munit';
    protected $fillable = [
        'tyunit',   // Kode Barang
        'ntyunit',  // Nama Barang
        'kdkelp',   // Kode Kelompok
        'hjual',    // Harga Jual
        'cmodule',  // Modul/Departemen
        'userup',   // User input/update
        'tglup'     // Tanggal update
    ];

    protected $casts = [
        'hjual' => 'integer',
        'tglup' => 'date',
    ];
}
