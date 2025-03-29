<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sim extends Model
{
    //

    protected $guarded = [];

    //pertenece a
    public function phone(): BelongsTo
    {
        return $this->belongsTo(Phone::class);
    }
}
