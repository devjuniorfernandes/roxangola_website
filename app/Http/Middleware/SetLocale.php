<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Línguas suportadas pelo site.
     */
    public const SUPPORTED = ['pt', 'en'];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->query('lang')
            ?? $request->session()->get('locale')
            ?? $request->cookie('locale')
            ?? config('app.locale', 'en');

        if (! in_array($locale, self::SUPPORTED, true)) {
            $locale = config('app.locale', 'en');
        }

        app()->setLocale($locale);
        $request->session()->put('locale', $locale);
        cookie()->queue(cookie('locale', $locale, 525600));

        return $next($request);
    }
}
