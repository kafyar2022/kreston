<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $contents = [
      [
        'slug' => 'main-about',
        'page' => 'home',
        'content' => '<h2>O Kreston AC</h2><p>KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'main-our-experience',
        'page' => 'home',
        'content' => '<h2>Наш опыт</h2><p>За годы работы KRESTON АС приобрела успешный опыт сотрудничества с различными компаниями и организациями и на сегодняшний день занимает прочные позиции на рынке, реализуя всевозможные проекты.</p><a href="#">Подробнее</a>',
      ],
    ];

    foreach ($contents as $content) {
      Content::create([
        'locale' => 'ru',
        'slug' => $content['slug'] . '-ru',
        'page' => $content['page'],
        'content' => $content['content'],
      ]);

      Content::create([
        'locale' => 'en',
        'slug' => $content['slug'] . '-en',
        'page' => $content['page'],
        'content' => $content['content'],
      ]);
    }
  }
}
