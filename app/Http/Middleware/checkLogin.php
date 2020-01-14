<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-04 15:05:26
 * @LastEditTime : 2020-01-04 15:40:35
 */

namespace App\Http\Middleware;

use Closure;

class checkLogin
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

        $data = session('logo');
        if(!$data){
            return redirect('Logo/tj');
        }
        return $next($request);
    }
}
