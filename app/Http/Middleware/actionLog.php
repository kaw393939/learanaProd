<?php

namespace App\Http\Middleware;

use Closure;
use App\action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class actionLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $userID = 0;

        if(Auth::check()) { // first check if there is a logged in user

          $userID = Auth::id();
        }
        $action = new action();
        $action->user_id = $userID;
        $action->HTTP_USER_AGENT = $request->server('HTTP_USER_AGENT');
        $action->http_referer = $request->server('HTTP_REFERER');
        $action->request_uri = $request->server('REQUEST_URI');
        $action->save();
        return $next($request);
    }
}
