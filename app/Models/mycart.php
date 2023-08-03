<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mycart extends Model
{
    use HasFactory;
    protected $table = 'mycarts';

    protected $fillable=['food_id','quantity','userID','orderID','food_requirement','lastest_food_price'];

}
