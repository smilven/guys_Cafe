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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('food_id');
            $table->string('food_name');
            $table->string('quantity');
            $table->string('food_price');
            $table->string('userID');
            $table->string('food_requirement');
            $table->string('orderID');
            $table->string('paymentID');
            $table->string('tableNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
