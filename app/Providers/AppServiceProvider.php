<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route; // resourceVerbs
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // con esto traducimos los verbos de resource a nuestro idioma
        Route::resourceVerbs([
            'create'=>'crear',
            'edit'=>'editar',
        ]);
    }
}
