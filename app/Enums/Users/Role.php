<?php

namespace App\Enums\Users;

use Filament\Support\Contracts\HasLabel;

enum Role: string implements HasLabel
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
}
