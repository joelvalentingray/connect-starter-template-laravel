<?php

namespace App\Http\Middleware;

use Closure;
use GrayTelevision\GAuthentication\GAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TelescopeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $loggedIn = GAuth::check();

        if (!$loggedIn) {
            return redirect('/login');
        }

        $user = (array) GAuth::getUser(Session::get('user_id'));

        if($user['station'] === 'GDM') {
            return $next($request);
        }

        abort(403);
    }
}
