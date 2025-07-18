<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Transactions', function (Blueprint $table) {
            $table->id();
              $table->string('transaction_number')->unique();
            $table->date('transaction_date');
            $table->string('customer_name');
            $table->string('payment_method');
            $table->decimal('total', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transactions');
    }
};
