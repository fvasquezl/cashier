<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
      protected $fillable = [
            'account_number',
            'client_id',
            'balance',
            'currency',
            'user_id',
      ];

      public function client()
      {
            return $this->belongsTo(Client::class);
      }
      public function user()
      {
            return $this->belongsTo(User::class);
      }
}
