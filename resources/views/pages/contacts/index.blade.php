@extends('layouts.master')

@section('title')
  @lang('Контакты') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="contacts-page container">
    <div class="contacts-page__content content" data-content="contacts-page-content-{{ $locale }}">
      <h1>Контакты</h1>
      <p>Вы можете с нами связаться по телефону или электронной <br>
        почте, а также рады будем вас приветствовать в нашем офисе за <br>
        чашечкой чая или кофе.</p>
    </div>

    <div class="contacts-page__details">
      <dl class="contacts-page__company-details company-details">
        <div class="company-details__item">
          <dt class="company-details__term">Связь с нами:</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="18" height="18">
              <use xlink:href="#phone"></use>
            </svg>
            <a class="company-details__link" href="tel:907032322">90 703 23 222</a>
          </dd>
        </div>
        <div class="company-details__item">
          <dt class="company-details__term">Электронная почта:</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="21" height="18">
              <use xlink:href="#email"></use>
            </svg>
            <a class="company-details__link" href="mailto:info@kreston.tj">info@kreston.tj</a>
          </dd>
        </div>
        <div class="company-details__item">
          <dt class="company-details__term">Таджикистан, Душанбе:</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="16" height="20">
              <use xlink:href="#address"></use>
            </svg>
            <a class="company-details__link" href="http://maps.google.com/?q=Улица+Пушкина+10,+офис+207" target="_blank">Улица Пушкина 10, офис 207</a>
          </dd>
        </div>
        <div class="company-details__item">
          <dt class="company-details__term">Время работы:</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="20" height="20">
              <use xlink:href="#time"></use>
            </svg>
            пн-пт с 09:00 - 18:00
          </dd>
        </div>
      </dl>

      <div class="contacts-page__map" id="map"></div>
    </div>

    <footer class="contacts-page__footer" data-content="contacts-page-footer">
      <p>ООО “КРЕСТОН АС” <br>
        Республика Таджикистан, 734025, <br>
        г. Душанбе, ул. Пушкина, 10, офис 207.</p>
    </footer>
  </main>
@endsection
