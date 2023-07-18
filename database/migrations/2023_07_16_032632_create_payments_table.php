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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('food_id');
            $table->string('food_name');
            $table->string('food_requirement');
            $table->string('quantity');
            $table->string('userID');
            $table->float('lastest_food_price');
            $table->float('total_food_price');
            $table->float('discount');
            $table->float('nett_total');
            $table->string('payment_method');
            $table->string('payment_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
