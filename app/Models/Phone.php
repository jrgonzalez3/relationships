<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
