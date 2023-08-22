<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentRecord extends Model
{
    use HasFactory;
    protected $table = 'payment_records';
    protected $fillable = [
        'userID',
        'totalFoodPrice',
        'discount',
        'nett_total',
        'payment_method',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'paymentID', 'id');
    }
}

