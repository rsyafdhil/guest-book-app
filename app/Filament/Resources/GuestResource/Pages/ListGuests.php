<?php

namespace App\Filament\Resources\GuestResource\Pages;

use App\Filament\Resources\GuestResource;
use App\Filament\Resources\GuestResource\Widgets\StatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGuests extends ListRecords
{
    protected static string $resource = GuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }
}
