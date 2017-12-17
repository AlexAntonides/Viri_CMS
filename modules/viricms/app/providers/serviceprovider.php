<?php namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class VcmsServiceProvider extends ServiceProvider {
    
    private static $requires = [];
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Blade::directive('require', function( $expression ) {
            
            if ( in_array( $expression, self::$requires ) ) return;
            else {
                array_push( self::$requires, $expression );
            }
            $url;
            $regex_url = '/(["\'])([^"\']+)\1/';
            preg_match( $regex_url, $expression, $url);
            $url = $url[0];
            $url = str_replace( '"', '', $url);
            $url = str_replace( "'", '', $url);
            $path = pathinfo( $url );
            
            if ( isset($path['extension']) == false ) 
                return  '<?php echo "The current url doesn\'t have an extension: '. $expression . '!<br/><br/>"; ?>';
            switch ($path['extension']) {
                case 'css':
                    return '{!! "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . ' . $expression . ' . "\"></link>" !!}';
                    break;
                    
                case 'js':
                    return '{!! "<script language=\"javascript\" type=\"text/javascript\" src=\"" . ' . $expression . ' . "\"></script>" !!}';
                    break;
    
                default:
                    return '<?php echo "The file extension of type: '. $path['extension'] .' is not supported! <br/><br/>"; ?>';
                    break;
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }
}