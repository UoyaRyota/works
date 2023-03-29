<?php
namespace App\Http\Middleware;

use Closure;

class XFrameOptions
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('X-Frame-Options', 'sameorigin');
        return $response;
    }
}