<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    protected $table = 'users';
    protected $hidden = ['created_at', 'updated_at'];
    use HasFactory;

    public function teams(): BelongsTo
    {
      return $this->belongsTo(Team::class);
    }
}
