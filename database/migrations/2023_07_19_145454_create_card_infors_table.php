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
        Schema::create('card_infors', function (Blueprint $table) {
            $table->id();
            $table->string('card_number'); 
            $table->string('userID');
            $table->string('expiry_date'); 
            $table->string('cvv'); 
            $table->string('cardholder_name'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_infors');
    }
};
