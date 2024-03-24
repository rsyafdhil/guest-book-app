<?php

namespace App\Filament\Resources\RoomResource\Pages;

use App\Filament\Resources\RoomResource;
use App\Filament\Resources\RoomResource\Widgets\OpenWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRooms extends ListRecords
{
    protected static string $resource = RoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OpenWidget::class
        ];
    }
}
