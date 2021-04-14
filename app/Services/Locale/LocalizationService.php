<?php

namespace App\Services\Locale;

use Illuminate\Support\Facades\Facade;

class LocalizationService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "Localization";
    }
}