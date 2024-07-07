<?php

namespace App\Filament\Resources\WarnaResource\Pages;

use App\Filament\Resources\WarnaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarna extends EditRecord
{
    protected static string $resource = WarnaResource::class;
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
