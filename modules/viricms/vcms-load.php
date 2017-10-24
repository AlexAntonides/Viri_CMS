<?php

/*
|--------------------------------------------------------------------------
| ViriCMS front application
|--------------------------------------------------------------------------
|
| This file doesn't really do anything special, but it
| loads the environment and the template of the
| framework. 
|
| @package ViriCMS 
|
*/

if ( !isset($viricms_loaded) ) {
    $viricms_loaded = true;
 
    include( __DIR__ . "/app/models/vcms-page.php" );

    include( __DIR__ . "/app/managers/vcms-pagesmanager.php" );
    include( __DIR__ . "/app/managers/vcms-usersmanager.php" );

    include( __DIR__ . "/app/controllers/vcms-authcontroller.php" );
    include( __DIR__ . "/app/controllers/vcms-pagecontroller.php" );

    include( __DIR__ . "/app/providers/vcms-serviceprovider.php" );
}