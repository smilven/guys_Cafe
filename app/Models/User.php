<?php
   
namespace App\Models;
use Twilio\Exceptions\ConfigurationException;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;

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
        'type',
        'point',
        'profile_image'
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
        try {
            $code = mt_rand(100000, 999999);
    
            $this->forceFill(['verification_code' => $code])->save();
    
            $client = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
    
            $client->messages->create(
                $this->phone,
                [
                    'from' => "+13613143983",
                    'body' => "Your OTP code is: " . $code
                ]
            );
        } catch (ConfigurationException $e) {
            // Handle the exception, e.g., log an error message
            Log::error('Twilio Configuration Exception: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Handle other exceptions
        }
    }
    
}
