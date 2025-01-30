<?php

declare(strict_types=1);

use App\Filament\FilamentConfig;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

test('it disables autocomplete in text input field', function (): void {
    (new FilamentConfig)->configureFields();

    $textInput = TextInput::make('test');

    $this->assertSame('off', $textInput->getAutocomplete());
});

test('it disables native select component in select field', function (): void {
    (new FilamentConfig)->configureFields();

    $select = Select::make('test');

    $this->assertFalse($select->isNative());
});
