<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyType extends Model
{
    public $timestamps = false;

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }
}
