<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function country(): BelongsTo
    {
        return $this->BelongsTo(Country::class);
    }

    public function cities(): HasMany
    {
        return $this->HasMany(City::class);
    }
}