<?php

namespace App\Filament\Resources\FoodResource\Pages;

use App\Filament\Resources\FoodResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFood extends CreateRecord
{
    protected static string $resource = FoodResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Data makanan berhasil ditambahkan';
    }
}
