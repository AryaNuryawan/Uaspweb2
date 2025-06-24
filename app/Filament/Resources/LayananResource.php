<?php

namespace App\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\LayananResource\Pages;
use App\Filament\Resources\LayananResource\RelationManagers;
=======
use App\Filament\Resources\LayananResource\Pages;
>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode')
<<<<<<< HEAD
                ->label('Kode Layanan')
                ->required(),

            TextInput::make('nama')
                ->label('Nama Layanan')
                ->required(),
=======
                    ->label('Kode Layanan')
                    ->required(),

                TextInput::make('nama')
                    ->label('Nama Layanan')
                    ->required(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(3),

                TextInput::make('total_biaya')
                    ->label('Total Biaya')
                    ->numeric()
                    ->required(),

                TextInput::make('rating')
                    ->label('Rating')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(5)
                    ->step(0.1),
>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                //
=======
                TextColumn::make('kode')->label('Kode')->sortable()->searchable(),
                TextColumn::make('nama')->label('Nama')->sortable()->searchable(),
                TextColumn::make('deskripsi')->label('Deskripsi')->limit(30),
                TextColumn::make('total_biaya')->label('Total Biaya')->money('IDR', true),
                TextColumn::make('rating')->label('Rating')->sortable(),
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
            'index' => Pages\ListLayanans::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
