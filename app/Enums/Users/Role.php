<?php

namespace App\Enums\Users;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum Role: string implements HasLabel, HasColor
{
    case ADMIN = 'admin';
    case USER = 'user';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::USER => 'User'
        };
    }

    public function getColor(): string | array | null
    {
        return match($this){
            self::ADMIN => 'success',
            self::USER => 'warning'
        };
    }
}
