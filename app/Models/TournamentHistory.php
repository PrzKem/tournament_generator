<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentHistory extends Model
{
  protected $table = 'tournament_histories';
  protected $hidden = ['created_at', 'updated_at'];
  use HasFactory;

  public function team(): HasMany
  {
    return $this->hasMany(Team::class);
  }
}
