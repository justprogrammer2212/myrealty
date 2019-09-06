<?php


namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next) {
        if (Auth::user() && Auth::user()->role == User::ROLE_ADMIN) {
            return $next($request);
        }
        return redirect()->back();
    }
}
