<?php namespace AlexAntonides\ViriCMS\Controllers;

use Illuminate\Http\Request;
use App\Managers\UsersManager;

class PageController extends \App\Http\Controllers\Controller {
    
    public function ShowPage( Request $request ) {
        $page = $request->route()->getAction()['page'];
        $theme_path = $page->theme . ".views.";
        
        return view( $theme_path . $page->view, [ 'page' => $page, 'theme_path' => $theme_path, 'controller' => $this, 'parameters' => $request->route()->parameters ] );
    }

    public function GetUsersManager() { 
        return ( isset($this->usersManager) ) ? $this->usersManager : $this->usersManager = new UsersManager();
    }
}