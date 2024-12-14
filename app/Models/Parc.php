<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parc extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'typeparc_id',
    ];

    public function typeparc(): BelongsTo
    {
        return $this->belongsTo(Typeparc::class);
    }
}