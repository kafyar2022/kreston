<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1,3) as $key) {
      Banner::create([
        'locale' => 'ru',
        'img' => 'banner.jpg',
        'content' => '<h3>Kreston AC LLC</h3><p>Предлагает налоговые, финансовые, деловые и юридические консультации</p><a href="#">Подробнее</a>',
      ]);
    }
  }
}
