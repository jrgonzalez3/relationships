<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    //
    use HasFactory;
    protected $guarded = [];

    //phone pertenec a un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }

    //phone tiene un sim
    public function sim(): HasOne
    {
        return $this->hasOne(Sim::class);
    }
    //phone tiene varios sim
    public function sims(): HasMany
    {
        return $this->HasMany(Sim::class);
    }
}
