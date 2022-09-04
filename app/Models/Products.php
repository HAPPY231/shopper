<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Products extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Images::class,'product_id');
    }

}
