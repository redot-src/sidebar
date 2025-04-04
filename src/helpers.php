<?php

use Illuminate\Support\Facades\Auth;

if (! function_exists('route_allowed')) {
    function route_allowed()
    {
        /*
        |
        | In case route allowed is not defined, we assume it is allowed
        | This is a placeholder function. In a real application, this would check
        | if the route is allowed based on your application's logic.
        |
        */

        return true;
    }
}

if (! function_exists('current_admin')) {
    function current_admin()
    {
        return Auth::guard('admins')->user();
    }
}
