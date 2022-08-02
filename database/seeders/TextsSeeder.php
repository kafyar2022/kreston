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
    $texts = array(
      array('id' => '1', 'locale' => 'ru', 'slug' => 'company-in-numbers-term-1-ru', 'page' => NULL, 'text' => '1 971', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '2', 'locale' => 'ru', 'slug' => 'company-in-numbers-desc-1-ru', 'page' => NULL, 'text' => 'Год
        основания', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '3', 'locale' => 'ru', 'slug' => 'company-in-numbers-term-2-ru', 'page' => NULL, 'text' => '25 000+', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '4', 'locale' => 'ru', 'slug' => 'company-in-numbers-desc-2-ru', 'page' => NULL, 'text' => 'Сотрудников
        по всему миру', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '5', 'locale' => 'ru', 'slug' => 'company-in-numbers-term-3-ru', 'page' => NULL, 'text' => '700+', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '6', 'locale' => 'ru', 'slug' => 'company-in-numbers-desc-3-ru', 'page' => NULL, 'text' => 'Офисов
        обслуживания', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '7', 'locale' => 'ru', 'slug' => 'company-in-numbers-term-4-ru', 'page' => NULL, 'text' => '125+', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '8', 'locale' => 'ru', 'slug' => 'company-in-numbers-desc-4-ru', 'page' => NULL, 'text' => 'Стран
        присутствия', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '9', 'locale' => 'ru', 'slug' => 'company-in-numbers-term-5-ru', 'page' => NULL, 'text' => '12-я', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '10', 'locale' => 'ru', 'slug' => 'company-in-numbers-desc-5-ru', 'page' => NULL, 'text' => 'Крупнейшая глобальная
        бухгалтерская сеть', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '11', 'locale' => 'ru', 'slug' => 'company-in-numbers-term-6-ru', 'page' => NULL, 'text' => '$2,3 млрд+', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '12', 'locale' => 'ru', 'slug' => 'company-in-numbers-desc-6-ru', 'page' => NULL, 'text' => 'Доходов
        за 2021 год', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '13', 'locale' => 'ru', 'slug' => 'details-phone-term-ru', 'page' => NULL, 'text' => 'Связь с нами:', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '14', 'locale' => 'ru', 'slug' => 'details-phone-desc-ru', 'page' => NULL, 'text' => '90 703 23 222', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '15', 'locale' => 'ru', 'slug' => 'details-email-term-ru', 'page' => NULL, 'text' => 'Электронная почта:', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '16', 'locale' => 'ru', 'slug' => 'details-email-desc-ru', 'page' => NULL, 'text' => 'info@kreston.tj', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '17', 'locale' => 'ru', 'slug' => 'details-address-term-ru', 'page' => NULL, 'text' => 'Таджикистан, Душанбе:', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '18', 'locale' => 'ru', 'slug' => 'details-address-desc-ru', 'page' => NULL, 'text' => 'Улица Пушкина 10, офис 207', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '19', 'locale' => 'ru', 'slug' => 'details-worktime-term-ru', 'page' => NULL, 'text' => 'Время работы:', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51'),
      array('id' => '20', 'locale' => 'ru', 'slug' => 'details-worktime-desc-ru', 'page' => NULL, 'text' => 'пн-пт с 09:00 - 18:00', 'created_at' => '2022-08-02 09:04:51', 'updated_at' => '2022-08-02 09:04:51')
    );

    foreach ($texts as $text) {
      Text::create([
        'locale' => $text['locale'],
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
