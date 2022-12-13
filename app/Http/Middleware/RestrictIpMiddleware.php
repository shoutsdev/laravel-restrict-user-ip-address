<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictIpMiddleware
{
    public $block_ips = ['whitelist-ip-1', 'whitelist-ip-2', '127.0.0.1'];

    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->ip(), $this->block_ips)) {
            return abort(403);
        }
        return $next($request);
    }
}
