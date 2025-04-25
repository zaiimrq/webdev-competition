<?php

namespace App\Filament\Resources\FoodResource\Pages;

use App\Filament\Resources\FoodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFood extends EditRecord
{
    protected static string $resource = FoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus')
                ->icon('heroicon-m-trash')
                ->requiresConfirmation()
                ->modalHeading('Hapus Makanan')
                ->modalDescription('Apakah Anda yakin ingin menghapus makanan ini? Tindakan ini tidak dapat dibatalkan.')
                ->modalSubmitActionLabel('Ya, Hapus')
                ->modalCancelActionLabel('Batal'),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Data makanan berhasil diperbarui';
    }

    protected function getDeletedNotificationTitle(): ?string
    {
        return 'Data makanan berhasil dihapus';
    }
}
