<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()==true){
            // if(auth()->user()->user_role == 'admin' && auth()->user()->login_status==1){
            if(auth()->user()->user_role == 'admin'){
                return $next($request);
            }
        }else{

            return redirect('admin/login')->with('error',"You not have access!");
        }
       
   
    }
}
