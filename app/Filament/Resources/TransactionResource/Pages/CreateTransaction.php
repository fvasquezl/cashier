<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Auth;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

if (!function_exists('transaction_number')) {
    function transaction_number()
    {
        // Generate a unique transaction number, e.g. using current timestamp and random number
        return 'TXN-' . time() . '-' . mt_rand(1000, 9999);
    }
}

class CreateTransaction extends CreateRecord
{
    protected static string $resource = TransactionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;
        $data['number'] = transaction_number();
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
