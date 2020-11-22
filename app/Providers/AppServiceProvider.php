<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     * @return void
     */
    public function boot()
    {
        Blade::directive('cache', function ($model) {
            return "<?php if (! \App\RussianCache::start($model)) :  ?>";
        });

        Blade::directive('endcache', function () {
            return "<?php endif; echo \App\RussianCache::end(); ?>";
        });
    }
}
