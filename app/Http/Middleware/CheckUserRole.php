<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
      if (!empty($request->user())) {
        if ($request->user()->role !== $role) {
          return redirect('/home');
        } else {
          return $next($request);
        }
      } else {
        return redirect('/home');
      }

    }
}
