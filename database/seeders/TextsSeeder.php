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
        'slug' => 'company-in-numbers-term-1',
        'page' => null,
        'text' => '1 971',
      ], [
        'slug' => 'company-in-numbers-desc-1',
        'page' => null,
        'text' => 'Год
        основания',
      ], [
        'slug' => 'company-in-numbers-term-2',
        'page' => null,
        'text' => '25 000+',
      ], [
        'slug' => 'company-in-numbers-desc-2',
        'page' => null,
        'text' => 'Сотрудников
        по всему миру',
      ], [
        'slug' => 'company-in-numbers-term-3',
        'page' => null,
        'text' => '700+',
      ], [
        'slug' => 'company-in-numbers-desc-3',
        'page' => null,
        'text' => 'Офисов
        обслуживания',
      ], [
        'slug' => 'company-in-numbers-term-4',
        'page' => null,
        'text' => '125+',
      ], [
        'slug' => 'company-in-numbers-desc-4',
        'page' => null,
        'text' => 'Стран
        присутствия',
      ], [
        'slug' => 'company-in-numbers-term-5',
        'page' => null,
        'text' => '12-я',
      ], [
        'slug' => 'company-in-numbers-desc-5',
        'page' => null,
        'text' => 'Крупнейшая глобальная
        бухгалтерская сеть',
      ], [
        'slug' => 'company-in-numbers-term-6',
        'page' => null,
        'text' => '$2,3 млрд+',
      ], [
        'slug' => 'company-in-numbers-desc-6',
        'page' => null,
        'text' => 'Доходов
        за 2021 год',
      ], [
        'slug' => 'details-phone-term',
        'page' => null,
        'text' => 'Связь с нами:',
      ], [
        'slug' => 'details-phone-desc',
        'page' => null,
        'text' => '90 703 23 222',
      ], [
        'slug' => 'details-email-term',
        'page' => null,
        'text' => 'Электронная почта:',
      ], [
        'slug' => 'details-email-desc',
        'page' => null,
        'text' => 'info@kreston.tj',
      ], [
        'slug' => 'details-address-term',
        'page' => null,
        'text' => 'Таджикистан, Душанбе:',
      ], [
        'slug' => 'details-address-desc',
        'page' => null,
        'text' => 'Улица Пушкина 10, офис 207',
      ], [
        'slug' => 'details-worktime-term',
        'page' => null,
        'text' => 'Время работы:',
      ], [
        'slug' => 'details-worktime-desc',
        'page' => null,
        'text' => 'пн-пт с 09:00 - 18:00',
      ], [
        'slug' => '',
        'page' => '',
        'text' => '',
      ],
    ];

    foreach ($texts as $text) {
      foreach (config('app.available_locales') as $locale) {
        Text::create([
          'locale' => $locale['locale'],
          'slug' => $text['slug'] . '-' . $locale['locale'],
          'page' => $text['page'],
          'text' => $text['text'],
        ]);
      }
    }
  }
}
