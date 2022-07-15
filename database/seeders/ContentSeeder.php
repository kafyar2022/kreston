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
        'slug' => 'main-page-about',
        'page' => 'main',
        'content' => '<h2>O Kreston AC</h2><p>KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'main-page-experience',
        'page' => 'main',
        'content' => '<h2>Наш опыт</h2><p>За годы работы KRESTON АС приобрела успешный опыт сотрудничества с различными компаниями и организациями и на сегодняшний день занимает прочные позиции на рынке, реализуя всевозможные проекты.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'company-in-numbers',
        'page' => null,
        'content' => '<h2>Компания в цифрах</h2><p>Предоставление профессиональных аудиторских услуг на высоком уровне с учетом<br>потребностей рынка и ориентацией на нужды и предпочтения клиентов.</p>',
      ],
      [
        'slug' => 'main-page-advantage',
        'page' => 'main',
        'content' => '<h2>Преимущества которые мы <br> предоставляем:</h2><ul><li>Уникальность и надежность</li><li>Индивидуальный подход</li><li>Качество</li><li>Местные знания и мировой опыт</li><li>Персональное обслуживание</li><li>Лояльность клиентов</li><li>Набор дополнительных услуг</li></ul><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'our-partners',
        'page' => 'main',
        'content' => '<h2>Нам доверяют</h2><p>Множество компаний со всего Таджикистана и за ее пределами <br> являются нашими клиентами на протяжении многих лет.</p>',
      ],
      [
        'slug' => 'main-page-news',
        'page' => 'main',
        'content' => '<h2>Наши новости</h2><p>Актуальные новости касающиеся <br> нашей деятельности <a href="#">Все новости</a></p>',
      ],
      [
        'slug' => '',
        'page' => '',
        'content' => '',
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
