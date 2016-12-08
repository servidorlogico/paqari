<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;
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
   // protected $redirectTo='/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest', ['except' => 'logout']);
    }
    
     public function redirectToProvider($provider)
    {
        try {
            if($provider=='facebook'){
                return Socialite::driver('facebook')->redirect();    
            }
            if($provider=='google'){
               
                return Socialite::driver('google')->redirect();    
            }
            
        } catch (Exception $e ) {
            return redirect('/');
        }
        
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        
          try {
             if($provider=='facebook'){
                $user_social = Socialite::driver('facebook')->user();         
             }
             if($provider=='google'){
                 $user_social = Socialite::driver('google')->user();         
                 
             }
        
      
       $name = explode(" ",$user_social->getName());
      //dd($user_social);
            
        } catch (\Exception $e ) {
            return redirect('/');
        }
        
        $user_provider = \App\SocialProvider::where('provider_id',$user_social->getId())->orWhere('email',$user_social->getEmail())   ->first();
        if(!$user_provider)
        {
            ///create user
            
         $user = \App\User::create([
             
            'email'=>$user_social->getEmail(),
            'name'=>$name[0],
            'lastname'=>$name[1],
            'type'=>'user',
            ]);
           
            
            $user->social()->create([
                'provider_id'=>$user_social->getId(),
                'provider'=>$provider,
                'email'=>$user_social->getEmail()
                ]);
            
        }
        else{
            
          $user = $user_provider->user;
        }
        auth()->login($user);
        return redirect('/home');
        
        // $user->token;
    }
    
    
    
    
}
