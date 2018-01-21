<?php

namespace App\Providers;
use View;

use Illuminate\Support\ServiceProvider;

use App\HomePage;
use App\HomeSEO;
use App\HomeMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('HomePageData', HomePage::all());
        View::share('HomeMenuData', HomeMenu::all());
        View::share('SeoData', HomeSEO::all());
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
