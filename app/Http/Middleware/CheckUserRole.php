<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    //we also modify and add this to Kernel.php

    //protected $routeMiddleware = [
    //    'checkUserRole' => \App\Http\Middleware\CheckUserRole::class,
    //];


    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user has role 1 (Management) or role 2 (Operation)
        if ($request->user() && in_array($request->user()->role, [1, 2])) {
            return $next($request);
        }

        abort(403, 'Unauthorized'); // Redirect or display an error message
    }
}
