<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    public function paymentDetail()
    {
        return $this->belongsTo(PaymentDetail::class, 'payment_detail_id', 'id');
    }
}
