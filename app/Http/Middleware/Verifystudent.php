<?php

namespace App\Http\Middleware;

use Closure;

class Verifystudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $type = $request->session()->get('type');
        if($type=='Student'){
            return $next($request);
         }else{
             $request->session()->flash('msg', 'Invalid Request');
             return redirect('/login');
         } 
    }
}
