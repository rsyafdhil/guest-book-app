<?php

namespace App\Filament\Guest\Resources;

use App\Filament\Guest\Resources\GuestResource\Pages;
use App\Models\Guest;
use App\Models\Room;
use App\Models\TimeSelector;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Collection;

class GuestResource extends Resource
{
    protected static ?string $model = Guest::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Guest Information')
                    ->schema([
                        Select::make('room_id')
                            ->relationship(name: 'room', titleAttribute: 'nama')
                            ->preload()
                            ->live()
                            ->native(false)
                            ->label('Ruangan')
                            ->required(),
                        TextInput::make('nama')->label('Nama')->required(),
                        TextInput::make('nomor_telp')->label('Nomor Telepon')->required(),
                        Textarea::make('keperluan')->label('Keperluan')->required(),
                    ]),
                Section::make('Waktu dan Tanggal')
                    ->schema([
                        Select::make('selection_id')
                            ->options(
                                fn (Get $get): Collection => TimeSelector::get()
                                    ->where('room_id', $get('room_id'))
                                    ->pluck('waktu_tersedia', 'id')

                            )
                            ->label('Waktu Tersedia')
                            ->native(false),
                        DatePicker::make('tanggal_tamu')
                            ->label('Tanggal')
                            ->native(false)
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGuests::route('/'),
            'create' => Pages\CreateGuest::route('/create'),
            'edit' => Pages\EditGuest::route('/{record}/edit'),
        ];
    }
}
