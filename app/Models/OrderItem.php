<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'game_platform_id',
        'title',
        'platform_name',
        'size_gb',
    ];

    protected $casts = [
        'size_gb' => 'decimal:2',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function gamePlatform(): BelongsTo
    {
        return $this->belongsTo(GamePlatform::class);
    }
}
