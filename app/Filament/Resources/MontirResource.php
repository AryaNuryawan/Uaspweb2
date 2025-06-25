<?php

namespace App\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms;
use Filament\Tables;
use App\Models\Montir;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
=======
use App\Filament\Resources\MontirResource\Pages;
use App\Filament\Resources\MontirResource\RelationManagers;
use App\Models\Montir;
use Filament\Forms;
use Filament\Forms\Form;
>>>>>>> cf5cd6037387e9c4aec7f53cfdd3a829e7bb81ec
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
<<<<<<< HEAD
use App\Filament\Resources\MontirResource\RelationManagers;
=======
>>>>>>> cf5cd6037387e9c4aec7f53cfdd3a829e7bb81ec

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
                TextInput::make('nomor')->required(),
                TextInput::make('nama')->required(),
                TextInput::make('gender')->required(),
                DatePicker::make('tgl_lahir')->required(),
                TextInput::make('tmp_lahir')->required(),
                TextInput::make('keahlian')->required(),
                Select::make('kategori_montir_id')
                    ->relationship('kategoriMontir', 'nama')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor'),
                TextColumn::make('nama'),
                TextColumn::make('nomor')->sortable()->searchable(),
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('gender'),
                TextColumn::make('tgl_lahir'),
                TextColumn::make('tmp_lahir'),
                TextColumn::make('keahlian'),
                TextColumn::make('kategoriMontir.nama'),
           
                TextColumn::make('kategoriMontir.nama')->label('Kategori'),
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
