<?php

namespace App\Models;

use App\Enums\Currency;
use App\Enums\Movement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
      protected $fillable = [
            'number',
            'movement',
            'currency',
            'amount',
            'guest_id',
            'details',
            'user_id',
      ];
      protected $casts = [
            'movement' => Movement::class,
            'currency' => Currency::class,
            "amount" => "decimal:2",
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
