<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Clearance {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->hasPermissionTo('Admin')) //If user has this //permission
        {
            return $next($request);
        }

        if ($request->is('regions/create'))//If user is creating a post
        {
            if (!Auth::user()->hasPermissionTo('create'))
            {
                abort('401');
            }
            else {
                return $next($request);
            }
        }

        if ($request->is('regions/*/edit')) //If user is editing a post
        {
            if (!Auth::user()->hasPermissionTo('update')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('regions/Delete')) //If user is deleting a post
        {
            if (!Auth::user()->hasPermissionTo('Delete')) {
                abort('401');
            }
            else
            {
                return $next($request);
            }
        }

        return $next($request);
    }
}