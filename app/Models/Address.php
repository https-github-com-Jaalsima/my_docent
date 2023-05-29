<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function city(): BelongsTo
    {
        return $this->BelongsTo(City::class);
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
