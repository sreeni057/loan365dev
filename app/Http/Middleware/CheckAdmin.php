<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Admins;
class CheckAdmin
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
        if(Auth::guard('admin')->check())
        {
            $admin= Admins::where('id',Auth::guard('admin')->id())->where(['active'=>'1','usertype'=>'admin'])->first();//dd($admin);
            if(!$admin)
            {
                Auth::guard('admin')->logout();
                return abort("403","Invalid access");
            }
            return $next($request);
        }
        else 
        {
            return redirect()->intended('login/coach')->with('message', 'Please Login to access admin area');
        }
    }
}
