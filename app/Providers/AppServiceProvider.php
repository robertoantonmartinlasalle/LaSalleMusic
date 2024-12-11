<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator; // Importar la clase Paginator
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap(); // Habilitar estilos de Bootstrap para añadir la paginación personalizada
    }
}
