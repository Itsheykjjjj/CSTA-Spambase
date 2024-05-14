<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model {
    use HasFactory;

    protected $fillable = [
        'dept_code',
        'name',
    ];

    public function designations(): HasMany {
        return $this->hasMany(Designation::class, 'dept_id');
    }

    public function property(): BelongsTo {
        return $this->belongsTo(Property::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
