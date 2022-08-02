<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulationsCategory extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function regulations()
  {
    return $this->hasMany(Regulation::class, 'category_id');
  }
}
