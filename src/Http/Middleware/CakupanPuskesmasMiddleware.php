<?php namespace Bantenprov\CakupanPuskesmas\Http\Middleware;

use Closure;

/**
 * The CakupanPuskesmasMiddleware class.
 *
 * @package Bantenprov\CakupanPuskesmas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CakupanPuskesmasMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
