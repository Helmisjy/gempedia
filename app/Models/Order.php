<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'whatsapp',
        'email',
        'status',
        'total_games',
        'total_size_gb',
        'recommended_package',
        'package_price',
    ];

    protected $casts = [
        'total_size_gb' => 'decimal:2',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormattedPackagePriceAttribute(): string
    {
        return 'Rp ' . number_format($this->package_price, 0, ',', '.');
    }
}
