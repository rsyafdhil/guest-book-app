<?php

namespace App\Filament\Resources\RoomResource\Widgets;

use App\Models\Room;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OpenWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $startDate = $this->filters['available_start'] ?? null;
        $endDate = $this->filters['available_end'] ?? null;
        return [
            Stat::make(
                label: 'Ruangan Buka',
                value: Room::query()
                    ->when($startDate, fn ($query) => $query->where('available_start', '>=', $startDate))
                    ->when($endDate, fn ($query) => $query->where('available_end', '<=', $endDate))
                    ->count()
            ),
        ];
    }

    protected function getWidgets(): array
    {
        return [
            OpenWidget::class,
        ];
    }

    protected function getCards(): array
    {
        $startDate = $this->filters['available_start'] ?? null;
        $endDate = $this->filters['available_end'] ?? null;
        return [
            Stat::make(
                label: 'Ruangan Buka',
                value: Room::query()
                    ->when($startDate, fn ($query) => $query->where('available_start', '>=', $startDate))
                    ->when($endDate, fn ($query) => $query->where('available_end', '<=', $endDate))
                    ->count()
            ),
        ];
    }
}
