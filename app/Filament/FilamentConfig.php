<?php

declare(strict_types=1);

namespace App\Filament;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;

class FilamentConfig
{
    /**
     * Configure the global form fields
     */
    public function configureFields(): static
    {
        TextInput::configureUsing(function (TextInput $textInput): void {
            $textInput->autocomplete(false);
        });

        Select::configureUsing(function (Select $select): void {
            $select->native(false);
        });

        return $this;
    }

    /**
     * Configure the global colors
     */
    public function configureColors(): static
    {
        FilamentColor::register([
            'primary' => Color::Rose,
        ]);

        return $this;
    }
}
