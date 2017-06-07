<?php

namespace App\Http\Middleware;

use Closure;

class HasRole
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
      if ($request->user()->can($role)) {
        return $next($request);
      }
      return redirect('home')
        ->with('message', 'Anda tidak memiliki hak akses');
    }
}
