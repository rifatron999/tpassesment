<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombinedData extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'code',
        'success',
        'extra',
        'data',
        'timestamp',
        'seller_id',
        'message_type',
        'site'

    ];

    public function getDataAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getAttributesWithoutNull()
    {
        return array_filter($this->attributes, function ($value) {
            return !is_null($value);
        });
    }
}
