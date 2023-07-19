<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentDetail extends Model
{
    use HasFactory;
    protected $table = 'payment_details';
    protected $fillable = [
        'userID',
        'totalFoodPrice',
        'discount',
        'nett_total',
        'payment_method',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'payment_detail_id', 'id');
    }
}
