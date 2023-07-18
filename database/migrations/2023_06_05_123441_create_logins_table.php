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
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->string('GuestID')->unique();
            $table->string('PhoneNumber');
            $table->timestamps();
        });

        // Generate the initial guest IDs
        $this->generateGuestIDs();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }

    /**
     * Generate unique guest IDs.
     */
    private function generateGuestIDs(): void
    {
        $guests = \App\Models\Login::all();

        foreach ($guests as $guest) {
            $guest->GuestID = $this->generateUniqueGuestID();
            $guest->save();
        }
    }

    /**
     * Generate a unique guest ID.
     *
     * @return string
     */
    private function generateUniqueGuestID(): string
    {
        $lastGuest = \App\Models\Login::latest('id')->first();

        if ($lastGuest) {
            $lastGuestID = $lastGuest->GuestID;
            $number = intval(substr($lastGuestID, 1)) + 1;
        } else {
            $number = 1;
        }

        $formattedNumber = sprintf('%03d', $number);
        return 'G' . $formattedNumber;
    }
};
