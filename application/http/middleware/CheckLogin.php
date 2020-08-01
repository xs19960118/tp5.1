<?php

namespace app\http\middleware;

class CheckLogin
{
    public function handle($request, \Closure $next)
    {
        echo 'CheckLogin <br/>';

        // 放行
        return $next($request);
    }
}
