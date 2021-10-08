<?php

namespace App\Http\Middleware;

use Closure;

class Admin_islogin
{
   
    public function handle($request, Closure $next)
    {
        if($request->session()->has('BLOG_USER_ID') && $request->session()->has('BLOG_USER_EMAIL')){
            return redirect('/admin/post');
        }
        return $next($request);
    }
}
