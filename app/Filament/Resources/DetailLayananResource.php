<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\DetailLayanan;
use App\Filament\Resources\DetailLayananResource\Pages;
use App\Filament\Resources\DetailLayananResource\RelationManagers;

class DetailLayananResource extends Resource
{
    protected static ?string $model = DetailLayanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pekerjaan')->required(),

                TextInput::make('biaya')
                    ->numeric()
                    ->required(),

                Select::make('layanan_id')
                    ->relationship('layanan', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('pj_montir_id')
                    ->relationship('pjMontir', 'nama')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pekerjaan'),
                TextColumn::make('biaya'),
                TextColumn::make('layanan_id'),
                TextColumn::make('pj_montir_id'),
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
            'index' => Pages\ListDetailLayanans::route('/'),
            'create' => Pages\CreateDetailLayanan::route('/create'),
            'edit' => Pages\EditDetailLayanan::route('/{record}/edit'),
        ];
    }
}
