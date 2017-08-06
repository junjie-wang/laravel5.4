<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

//        \DB::listen(function($query) {
//            $sql = $query->sql;
//            $bindings = $query->bindings;
//            $time = $query->time;
//
//            if ($time > 10) {
//                \Log::debug(var_export(compact('sql', 'bindings', 'time'), true));
//            }
//        });
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
