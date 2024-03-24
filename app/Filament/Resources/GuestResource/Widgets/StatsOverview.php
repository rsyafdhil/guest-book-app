<?php

namespace App\Filament\Resources\GuestResource\Widgets;

use App\Models\Guest;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $guestCount = Guest::selectRaw('count(*) as count')->first();
        return [
            Stat::make('Guests', $guestCount->count, 'heroicon-o-user-group', 'primary')
        ];
    }

    protected function getWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }

    protected function getCards(): array
    {
        return [
            $guestCount = Guest::selectRaw('count(*) as count')->first(),
        ];

        return [
            Stat::make('Guests', $guestCount->count, 'heroicon-o-user-group', 'primary'),
        ];
    }
}
