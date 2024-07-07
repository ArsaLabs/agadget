<?php

namespace App\Filament\Resources\KategoriPelangganResource\Pages;

use App\Filament\Resources\KategoriPelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPelanggan extends EditRecord
{
    protected static string $resource = KategoriPelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
