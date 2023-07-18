<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    function addData(Request $req){
$login = new Login;
$login -> PhoneNumber = $req -> PhoneNumber;
$login->GuestID = $this->generateUniqueGuestID(); // Generate unique GuestID
$login->save();
return redirect('http://127.0.0.1:8000/new?tableNumber=1');
    }
    private function generateUniqueGuestID()
    {
        $lastLogin = Login::latest()->first();
    
        if ($lastLogin) {
            $lastGuestID = $lastLogin->GuestID;
            $lastNumber = intval(substr($lastGuestID, 1));
    
            // Check if the lastGuestID is already at the maximum value
            if ($lastNumber >= 100) {
                // Maximum guest ID reached, return the last guest ID
                return $lastGuestID;
            }
    
            // Generate a new guest ID and check for uniqueness
            do {
                $newNumber = $lastNumber + 1;
                $newGuestID = 'G' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
    
                // Check if the newGuestID already exists
                $existingLogin = Login::where('GuestID', $newGuestID)->first();
                if (!$existingLogin) {
                    // Unique guest ID found, return it
                    return $newGuestID;
                }
    
                $lastNumber = $newNumber;
            } while ($lastNumber < 100);
    
            // If the loop exits without returning, the maximum guest ID is reached
            return 'G100';
        }
    
        return 'G001';
    }
    
    
}
