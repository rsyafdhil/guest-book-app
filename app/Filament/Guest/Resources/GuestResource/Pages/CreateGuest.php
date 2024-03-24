<?php

namespace App\Filament\Guest\Resources\GuestResource\Pages;

use App\Filament\Guest\Resources\GuestResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGuest extends CreateRecord
{
    protected static string $resource = GuestResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
