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
            'guest_id',
            'user_id'
      ];

      public function guest()
      {
            return $this->belongsTo(Guest::class);
      }
      public function user()
      {
            return $this->belongsTo(User::class);
      }
}
