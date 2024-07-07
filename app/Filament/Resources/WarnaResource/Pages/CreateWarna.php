<?php

namespace App\Filament\Resources\WarnaResource\Pages;

use App\Filament\Resources\WarnaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWarna extends CreateRecord
{
    protected static string $resource = WarnaResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
