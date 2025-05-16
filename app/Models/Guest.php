<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name',
        'entry_date',
        'contact_phone',
        'extra_info',
    ];
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
