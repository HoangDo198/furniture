<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Supports\LoadHelpers;
use App\Views\Backend\Components\BreadCrumbs;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Load Helper function
         */
        LoadHelpers::loadModuleHelper(__DIR__);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'app_config/config');
        $this->loadViewComponentsAs('app-components', [BreadCrumbs::class]);
    }
}
