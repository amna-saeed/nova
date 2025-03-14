<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
use App\Models\Seo;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Sharing SEO data with all views
        View::composer('*', function ($view) {
            $seo = Seo::where('url', Request::fullUrl())->first();
            $view->with('seo', $seo);
        });
    }
}
