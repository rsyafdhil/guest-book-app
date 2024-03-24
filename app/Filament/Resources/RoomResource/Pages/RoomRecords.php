<?php

namespace App\Filament\Resources\RoomResource\Pages;

use App\Filament\Resources\RoomResource;
use App\Models\Room;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RoomRecords extends ViewRecord
{
    protected static ?string $model = Room::class;

    protected static string $resource = RoomResource::class;

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('guest.nama')->label('Nama'),
            ]);
    }
}
