<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\FrontendComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $categories = Category::pluck('title', 'slug')->toArray();

        // View::share('categories', $categories);

        View::composer('components.partials.navbar', FrontendComposer::class);
    }
}
