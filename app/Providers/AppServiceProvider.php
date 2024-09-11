<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\EmployeeResource\Widgets\EmployeeStatsOverview;

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
        Filament::registerWidgets([
            EmployeeStatsOverview::class,
        ]);
    }
}
