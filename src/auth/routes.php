<?php
use AlexAntonides\ViriCMS\Models\Route;

$routes = Route::all();

foreach ($routes as $route) {    
    $loaded = Route::match( [ $route->type ], $route->path, [ 'uses' => '\AlexAntonides\ViriCMS\Controllers\\' . $route->action, 'page' => $page ] )->name( $route->route );
//    if ( isset($route->middleware) && $route->middleware != '' ) $loaded->middleware( $route->middleware );
}