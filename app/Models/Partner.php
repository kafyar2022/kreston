<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  use HasFactory, Sluggable;

  public function sluggable()
  {
    return [
      'logo' => [
        'source' => 'title'
      ]
    ];
  }
}
