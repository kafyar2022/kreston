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
    foreach (range(1, 6) as $key) {
      Certificate::create([
        'locale' => 'ru',
        'title' => 'Сертификат регистрации № 0265444',
        'description' => 'LLC "KRESTON AC" was registered
          on April 12, 2014 in Dushanbe
          Republic of Tajikistan',
        'img' => 'certificate.jpg',
      ]);
    }
  }
}
