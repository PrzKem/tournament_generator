<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
  protected $table = 'teams';
  protected $hidden = ['created_at', 'updated_at'];
  use HasFactory;

  public function user(): HasMany
  {
    return $this->hasMany(User::class);
  }

  public function tournamet(): BelongsTo
  {
    return $this->hasMany(Tournament::class);
  }

  public function history(): BelongsTo
  {
    return $this->hasMany(TournamentHistory::class);
  }
}
