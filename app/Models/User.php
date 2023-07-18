<?php
   
namespace App\Models;
   
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Twilio\Rest\Client;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
 
     */
    protected $fillable = [
        'name',
        'phone',
        'password',
        'type'
    ];
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
 
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
   
    /**
     * The attributes that should be cast.
     *
     * @var array
 
     */
    protected $casts = [
        'phone_verified_at' => 'datetime',
    ];
  
    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin","kitchen"][$value],
        );
    }
    public function userPhoneVerified()
    {
      return ! is_null($this->phone_verified_at);
    }
    
    public function phoneVerifiedAt()
    {
      return $this->forceFill([
         'phone_verified_at' => $this->freshTimestamp(),
      ])->save();
    }
    public function varifyByCall()
{
  $code = mt_rand(100000, 999999);
       
   $this->forceFill([
       'verification_code' => $code
   ])->save();

   $client = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));

   $client->messages->create(
     $this->phone,
     
     [
         'from' => "+13613143983", // REPLACE WITH YOUR TWILIO NUMBER
         'body' => "Your OTP code is: " . $code // REPLACE WITH YOUR OTP MESSAGE
     ]
 );
 
}
}
