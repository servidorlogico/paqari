<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Routing\Redirector;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * 
     * 
     */
     
   public function  __construct(Guard $auth){
        $this->auth = $auth;
    }

     
     
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->type!='admin'){
            return redirect()->to('/');
        }
        return $next($request);
    }
}
