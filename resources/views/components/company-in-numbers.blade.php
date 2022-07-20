@props(['locale', 'data'])

<section class="company-in-numbers container">
  <div class="company-in-numbers__content" data-content="company-in-numbers-{{ $locale }}">{!! $data['company-in-numbers-' . $locale] !!}</div>

  <ul class="value-list">
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-1.svg');"></span>
      <b class="value-list__term">1 971</b>
      <span class="value-list__description">Год
        основания</span>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-2.svg');"></span>
      <b class="value-list__term">25 000+</b>
      <span class="value-list__description">Сотрудников
        по всему миру</span>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-3.svg');"></span>
      <b class="value-list__term">700+</b>
      <span class="value-list__description">Офисов
        обслуживания</span>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-4.svg');"></span>
      <b class="value-list__term">125+</b>
      <span class="value-list__description">Стран
        присутствия</span>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-5.svg');"></span>
      <b class="value-list__term">12-я</b>
      <span class="value-list__description">Крупнейшая глобальная
        бухгалтерская сеть</span>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-6.svg');"></span>
      <b class="value-list__term">$2,3 млрд+</b>
      <span class="value-list__description">Доходов
        за 2021 год</span>
    </li>
  </ul>
</section>
