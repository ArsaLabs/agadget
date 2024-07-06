<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipeResource\Pages;
use App\Filament\Resources\TipeResource\RelationManagers;
use App\Models\Tipe;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;

class TipeResource extends Resource
{
    protected static ?string $model = Tipe::class;
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Data Tipe';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $title = 'Data Tipe';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Tipe')
                ->description('Input Data Tipe Handphone & Laptop')
                ->schema([
                    Select::make('vendor_id')
                    ->relationship('vendor', 'name')
                    ->required(),
                    TextInput::make('tipe')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('alias')
                        ->required()
                        ->maxLength(255),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vendor.name'),
                TextColumn::make('tipe'),
                TextColumn::make('alias'),
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
            'index' => Pages\ListTipes::route('/'),
            'create' => Pages\CreateTipe::route('/create'),
            'edit' => Pages\EditTipe::route('/{record}/edit'),
        ];
    }
}
