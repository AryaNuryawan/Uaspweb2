<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Montir;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MontirResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MontirResource\RelationManagers;

class MontirResource extends Resource
{
    protected static ?string $model = Montir::class;
    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nomor'),
                TextInput::make('nama'),
                TextInput::make('gender'),
                DatePicker::make('tgl_lahir'),
                TextInput::make('tmp_lahir'),
                TextInput::make('keahlian'),
                Select::make('kategori_montir_id')
                ->relationship('kategoriMontir', 'nama')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor'),
                TextColumn::make('nama'),
                TextColumn::make('gender'),
                TextColumn::make('tgl_lahir'),
                TextColumn::make('tmp_lahir'),
                TextColumn::make('keahlian'),
                TextColumn::make('kategoriMontir.nama'),
           
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
            'index' => Pages\ListMontirs::route('/'),
            'create' => Pages\CreateMontir::route('/create'),
            'edit' => Pages\EditMontir::route('/{record}/edit'),
        ];
    }
}
