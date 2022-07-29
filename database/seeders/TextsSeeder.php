<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = [
      [
        'slug' => 'company-in-numbers-term-1-ru',
        'page' => NULL,
        'text' => '1 971',
      ], [
        'slug' => 'company-in-numbers-desc-1-ru',
        'page' => NULL,
        'text' => 'Год
        основания',
      ], [
        'slug' => 'company-in-numbers-term-2-ru',
        'page' => NULL,
        'text' => '25 000+',
      ], [
        'slug' => 'company-in-numbers-desc-2-ru',
        'page' => NULL,
        'text' => 'Сотрудников
        по всему миру',
      ], [
        'slug' => 'company-in-numbers-term-3-ru',
        'page' => NULL,
        'text' => '700+',
      ], [
        'slug' => 'company-in-numbers-desc-3-ru',
        'page' => NULL,
        'text' => 'Офисов
        обслуживания',
      ], [
        'slug' => 'company-in-numbers-term-4-ru',
        'page' => NULL,
        'text' => '125+',
      ], [
        'slug' => 'company-in-numbers-desc-4-ru',
        'page' => NULL,
        'text' => 'Стран
        присутствия', 'created_at' => '2022-07-29 06:18:08', 'updated_at' => '2022-07-29 06:18:08'
      ], [
        'slug' => 'company-in-numbers-term-5-ru',
        'page' => NULL,
        'text' => '12-я',
      ], [
        'slug' => 'company-in-numbers-desc-5-ru',
        'page' => NULL,
        'text' => 'Крупнейшая глобальная
        бухгалтерская сеть',
      ], [
        'slug' => 'company-in-numbers-term-6-ru',
        'page' => NULL,
        'text' => '$2,3 млрд+',
      ], [
        'slug' => 'company-in-numbers-desc-6-ru',
        'page' => NULL,
        'text' => 'Доходов
        за 2021 год',
      ], [
        'slug' => 'details-phone-term-ru',
        'page' => NULL,
        'text' => 'Связь с нами:',
      ], [
        'slug' => 'details-phone-desc-ru',
        'page' => NULL,
        'text' => '90 703 23 222',
      ], [
        'slug' => 'details-email-term-ru',
        'page' => NULL,
        'text' => 'Электронная почта:',
      ], [
        'slug' => 'details-email-desc-ru',
        'page' => NULL,
        'text' => 'info@kreston.tj',
      ], [
        'slug' => 'details-address-term-ru',
        'page' => NULL,
        'text' => 'Таджикистан, Душанбе:',
      ], [
        'slug' => 'details-address-desc-ru',
        'page' => NULL,
        'text' => 'Улица Пушкина 10, офис 207',
      ], [
        'slug' => 'details-worktime-term-ru',
        'page' => NULL,
        'text' => 'Время работы:',
      ], [
        'slug' => 'details-worktime-desc-ru',
        'page' => NULL,
        'text' => 'пн-пт с 09:00 - 18:00',
      ],
    ];

    foreach ($texts as $text) {
      Text::create([
        'locale' => 'ru',
        'slug' => $text['slug'],
        'page' => $text['page'],
        'text' => $text['text'],
      ]);

      Text::create([
        'locale' => 'en',
        'slug' => substr($text['slug'], 0, -2) . 'en',
        'page' => $text['page'],
        'text' => $text['text'],
      ]);
    }
  }
}
