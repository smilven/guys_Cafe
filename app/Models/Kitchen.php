<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    use HasFactory;
    protected $table = 'kitchens';

    protected $fillable=['food_id','food_requirement','quantity','userID','orderID','food_name','food_Status'];
}
