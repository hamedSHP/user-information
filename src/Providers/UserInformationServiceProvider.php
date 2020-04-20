<?php


namespace Parax\User\Information\Providers;


use Illuminate\Support\ServiceProvider;

class UserInformationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->publishes([
            __DIR__.'/../Migrations/' => database_path('/migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('/config')
        ], 'parax');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'information');
    }
}
