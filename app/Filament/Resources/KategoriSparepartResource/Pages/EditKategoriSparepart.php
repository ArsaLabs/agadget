<?php

namespace App\Filament\Resources\KategoriSparepartResource\Pages;

use App\Filament\Resources\KategoriSparepartResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriSparepart extends EditRecord
{
    protected static string $resource = KategoriSparepartResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
