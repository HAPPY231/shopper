<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'basket';

    public $timestamps = true;

    protected $fillable = [
        'seller_id',
        'buyer_id',
        'item_id',
        'amount',
        'value',
        'created_at',
        'updated_at'
    ];

}
