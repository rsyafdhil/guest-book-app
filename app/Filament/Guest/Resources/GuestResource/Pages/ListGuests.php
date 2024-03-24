<?php

namespace App\Filament\Guest\Resources\GuestResource\Pages;

use App\Filament\Guest\Resources\GuestResource;
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
}
