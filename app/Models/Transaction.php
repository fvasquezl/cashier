<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
      protected $fillable = [
            'number',
            'movement',
            'currency',
            'amount',
            'description',
            'guest_id',
            'user_id',
      ];


      public function guest(): BelongsTo
      {
            return $this->belongsTo(Guest::class);
      }
      public function user(): BelongsTo
      {
            return $this->belongsTo(User::class);
      }
}
