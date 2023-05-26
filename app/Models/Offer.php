<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function call(): BelongsTo
    {
        return $this->BelongsTo(Call::class);
    }


    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }
}