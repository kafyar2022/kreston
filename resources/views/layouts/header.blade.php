<header class="page-header">
  <div class="container" style="position: relative">
    <ul class="page-header__locale-list locale-list">
      @foreach (config('app.locales') as $lang)
      <li class="locale-list__item @if ($locale == $lang['locale']) locale-list__item--current @endif">
        <a class="locale-list__link" @if ($locale != $lang['locale']) href="{{ route($route, ['locale' => $lang['locale'], 'slug' => request('slug')]) }}" @endif>{{ $lang['title'] }}</a>
      </li>
      @endforeach
    </ul>
  </div>

  <ul class="top-nav-list">
    <li class="top-nav-list__item">
      <a class="top-nav-list__link" href="#">@lang('Kreston Global')</a>
    </li>
    <li class="top-nav-list__item">
      <a class="top-nav-list__link" href="#">@lang('Новости Kreston AC')</a>
    </li>
    <li class="top-nav-list__item">
      <a class="top-nav-list__link" href="#">@lang('Нормативные документы')</a>
    </li>
  </ul>

  <div class="page-header__container container">
    <a class="page-header__logo" @if ($route != 'home') href="{{ route('home', $locale) }}" @endif>
      <img src="{{ asset('img/logo.svg') }}" alt="@lang('Логотип Kreston AC')" width="172" height="82">
    </a>

    <dl class="page-header__company-details company-details">
      <div class="company-details__item company-details__item--phone">
        <dt class="company-details__term">Связь с нами:</dt>
        <dd class="company-details__description">
          <a class="company-details__link" href="tel:907032322">90 703 23 222</a>
        </dd>
      </div>
      <div class="company-details__item company-details__item--worktime">
        <dt class="company-details__term">Время работы:</dt>
        <dd class="company-details__description">пн-пт с 09:00 - 18:00</dd>
      </div>
    </dl>

    <button class="page-header__feedback-button button button--feedback" type="button">@lang('Бесплатная консультация')</button>
  </div>

  <nav class="page-header__page-nav page-nav">
    <ul class="page-nav__list">
      <li class="page-nav__item">
        <button class="page-nav__button">@lang('Kreston AC')</button>

        <ul class="page-nav__extra-list">
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">@lang('О нашей компании')</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">@lang('Наши преимущества')</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">@lang('Наша команда')</a>
          </li>
        </ul>
      </li>

      <li class="page-nav__item">
        <button class="page-nav__button">@lang('Услуги')</button>

        <ul class="page-nav__extra-list">
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Аудиторские услуги</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Бухгалтерские услуги</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Оценка</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Инвентаризация</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Аутсорсинг</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Налоговый консалтинг</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Юридический консалтинг</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Маркетинговый консалтинг</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Бизнес консалтинг</a>
          </li>
        </ul>
      </li>

      <li class="page-nav__item">
        <button class="page-nav__button">@lang('Направления')</button>

        <ul class="page-nav__extra-list">
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Промышленное производство</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Строительство</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Телекоммуникации</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Торговля</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Энергетика</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Агропромышленный сектор</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Банковское дело и финансы</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Горнодобывающая промышленность, нефть и газ</a>
          </li>
          <li class="page-nav__extra-item">
            <a class="page-nav__link" href="#">Гостиницы</a>
          </li>
        </ul>
      </li>

      <li class="page-nav__item">
        <a class="page-nav__link" href="#">@lang('Наш опыт')</a>
      </li>

      <li class="page-nav__item">
        <a class="page-nav__link" href="#">@lang('Контакты')</a>
      </li>
    </ul>
  </nav>
</header>
