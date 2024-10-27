<?php

namespace App\Filament\Resources\PastaResource\Pages;

use App\Filament\Resources\PastaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPastas extends ListRecords
{
    protected static string $resource = PastaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
