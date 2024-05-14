<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model {
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function permissions(): BelongsToMany {
        return $this->belongsToMany(Permission::class, 'role_permissions', 'role_id', 'perm_id');
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
