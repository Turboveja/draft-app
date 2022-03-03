<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NoInternetExplorerMiddleware
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
        $result = $_SERVER['HTTP_USER_AGENT'];
        $text = 'This app is not compatible with Internet Explorer';

        if (false !== strpos($result, 'Windows NT 10.0; WOW64;')) {
            return view('/errors/401', ['text' => $text]);
        }

        return $next($request);
    }
}
