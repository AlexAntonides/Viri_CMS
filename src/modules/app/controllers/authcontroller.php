<?php namespace AlexAntonides\ViriCMS\Controllers;

use Hash;
use Redirect;
use Auth;
use Validator;
use IlluminateSupportFacadesValidator;
use IlluminateFoundationBusDispatchesJobs;
use IlluminateRoutingController as BaseController;
use IlluminateFoundationValidationValidatesRequests;
use IlluminateFoundationAuthAccessAuthorizesRequests;
use IlluminateFoundationAuthAccessAuthorizesResources;
use IlluminateHtmlHtmlServiceProvider;
use Illuminate\Http\Request;

class AuthController extends \App\Http\Controllers\Controller {
    
    public function ShowLogin( Request $request ) {
        $page = $request->route()->getAction()['page'];
        $theme_path = $page->theme . ".views.";

        if( Auth::check() ) {
            return redirect()->route('vcms-editor');
            //return view( $theme_path . 'home', [ 'page' => $page, 'theme_path' => $theme_path ] );
        } else {
            return view( $theme_path . $page->view, [ 'page' => $page, 'theme_path' => $theme_path ] );
        }
    }

    public function PostLogin( Request $request ) {
        $input = $request->all();
        
        $rules = [
            '_email' => 'required|email',
            '_password' => 'required|alphaNum|min:8'
        ];
        $validator = Validator::make( $input, $rules );
        if ($validator->fails()) {
            return back()->withErrors( $validator )->withInput( $request->except('password') );
        } else {
            $userData = [
                'email' => $input['_email'],
                'password' => $input['_password']
            ];

            if (Auth::attempt($userData, isset( $input['_remember'] )) ) {
                return back();
            } else {
                return back()->withErrors( $validator )->withInput( $request->except('password') );
            }
        }
    }

    public function DoLogout() {
        Auth::logout();
        return Direct::to('home');
    }
}