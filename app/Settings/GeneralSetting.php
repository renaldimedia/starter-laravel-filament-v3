<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{

    public string $site_name;
    public bool $site_active;
    public string $default_currency;

    public static function group(): string
    {
        return 'general';
    }
}