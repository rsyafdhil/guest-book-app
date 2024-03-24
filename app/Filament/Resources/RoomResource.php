<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Filament\Resources\RoomResource\Widgets\OpenWidget;
use App\Models\Room;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

    protected static ?string $navigationGroup = 'Rooms Management';

    protected static ?string $navigationLabel = 'Rooms Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Ketersediaan Ruangan')
                    ->description('Silahkan isi form berikut untuk mengatur ketersediaan ruangan.')
                    ->schema([
                        TimePicker::make('available_start')->label('Ruangan dibuka (WIB)')->required(),
                        TimePicker::make('available_end')->label('Ruangan ditutup (WIB)')->required(),
                    ]),
                Section::make('Buat Ruangan')
                    ->description('Silahkan isi form berikut untuk membuat ruangan baru.')
                    ->schema([
                        TextInput::make('nama')->label('Nama Ruangan')->required(),
                        Textarea::make('deskripsi')->label('Deskripsi Ruangan')->required(),
                        FileUpload::make('gambar')->label('Thumbnail'),
                        TextInput::make('kuota')->label('Kuota Ruangan')->required()->integer(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama Ruangan'),
                TextColumn::make('deskripsi')->label('Deskripsi Ruangan'),
                TextColumn::make('available_start')->label('Ruangan dibuka (WIB)'),
                TextColumn::make('available_end')->label('Ruangan ditutup (WIB)'),
                TextColumn::make('kuota')->label('Kuota Ruangan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make('view')->label('View Room')->icon('heroicon-o-eye'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            OpenWidget::class
        ];
    }
}
