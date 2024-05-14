<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(string[] $array)
 */
class Priority extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function property(): BelongsTo {
        return $this->belongsTo(Property::class);
    }
}
