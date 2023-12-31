<?php
   
namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    
    use AuthenticatesUsers;
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  public function index(){
    return view('auth.login');
  }


  public function page(){
    return view('control');
  }

    public function login(Request $request)
    {   
        $input = $request->all();
    
        $this->validate($request, [
            'password' => 'required',
        ]);
    
        if(auth()->attempt(array('phone' => $input['email'], 'password' => $input['password'])))
        {
    
            
            if (auth()->user()->type == 'user') {
                return redirect()->route('home.user');
            } else  if (auth()->user()->type == 'kitchen'){
                return redirect()->route('showfood');
            }else{
                return redirect()->route('home');
            }
        } else {
            // Authentication failed
            throw ValidationException::withMessages([
                'email' => __('Invalid email please try again.'),
                'password' => __('Invalid password please try again.'),

            ]);
        }
    }


    public function username()
    {
       return 'phone';
    }
    
}