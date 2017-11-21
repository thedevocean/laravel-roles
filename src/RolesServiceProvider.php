<?php

namespace Devocean\Roles;

use Illuminate\Support\ServiceProvider;

class RolesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->loadRoutesFrom(__DIR__.'/routes.php');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');

      // PUBLISHES
        $this->publishes([
          __DIR__.'/../config/do-roles.php' => config_path('do-roles.php'),
        ], 'config');

        $this->publishes([
          __DIR__ . '/../migrations' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
