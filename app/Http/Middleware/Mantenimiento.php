<?php

namespace App\Http\Middleware;

use Closure;

class Mantenimiento
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle()
    {
        return redirect()->route('inicio');
    }
}
