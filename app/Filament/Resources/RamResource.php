<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RamResource\Pages;
use App\Filament\Resources\RamResource\RelationManagers;
use App\Models\Ram;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;

class RamResource extends Resource
{
    protected static ?string $model = Ram::class;
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Data RAM';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $title = 'Data RAM';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('size')
                    ->required()
                    ->maxLength(255),
                Select::make('lpddr')
                    ->required()
                    ->options([
                        'DDR3' => 'DDR3',
                        'DDR4' => 'DDR4',
                        'DDR5' => 'DDR5',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('size'),
                TextColumn::make('lpddr'),
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
            'index' => Pages\ListRams::route('/'),
            'create' => Pages\CreateRam::route('/create'),
            'edit' => Pages\EditRam::route('/{record}/edit'),
        ];
    }
}
