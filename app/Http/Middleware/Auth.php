<?php
namespace App\Http\Middleware;

use Closure;

class Auth
{
     public function handle($request, Closure $next, $guard = null)
    {
        
        if (array_key_exists('user', $_SESSION)){
        return $next($request);
        	
        } else {
        	return response()->view('auth.login',['error' => 'login']);

        }

        
    }
}
