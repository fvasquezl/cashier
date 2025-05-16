<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'entry_date',
        'contact_phone',
        'extra_info',
    ];
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
