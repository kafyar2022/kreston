<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'login' => 'admin@kreston.tj',
      'role' => 'admin',
      'password' => bcrypt('yj87QsP#'),
    ]);

    $this->call([
      ContentSeeder::class,
      TextsSeeder::class,
      BannersSeeder::class,
      PartnersSeeder::class,
      NewsSeeder::class,
    ]);
  }
}
