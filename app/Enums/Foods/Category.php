<?php

namespace App\Enums\Foods;


enum Category: string
{
    case SARAPAN = 'sarapan';
    case MAKAN_SIANG = 'makan-siang';
    case MAKAN_MALAM = 'makan-malam';
    case CAMILAN = 'camilan';
}
