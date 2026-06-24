<?php

namespace App\Providers;

use App\View\Composers\ComercialComposer;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        // Directiva para formatear moneda
        Blade::directive('moneda', function ($expression) {
            return "<?php echo App\Helpers\FormatoHelper::moneda($expression); ?>";
        });

        // Directiva para formatear número
        Blade::directive('numero', function ($expression) {
            return "<?php echo App\Helpers\FormatoHelper::numero($expression); ?>";
        });

        View::composer('layouts.master', ComercialComposer::class);
        View::composer('layouts.partials.topbar', ComercialComposer::class);

        Schema::defaultStringLength(191);
    }
}
