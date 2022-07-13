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
      'login' => 'kreston@admin.tj',
      'role' => 'user',
      'password' => bcrypt('yj87QsP#'),
    ]);

    $this->call([
      BannersSeeder::class,
      ContentSeeder::class,
      PartnersSeeder::class,
      NewsSeeder::class,
    ]);
  }
}
