<?php

namespace App\Filament\Resources\TipeResource\Pages;

use App\Filament\Resources\TipeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTipe extends CreateRecord
{
    protected static string $resource = TipeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
