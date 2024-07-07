<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriPelangganResource\Pages;
use App\Filament\Resources\KategoriPelangganResource\RelationManagers;
use App\Models\KategoriPelanggan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class KategoriPelangganResource extends Resource
{
    protected static ?string $model = KategoriPelanggan::class;
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Kategori Pelanggan';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('jenismember')
                ->required()
                ->label('Jenis Member')
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenismember')->label('Jenis Member'),
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
            'index' => Pages\ListKategoriPelanggans::route('/'),
            'create' => Pages\CreateKategoriPelanggan::route('/create'),
            'edit' => Pages\EditKategoriPelanggan::route('/{record}/edit'),
        ];
    }
}
