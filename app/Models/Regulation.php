<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function category()
  {
    return $this->belongsTo(RegulationsCategory::class, 'category_id');
  }
}
