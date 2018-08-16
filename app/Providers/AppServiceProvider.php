<?php

namespace App\Providers;

use App\City;
use App\Hotel;
use App\Monument;
use App\News;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer('*', function (View $view) {
            $view->with('cities', City::all(['id', 'name']));

            $view->with('fNews', News::latest()->limit(6)->get());
            $view->with('fMonuments', Monument::latest()->limit(6)->get());
            $view->with('fHotels', Hotel::latest()->limit(6)->get());
        });
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
