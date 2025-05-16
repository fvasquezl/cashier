<?php
namespace App\Enums;

enum Movement: string
{
    case CHARGE = 'Charge';
    case PAYMENT = 'Payment';

    public function label(): string
    {
        return match ($this) {
            self::CHARGE => 'Charge',
            self::PAYMENT => 'Payment',
        };
    }
}
