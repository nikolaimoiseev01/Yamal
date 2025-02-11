<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'product_type_id',
        'name',
        'packaging',
        'weight',
        'gost',
        'compound',
        'description',
        'worth',
        'date_manufactured',
        'expiration'
    ];

    public function product_type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }
}
