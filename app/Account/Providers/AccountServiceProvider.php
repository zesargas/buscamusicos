<?php

namespace app\Account\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    public function register(): void {}


    public function boot(): void
    {
        // Cargar migraciones
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        // Registrar vistas con namespace 'account'
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'account');

        // Registrar rutas web del módulo
        Route::middleware('web')
            ->group(__DIR__ . '/../routes.php');
    }
}
