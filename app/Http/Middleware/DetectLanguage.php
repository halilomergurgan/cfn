<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class DetectLanguage
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
        if (Session::has('language')) {
            $language = Session::get('language');
        } else {
          $language = 'en';
          Session::put('language', $language);
        }

        App::setLocale($language);
        return $next($request);
    }
}
