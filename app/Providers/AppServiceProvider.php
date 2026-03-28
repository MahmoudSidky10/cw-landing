<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
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
    public function boot(): void
    {
        View::composer('web.*', function ($view) {
            $siteSettings = SiteSetting::instance();
            $view->with('siteLogo', $siteSettings->resolvedLogoUrl());
            $view->with('siteLogoDark', $siteSettings->resolvedLogoDarkUrl());
            $view->with('siteLogoLight', $siteSettings->resolvedLogoLightUrl());
        });
    }
}
