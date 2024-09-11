<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;


use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;


class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $tunisia = Country::where('country_code', 'TUNISIA')->withCount('employees')->first();
        $laravel = Department::where('name','laravel framework')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make($tunisia->name. 'Employees', $tunisia->employees_count),
            Card::make($laravel->name. 'Depatments', $laravel->employees_count),
            
            
        ];
    }
}
