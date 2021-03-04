<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting;

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
        config([
            'settings' => Setting::all([
                'name','value'
            ])->keyBy('name')
            ->transform(function ($setting) {
                $isJson = is_string($setting->value) && is_array(json_decode(json_decode($setting->value, true), true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
                if($isJson)
                    $value = json_decode(json_decode($setting->value, true), true); // return only the value
                else $value = $setting->value;
                return $value;
            })->toArray() // make it an array
        ]);
    }
}
