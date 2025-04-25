<?php

namespace App\Enums\Foods;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;


enum Category: string implements HasLabel, HasColor
{
    case SARAPAN = 'sarapan';
    case MAKAN_SIANG = 'makan-siang';
    case MAKAN_MALAM = 'makan-malam';
    case CAMILAN = 'camilan';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::SARAPAN => 'Sarapan',
            self::MAKAN_SIANG => 'Makan Siang',
            self::MAKAN_MALAM => 'Makan Malam',
            self::CAMILAN => 'Camilan',
        };
    }

    public function getColor(): string | array | null
    {
        return match($this){
            self::SARAPAN => 'gray',
            self::MAKAN_SIANG => 'success',
            self::MAKAN_MALAM => 'danger',
            self::CAMILAN => 'warning',
        };
    }
}
