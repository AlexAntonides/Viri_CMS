<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    
    public function ShowPage( Request $request ) {
        $page = $request->route()->getAction()['page'];
        $theme_path = $page->theme . ".views.";
        
        return view( $theme_path . $page->view, [ 'page' => $page, 'theme_path' => $theme_path ] );
    }
}