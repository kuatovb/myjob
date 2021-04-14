<?php

namespace App\Services\Locale;


use Illuminate\Support\Facades\App;

class Localization
{
    public function locale()
    {
        $locale = request()->segment(1, '');

        if ($locale && in_array($locale, config("app.locales"))) {
            // \dd($locale);
            return $locale;
        }

        return "";
    }
}