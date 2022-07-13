<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $partners = [
      [
        'title' => 'Tcell',
        'logo' => 'tcell.png',
        'url' => '#',
      ],
      [
        'title' => 'Кока Кола',
        'logo' => 'coca-cola.png',
        'url' => '#',
      ],
      [
        'title' => 'Финджа',
        'logo' => 'finca.png',
        'url' => '#',
      ],
      [
        'title' => 'Таджик эйр',
        'logo' => 'tajik-air.png',
        'url' => '#',
      ],
      [
        'title' => 'Tcell',
        'logo' => 'tcell.png',
        'url' => '#',
      ],
      [
        'title' => 'Кока Кола',
        'logo' => 'coca-cola.png',
        'url' => '#',
      ],
      [
        'title' => 'Финджа',
        'logo' => 'finca.png',
        'url' => '#',
      ],
      [
        'title' => 'Таджик эйр',
        'logo' => 'tajik-air.png',
        'url' => '#',
      ],
      [
        'title' => 'Tcell',
        'logo' => 'tcell.png',
        'url' => '#',
      ],
      [
        'title' => 'Кока Кола',
        'logo' => 'coca-cola.png',
        'url' => '#',
      ],
      [
        'title' => 'Финджа',
        'logo' => 'finca.png',
        'url' => '#',
      ],
      [
        'title' => 'Таджик эйр',
        'logo' => 'tajik-air.png',
        'url' => '#',
      ],
    ];

    foreach ($partners as $partner) {
      Partner::create([
        'locale' => 'ru',
        'title' => $partner['title'],
        'logo' => $partner['logo'],
        'url' => $partner['url'],
      ]);

      Partner::create([
        'locale' => 'en',
        'title' => $partner['title'],
        'logo' => $partner['logo'],
        'url' => $partner['url'],
      ]);
    }
  }
}
