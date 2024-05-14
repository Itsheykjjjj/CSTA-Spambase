<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class Designation extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'dept_id',
    ];

    public function department(): BelongsTo {
        return $this->belongsTo(Department::class, 'dept_id');
    }

    public function property(): BelongsTo {
        return $this->belongsTo(Property::class);
    }
}
