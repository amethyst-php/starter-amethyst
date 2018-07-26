<?php

namespace App\Http\Middleware;

use Closure;
use Core\User\User;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || $user->role !== 'admin') {
            abort(404);
        }

        return $next($request);
    }
}
