<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
      protected $fillable = [
            'number',
            'movement',
            'currency',
            'amount',
            'client_id',
            'user_id'
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
