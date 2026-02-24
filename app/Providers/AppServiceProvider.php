<?php

namespace App\Providers;

use App\Observers\CategoryObserver;
use Illuminate\Support\ServiceProvider;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\View;


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

        view::composer(['client.*'], function($view){
            // همه والدها
            $categories=Category::whereNull('category_id')
            // زیر مجموعه ها رو هم لود میکنه
            ->with('children')->get();
            $view->with('categories', $categories);
        });


        Category::observe(CategoryObserver::class);
    }
}
