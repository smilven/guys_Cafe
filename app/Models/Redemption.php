<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redemption extends Model
{
    protected $table = 'redemptions';
    
    protected $fillable = [
        'voucherCode',
        'amount',
        'redemptionCode',
        'redemptionDate',
        'userID',
        'type',
    ];
  
    public static function findByCode($code){
        return self::where('redemptionCode',$code)->first();

    }
    public function discount($amount)
    {
        if ($this->type === 'fixed') {
            return $this->value;
        } elseif ($this->type === 'percent') {
            return ($this->percent_off / 100) * $amount;
        } else {
            return 0;
        }
    }


}
