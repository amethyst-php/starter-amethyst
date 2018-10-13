<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        /** @var \App\Models\User */
        $user = Auth::user();

        if ($user == null || $user->role !== 'admin') {
            abort(404);
        }

        return $next($request);
    }
}
