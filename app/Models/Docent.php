<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Docent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function offers(): BelongsToMany
    {
        return $this->belongsToMany(Offer::class);
    }

    public function specialties(): BelongsToMany
    {
        return $this->belongsToMany(Specialty::class);
    }
}
