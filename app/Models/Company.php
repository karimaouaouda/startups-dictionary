<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Company extends Model
{
    protected $fillable = [
        'name', 'email', 'description', 'logo', 'website',
    ];

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'employee_company');
    }

    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'company_tags');
    }
}
