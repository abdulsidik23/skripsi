<?php
namespace App\Http\Middleware;

use Closure;

class Admin
{
     public function handle($request, Closure $next, $guard = null)
    {
       
            if($_SESSION['tipe_user']=='admin')
        return $next($request);
    else
        return response()->view('errors.tha');
        	
         

        
    }
}
