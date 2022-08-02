<?php

namespace Database\Seeders;

use App\Models\Regulation;
use App\Models\RegulationsCategory;
use Illuminate\Database\Seeder;

class RegulationsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = [
      'Конституция Республики Таджикистана',
      'Международно-правовые акты',
      'Конституционные законы Республики Таджикистан',
    ];

    foreach ($categories as $category) {
      RegulationsCategory::create([
        'locale' => 'ru',
        'title' => $category,
      ]);
    }

    foreach (range(1, 3) as $key) {
      Regulation::create([
        'locale' => 'ru',
        'category_id' => $key,
        'title' => 'Всеобщая декларация прав человека',
        'filename' => 'regulation.docx',
      ]);
    }
  }
}
