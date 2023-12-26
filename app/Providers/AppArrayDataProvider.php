<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppArrayDataProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        require_once app_path() . '/Helpers/AppArrayData.php';

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
