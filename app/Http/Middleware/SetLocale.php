<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\App;

class SetLocale
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
        // $locale = \session('locale');

        $langPrefix = \ltrim($request->route()->getPrefix(), '/');

        $langPrefix = (empty($langPrefix)) ? config("app.locale") : $langPrefix;
        
        \session(['locale' => $langPrefix]);
        App::setLocale($langPrefix);

        // if ($langPrefix) {
        //     App::setLocale($langPrefix);
        // }
        

        return $next($request);
    }
}
