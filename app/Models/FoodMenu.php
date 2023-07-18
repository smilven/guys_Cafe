<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    protected $table = 'food_menus';
    protected $fillable = [
        'food_id',
        'food_name',
        'food_description',
        'food_category',
        'food_price',
        'avatar',
        'status'
    ];
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
