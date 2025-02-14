<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    protected $fillable = [
        'addressable_id','addressable_type','country', 'city', 'postal_code', 'street_line'
    ];

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }
}
