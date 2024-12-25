<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Certification;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Language;
use App\Models\NotificationToUsers;
use App\Models\Order;
use App\Models\Cart;

use Auth;


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
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view)
        {
            //...with this variable
            $view->with([
                'setting' => Setting::query()->first(),
                'locales'=> Language::all(),
                'admin'=>Admin::first(),
            ]);
        });
    }
}
