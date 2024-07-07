<?php

namespace App\Filament\Resources\YesResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class JuatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('User', User::count()),
        ];
    }
}
