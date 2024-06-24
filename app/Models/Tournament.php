<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
  protected $table = 'tournaments';
  protected $hidden = ['created_at', 'updated_at'];
  use HasFactory;

  public function team(): HasMany
  {
    return $this->hasMany(Team::class);
  }
}
