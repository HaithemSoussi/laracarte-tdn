<?php

if (!function_exists('page_title')) {
    function page_title($title)
    {
        $base_title = env('APP_NAME') . ' - List of artisans';
        return empty($title) ? $base_title : sprintf('%s | %s', $title, $base_title);
    }
}

if (!function_exists('set_active_route')) {
    function set_active_route($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}

if (!function_exists('set_textdark_route')) {
    function set_textdark_route($route)
    {
        return Route::is($route) ? 'text-dark font-weight-bold' : '';
    }
}
