<?php
/*
*
* (c) Marco Bunge <marco_bunge@web.de>
*
* For the full copyright and license information, please view the LICENSE.txt
* file that was distributed with this source code.
* 
*/
namespace Acacha\AceTemplateLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class AceTemplateLaravelServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
    
        /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishPublicAssets();
    }

    private function publishPublicAssets()
    {
        $this->publishes([
            dirname(__FILE__) . '/../public/avatars' => public_path('avatars'),
            dirname(__FILE__) . '/../public/fonts' => public_path('fonts'),
            dirname(__FILE__) . '/../public/css' => public_path('css'),
            dirname(__FILE__) . '/../public/js'  => public_path('js'),
        ], 'assets');
    }

}
