<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\TextInput; // baru
use App\Filament\Resources\KategoriMontirResource\Pages;
use App\Filament\Resources\KategoriMontirResource\RelationManagers;
use App\Models\KategoriMontir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriMontirResource extends Resource
{
    protected static ?string $model = KategoriMontir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKategoriMontirs::route('/'),
            'create' => Pages\CreateKategoriMontir::route('/create'),
            'edit' => Pages\EditKategoriMontir::route('/{record}/edit'),
        ];
    }
}
