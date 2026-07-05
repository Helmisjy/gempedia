<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GamePlatform extends Model
{
    protected $fillable = [
        'game_id',
        'platform_id',
        'game_code',
        'size_gb',
        'version',
        'is_active',
    ];

    protected $casts = [
        'size_gb' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }
}
