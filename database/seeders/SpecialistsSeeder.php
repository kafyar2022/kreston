<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;

class SpecialistsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 8) as $key) {
      Specialist::create([
        'locale' => 'ru',
        'name' => 'Шеров Диловар',
        'slug' => SlugService::createSlug(Specialist::class, 'slug', 'Шеров Диловар'),
        'position' => 'Партнер по аудиту',
        'avatar' => 'avatar.jpg',
        'cv' => 'cv.pdf',
      ]);
    }
  }
}
