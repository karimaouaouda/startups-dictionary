<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    use HasImage;
    protected $fillable = [
        'name', 'email', 'phone', 'profile_picture'
    ];


    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'company_employee');
    }
}
