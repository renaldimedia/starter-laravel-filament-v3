<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Itungan');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.default_currency', 'IDR');
        
    }
};
