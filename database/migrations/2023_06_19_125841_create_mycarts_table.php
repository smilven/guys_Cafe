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
        Schema::create('mycarts', function (Blueprint $table) {
            $table->id();
            $table->string('food_id');
            $table->string('quantity');
            $table->string('userID');
            $table->string('orderID');
            $table->string('food_name');
            $table->float('lastest_food_price');
            $table->string('food_requirement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mycarts');
    }
};
