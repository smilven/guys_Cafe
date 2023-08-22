<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'tableNumber',
        'food_id',
        'food_name',
        'food_price',
        'quantity',
        'food_requirement',
        'userID',
        'orderID',
        'paymentID'
    ];
    public function paymentRecord()
    {
        return $this->belongsTo(PaymentRecord::class, 'paymentID', 'id');
    }  
}

