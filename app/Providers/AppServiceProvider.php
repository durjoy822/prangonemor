<?php

namespace App\Providers;

use App\Models\Drama;
use App\Models\Festival;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Spatie\FlareClient\View;
use App\Models\Workshop;

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
        view()->composer(['web.layout.master'], function ($view) {
            $view->with([
                'drama' => Drama::all(),
                'workshops' => Workshop::all(),
                'festivals' => Festival::all(),
            ]);
        });
      
    }
}