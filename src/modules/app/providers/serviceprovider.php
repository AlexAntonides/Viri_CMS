<?php namespace AlexAntonides\ViriCMS\Providers;

use Illuminate\Support\Facades\Blade;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // Register the routes for the Content Management System.
        $this->loadRoutesFrom( __DIR__ . '/../../auth/routes.php' );

        // Register the views for the Content Management System.
        $this->loadViewsFrom( __DIR__ . '/../../resources', 'vcms' );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        // Require the needed classes before Boot() starts.
        require_once( __DIR__ . '/../models/page.php');        
        require_once( __DIR__ . '/../managers/usersmanager.php');
        require_once( __DIR__ . '/../managers/pagesmanager.php');
        require_once( __DIR__ . '/../controllers/authcontroller.php');  // Not loading?
        require_once( __DIR__ . '/../controllers/pagecontroller.php');  // Not loading?
    }
}