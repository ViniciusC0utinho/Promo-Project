<?php

declare(strict_types=1);

namespace App\Providers;

use App\Filament\FilamentConfig;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureModel();

        (new FilamentConfig)
            ->configureColors()
            ->configureFields();
    }

    /**
     * Configure eloquent model.
     */
    private function configureModel(): void
    {
        Model::unguard();
        Model::shouldBeStrict();
    }
}
