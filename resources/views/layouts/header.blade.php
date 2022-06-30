<header class="header">
  <div class="header__top">
    <nav class="header__main-navigation container">
      <ul class="main-navigation">
        <li class="main-navigation__item">
          <a class="main-navigation__link" href="#">@lang('Kreston Global')</a>
        </li>
        <li class="main-navigation__item">
          <a class="main-navigation__link" href="#">@lang('Новости Kreston AC')</a>
        </li>
        <li class="main-navigation__item">
          <a class="main-navigation__link" href="#">@lang('Нормативные документы')</a>
        </li>
      </ul>

      <ul class="locales">
        @foreach (config('app.locales') as $lang)
          <li class="locales__item @if ($locale == $lang['locale']) locales__item--current @endif">
            <a class="locales__link" @if ($locale != $lang['locale']) href="{{ route($route, ['locale' => $lang['locale'], 'slug' => request('slug')]) }}" @endif>{{ $lang['title'] }}</a>
          </li>
        @endforeach
      </ul>
    </nav>
  </div>

  <div class="container header__container">
    <a class="logo" href="">
      <img class="logo__img" src="{{ asset('img/logo.svg') }}" alt="@lang('Логотип Kreston AC')" width="172" height="82">
    </a>

    <dl class="details">
      <div class="details-item details-item--phone">
        <dt class="details-item__title">Связь с нами:</dt>
        <dd class="details-item__description">
          <a class="details-item__link" href="tel:907032322">90 703 23 222</a>
        </dd>
      </div>
      <div class="details-item details-item--worktime">
        <dt class="details-item__title">Время работы:</dt>
        <dd class="details-item__description">пн-пт с 09:00 - 18:00</dd>
      </div>
    </dl>

    <button class="consultation-btn">@lang('Бесплатная консультация')</button>
  </div>

  <nav class="header__page-navigation container">
    <ul class="page-navigation">
      <li class="page-navigation__item">
        <button class="page-navigation__btn">@lang('Kreston AC')</button>

        <ul class="extra-navigation">
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">@lang('О нашей компании')</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">@lang('Наши преимущества')</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">@lang('Наша команда')</a>
          </li>
        </ul>
      </li>

      <li class="page-navigation__item">
        <button class="page-navigation__btn">@lang('Услуги')</button>

        <ul class="extra-navigation">
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Аудиторские услуги</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Бухгалтерские услуги</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Оценка</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Инвентаризация</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Аутсорсинг</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Налоговый консалтинг</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Юридический консалтинг</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Маркетинговый консалтинг</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Бизнес консалтинг</a>
          </li>
        </ul>
      </li>

      <li class="page-navigation__item">
        <button class="page-navigation__btn">@lang('Направления')</button>

        <ul class="extra-navigation">
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Промышленное производство</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Строительство</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Телекоммуникации</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Торговля</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Энергетика</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Агропромышленный сектор</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Банковское дело и финансы</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Горнодобывающая промышленность, нефть и газ</a>
          </li>
          <li class="extra-navigation__item">
            <a class="extra-navigation__link" href="#">Гостиницы</a>
          </li>
        </ul>
      </li>

      <li class="page-navigation__item">
        <a class="page-navigation__link" href="#">@lang('Наш опыт')</a>
      </li>

      <li class="page-navigation__item">
        <a class="page-navigation__link" href="#">@lang('Контакты')</a>
      </li>
    </ul>
  </nav>
</header>
