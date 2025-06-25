<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MontirResource\Pages;
use App\Models\Montir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MontirResource extends Resource
{
    protected static ?string $model = Montir::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nomor')->required(),
                TextInput::make('nama')->required(),
                FileUpload::make('foto')->label('Foto Kendaraan')->image()->imagePreviewHeight('200')->directory('fotos')->required(),
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
                TextColumn::make('nomor')->sortable()->searchable(),
                TextColumn::make('nama')->sortable()->searchable(),
                ImageColumn::make('foto')->label('Foto')->disk('public')->height(60)->circular(),
                TextColumn::make('gender'),
                TextColumn::make('tgl_lahir'),
                TextColumn::make('tmp_lahir'),
                TextColumn::make('keahlian'),
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
