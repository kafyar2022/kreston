<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificatesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $certificates = array(
      array('id' => '1', 'locale' => 'ru', 'title' => 'Свидетельство о регистрации № 0265444', 'description' => '<p>ООО "КРЕСТОН АС" зарегистрировано</p><p>12 апреля 2014 г. в Душанбе</p><p>Республика Таджикистан</p>', 'img' => '62e9023e03da8.jpg', 'created_at' => '2022-08-02 10:53:50', 'updated_at' => '2022-08-02 10:53:50'),
      array('id' => '2', 'locale' => 'ru', 'title' => 'Лицензия на осуществление оценки рег. НЕТ 000024', 'description' => '<p>ООО «КРЕСТОН АС» имеет лицензию на</p><p>Услуги по оценке. Рег.№ 000024,</p><p>действует до 13 июля 2019 г.</p>', 'img' => '62e90329f0b2a.jpg', 'created_at' => '2022-08-02 10:57:46', 'updated_at' => '2022-08-02 10:57:46'),
      array('id' => '3', 'locale' => 'ru', 'title' => 'Лицензия на аудит рег. НЕТ 0000099', 'description' => '<p>ООО «КРЕСТОН АС» имеет лицензию на</p><p>Аудиторские услуги Рег.№ 0000099,</p><p>действует до 16 мая 2019 г.</p>', 'img' => '62e903715da0e.jpg', 'created_at' => '2022-08-02 10:58:57', 'updated_at' => '2022-08-02 10:58:57'),
      array('id' => '4', 'locale' => 'ru', 'title' => 'Лицензия на аудит рег. НЕТ 0000066', 'description' => '<p>ООО «КРЕСТОН АС» имеет лицензию на</p><p>Аудиторские услуги Рег.№ 0000066,</p><p>действует до 29 декабря 2021 г.</p>', 'img' => '62e903b306bd7.jpg', 'created_at' => '2022-08-02 11:00:03', 'updated_at' => '2022-08-02 11:00:03')
    );

    foreach ($certificates as $certificate) {
      Certificate::create([
        'locale' => $certificate['locale'],
        'title' => $certificate['title'],
        'description' => $certificate['description'],
        'img' => $certificate['img'],
      ]);
    }
  }
}
