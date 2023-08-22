<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirmOrder extends Model
{
    use HasFactory;
    protected $table = 'confirm_orders';

    protected $fillable = [
        'food_id',
        'food_name',
        'quantity',
        'food_price',
        'userID',
        'food_requirement',
        'orderID',
        'paymentID',
        'tableNumber',
    ];
}
