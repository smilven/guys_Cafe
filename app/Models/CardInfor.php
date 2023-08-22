<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardInfor extends Model
{
    protected $table = 'card_infors';

    protected $fillable = [
        'card_number',
        'userID',
        'expiry_date',
        'cvv',
        'cardholder_name',
        'tableNumber',
    ];
    use HasFactory;
}

