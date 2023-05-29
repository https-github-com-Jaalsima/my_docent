<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function call(): BelongsTo
    {
        return $this->BelongsTo(Call::class);
    }

    public function docents(): BelongsToMany
    {
        return $this->belongsToMany(Docent::class);
    }


    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }
}
