<?php

namespace App\Http\Middleware;

use App\Models\UserPrivilege;
use Closure;

class RedirectWhenAuthenticatedMiddleware
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
        dd(auth()->user());
        if(auth()->user()->hasRole(UserPrivilege::CANDIDATE_ROLE)){

            dd($request->url());
           // return redirect()->route('students.index');
        }
        return $next($request);
    }
}
