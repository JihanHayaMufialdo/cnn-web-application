<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // dd($request->user(), $role);
        // if (!$request->user() || !$request->user()->hasRole($role)) {
        //     abort(403, 'Unauthorized action.');
        // }

        // return $next($request);
        $user = auth()->user();

        // Menambahkan nilai nama dan role ke objek request
        $request->merge([
            'nama' => $user->nama,
            'nip'  => $user->nip,
            'role' => $user->role,
        ]);

        return $next($request);
    }
}
