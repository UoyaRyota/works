<?php
namespace App\Http\Middleware;

use Closure;

class NoStoreCache
{
    public function handle($request, Closure $next)
    {

        $response = $next($request);
        $response->header('Cache-Control', ['no-store']);
        $response->header('Pragma', ['no-cache']);
        return $response;
    }
}