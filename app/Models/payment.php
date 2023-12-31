<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
   
    protected $fillable = [
        'mycart_id',
        'food_id',
        'food_name',
        'food_requirement',
        'quantity',
        'userID',
        'food_price',
        'lastest_food_price'
    ];
    public function paymentDetail()
    {
        return $this->belongsTo(PaymentDetail::class, 'payment_detail_id', 'id');
    }
}

