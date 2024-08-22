<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiKey
{
    public function handle($request, Closure $next)
    {
        $agent = $request->header('User-Agent');
        $apiKey = $request->header('X-API-KEY');
        if ($agent !== 'MuseumGuide/1.0' || $apiKey !== env('MUSEUMGUIDE_API_KEY')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}

