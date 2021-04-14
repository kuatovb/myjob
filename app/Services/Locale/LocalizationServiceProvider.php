<?php

namespace App\Services\Locale;


use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind("Localization", 'App\Services\Locale\Localization');
    }
}