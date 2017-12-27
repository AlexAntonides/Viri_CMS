<?php namespace AlexAntonides\ViriCMS\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // In order to fix the General Error 1709 on migrating.
        Schema::defaultStringLength(191);

        // Load migrations for the Content Management System.
        $this->loadMigrationsFrom( __DIR__ . '/../../../database/migrations' );

        // Register the views for the Content Management System.
        $this->loadViewsFrom( __DIR__ . '/../../../resources', 'vcms' );

        // Register the routes for the Content Management System.
        $this->loadRoutesFrom( __DIR__ . '/../../auth/routes.php' );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        // Require the needed classes before Boot() starts.
        require_once( __DIR__ . '/../models/route.php');        
        require_once( __DIR__ . '/../controllers/authcontroller.php');
        require_once( __DIR__ . '/../controllers/routecontroller.php'); 
    }
}