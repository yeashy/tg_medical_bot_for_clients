<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'type_name'
    ];

    // RELATIONS

    public function type(): BelongsTo
    {
        return $this->belongsTo(CompanyType::class);
    }

    public function design(): HasOne
    {
        return $this->hasOne(CompanyDesignInfo::class);
    }

    public function info(): HasOne
    {
        return $this->hasOne(CompanyDescribingInfo::class);
    }

    // ACCESSORS
    public function getTypeNameAttribute()
    {
        return $this->type->name;
    }
}
