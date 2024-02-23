<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;



class GeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('site_active')->columnSpan(2),
                TextInput::make('site_name')
                    ->label('Site Name')
                    ->required(),
                Select::make('default_currency')
                    ->options([
                        'IDR' => 'Indonesia Rupiah',
                        'USD' => 'US Dollar'
                    ])
            ]);
    }
}
