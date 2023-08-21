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
        Schema::create('cashes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('userID');
            $table->float('tableNumber');
            $table->float('totalFoodPrice');
            $table->float('discount');
            $table->float('nett_total');
            $table->float('earnPoint');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashes');
        
    }
};
