<?php

namespace App\Filament\Resources;

<<<<<<< HEAD
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
=======
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KategoriMontir;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput; // baru
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriMontirResource\Pages;
use App\Filament\Resources\KategoriMontirResource\RelationManagers;
>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440

class KategoriMontirResource extends Resource
{
    protected static ?string $model = KategoriMontir::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

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
<<<<<<< HEAD
                //
=======
                 TextColumn::make('nama')
>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440
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
