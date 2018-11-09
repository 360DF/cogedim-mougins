<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckOrigin
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
        // Authorized parameters
        $authorized = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
        
        // Get all parameters
        $parameters = $request->all();
        if(count($parameters) > 0) {
            foreach($parameters as $k => $v) {
                if(in_array($k, $authorized)) {
                    Session::put($k, $v);
                }
            }
        }
        
        return $next($request);
    }
}
