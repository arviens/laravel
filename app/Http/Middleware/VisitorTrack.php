<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class VisitorTrack
{
    const COOKIE_NAME = 'i55aa1weq';

    public function handle($request, Closure $next)
    {
        if (is_null(Cookie::get(self::COOKIE_NAME))) {
            $visitorTrack = new \App\Models\VisitorTrack([
                'ip' => $request->ip(),
                'user_agent' => $request->header('User-Agent')
            ]);
            $visitorTrack->saveOrFail();
            Cookie::queue(self::COOKIE_NAME, '1', 60);
        }

        return $next($request);
    }
}
