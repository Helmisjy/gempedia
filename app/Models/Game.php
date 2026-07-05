<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover',
        'release_year',
        'publisher',
        'developer',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'game_genres');
    }

    public function gamePlatforms(): HasMany
    {
        return $this->hasMany(GamePlatform::class, 'game_id');
    }
}
