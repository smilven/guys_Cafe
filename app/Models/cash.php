<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cash extends Model
{
    use HasFactory;
    protected $table = 'cashes';

    protected $fillable = [
        'userID',
        'totalFoodPrice',
        'discount',
        'nett_total',
        'earnPoint',
        'tableNumber',
    ];
}
