<?php

namespace Projects\Klinik\Middlewares;

use Closure;
use Illuminate\Http\Request;

class SetTenant
{
    public function handle(Request $request, Closure $next)
    {
        if (isset($_SESSION['tenant'])) {
            session(['tenant' => $_SESSION['tenant']->id]);
        }

        return $next($request);
    }
}
