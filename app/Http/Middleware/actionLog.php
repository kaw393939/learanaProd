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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $action = new action();

        if(is_null(Auth::id()))
        {
            $userID = 0;
        } else {
            $userID = Auth::id();
        }

        $action->user_id = $userID;
        $action->HTTP_USER_AGENT = $request->server('HTTP_USER_AGENT');
        $action->http_referer = $request->server('HTTP_REFERER');
        $action->request_uri = $request->server('REQUEST_URI');
        $action->save();
        return $next($request);
    }
}
