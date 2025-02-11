<?php

namespace App\Filament\Resources\ProductTypeResource\Pages;

use App\Filament\Resources\ProductTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageProductTypes extends ManageRecords
{
    protected static string $resource = ProductTypeResource::class;

    protected static ?string $title = 'Типы товаров';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
