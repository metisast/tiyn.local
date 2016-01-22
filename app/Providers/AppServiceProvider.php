<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*Localization variable*/
        view()->composer('*', function($view){
            $view->with('lang', LaravelLocalization::getCurrentLocale());
        });

        /*Admin main menu list*/
        view()->composer(
            'admin/template/side-bar/menu-left', 'App\Http\Composers\AdminMainMenuListComposer'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
