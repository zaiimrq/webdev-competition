<?php

namespace App\Filament\Resources\AnswerResource\Pages;

use App\Filament\Resources\AnswerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnswer extends CreateRecord
{
    protected static string $resource = AnswerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Jawaban berhasil ditambahkan';
    }
}
