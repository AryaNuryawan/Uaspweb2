<?php

namespace App\Filament\Resources;


<<<<<<< HEAD
use App\Filament\Resources\DetailLayananResource\Pages;
use App\Filament\Resources\DetailLayananResource\RelationManagers;
use App\Models\DetailLayanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select; //penambahan
use Filament\Forms\Components\TextInput; //penambahan
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
=======
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DetailLayanan;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Forms\Components\Select; //penambahan
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput; //penambahan
use App\Filament\Resources\DetailLayananResource\Pages;
use App\Filament\Resources\DetailLayananResource\RelationManagers;
>>>>>>> 384d341562436aeaf66d42acbb842eac06e43440

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
<<<<<<< HEAD
                //
=======
                TextColumn::make('pekerjaan'),
                TextColumn::make('biaya'),
                TextColumn::make('layanan_id'),
                TextColumn::make('pj_montir_id'),
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
            'index' => Pages\ListDetailLayanans::route('/'),
            'create' => Pages\CreateDetailLayanan::route('/create'),
            'edit' => Pages\EditDetailLayanan::route('/{record}/edit'),
        ];
    }
}
