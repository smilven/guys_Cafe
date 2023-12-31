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
        Schema::create('redemptions', function (Blueprint $table) {
            $table->id();
            $table->string('voucherCode');
            $table->string('amount');
            $table->string('redemptionCode');
            $table->string('redemptionDate');
            $table->string('userID');
            $table->timestamps();
        });
    }

    /**
     * 
     * 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redemptions');
    }
};
