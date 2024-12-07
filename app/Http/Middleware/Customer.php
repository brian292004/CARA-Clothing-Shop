<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Customer
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
        // dd('ok');
        if (Auth::check() && auth()->user()->role == 'admin') {
            return $next($request);
        }
        elseif(Auth::check() && auth()->user()->role == 'user'){
            return redirect()->route('dashboard.index');
        }
        return redirect()->back();
    }
}
