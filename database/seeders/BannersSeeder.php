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
    $banners = array(
      array('id' => '1', 'locale' => 'ru', 'img' => '62e8eacdee0d2.jpg', 'content' => '<h2>KRESTON AC LLC<br></h2><p>Предлагает налоговые, финансовые,</p><p>деловые и юридические консультации</p><p><a href="/" target="_self">Подробнее</a></p>', 'created_at' => '2022-08-02 09:13:50', 'updated_at' => '2022-08-02 09:13:50'),
      array('id' => '2', 'locale' => 'ru', 'img' => '62e8eb3e6d97d.jpg', 'content' => '<h2>KRESTON AC LLC<br></h2><p>Предлагает налоговые, финансовые,</p><p>деловые и юридические консультации<br></p><p><a href="/" target="_self">Подробнее</a></p>', 'created_at' => '2022-08-02 09:15:42', 'updated_at' => '2022-08-02 09:15:42'),
      array('id' => '3', 'locale' => 'ru', 'img' => '62e8eb6dcf8cd.jpg', 'content' => '<h2>KRESTON AC LLC<br></h2><p>Предлагает налоговые, финансовые,</p><p>деловые и юридические консультации<br></p><p><a href="/" target="_self">Подробнее</a></p>', 'created_at' => '2022-08-02 09:16:29', 'updated_at' => '2022-08-02 09:16:29')
    );
    foreach ($banners as $banner) {
      Banner::create([
        'locale' => $banner['locale'],
        'img' => $banner['img'],
        'content' => $banner['content'],
      ]);
    }
  }
}
