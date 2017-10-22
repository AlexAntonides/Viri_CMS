<?php

use App\Managers\PagesManager;
$pagesManager = new PagesManager();

$pages = $pagesManager->pages;
$len = count($pages);

for ( $i = 0; $i < $len; $i++ ) {
    $page = $pages[ $i ];
    $pagesManager->Build( $page );

    $route = Route::match( [ $page->route_type ], $page->path, [ 'uses' => $page->action, 'page' => $page ] )->name( $page->route );
    if ( isset($page->middleware) && $page->middleware != '' ) $route->middleware( $page->middleware );
}
