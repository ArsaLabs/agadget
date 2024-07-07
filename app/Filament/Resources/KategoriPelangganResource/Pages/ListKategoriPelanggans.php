<?php

namespace App\Filament\Resources\KategoriPelangganResource\Pages;

use App\Filament\Resources\KategoriPelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriPelanggans extends ListRecords
{
    protected static string $resource = KategoriPelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
