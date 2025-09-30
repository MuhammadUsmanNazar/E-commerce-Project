<?php

namespace App\Providers;

use App\Models\Category;
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
        // Share categories with all views for header dropdown
        View::composer('*', function ($view) {
            $categories = Category::with('subCategories', 'brands')->get();
            $view->with([
                'categories' => $categories,
            ]);
        });
    }
}
