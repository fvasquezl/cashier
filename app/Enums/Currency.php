<?php
namespace App\Enums;

enum Currency: string
{
    case USD = 'USD';
    case PESO = 'PESO';

    public function label(): string
    {
        return match ($this) {
            self::USD => 'Dollar',
            self::PESO => 'Peso',
        };
    }
}