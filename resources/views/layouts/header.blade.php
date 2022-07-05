<header class="page-header">
  <div class="container" style="position: relative">
    <ul class="page-header__locale-list locale-list locale-list--hidden">
      @foreach (config('app.locales') as $lang)
        <li class="locale-list__item @if ($locale == $lang['locale']) locale-list__item--current @endif">
          <a class="locale-list__link" @if ($locale != $lang['locale']) href="{{ route($route, ['locale' => $lang['locale'], 'slug' => request('slug')]) }}" @endif>{{ $lang['title'] }}</a>
          @if ($locale == $lang['locale'])
            <svg class="locale-list__icon" width="12" height="8">
              <use xlink:href="#arrow-down"></use>
            </svg>
          @endif
        </li>
      @endforeach
    </ul>
  </div>

  <div class="page-header__top-nav-list">
    <ul class="top-nav-list container">
      <li class="top-nav-list__item">
        <a class="top-nav-list__link" href="https://www.kreston.com/" target="_blank">@lang('Kreston Global')</a>
      </li>
      <li class="top-nav-list__item @if ($route == 'news' || $route == 'news.show') top-nav-list__item--current @endif">
        <a class="top-nav-list__link" @if ($route != 'news' && $route != 'news.show') href="{{ route('news', $locale) }}" @endif>@lang('Новости Kreston AC')</a>
      </li>
      <li class="top-nav-list__item @if ($route == 'regulations') top-nav-list__item--current @endif">
        <a class="top-nav-list__link" @if ($route != 'regulations') href="{{ route('regulations', $locale) }}" @endif>@lang('Нормативные документы')</a>
      </li>
    </ul>
  </div>

  <div class="page-header__container container">
    <a class="page-header__logo" @if ($route != 'home') href="{{ route('home', $locale) }}" @endif>
      <img src="{{ asset('img/logo.svg') }}" alt="@lang('Логотип Kreston AC')" width="172" height="82">
    </a>

    <dl class="page-header__company-details company-details">
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
        <dt class="company-details__term">Время работы:</dt>
        <dd class="company-details__description">
          <svg class="company-details__icon" width="20" height="20">
            <use xlink:href="#time"></use>
          </svg>
          пн-пт с 09:00 - 18:00
        </dd>
      </div>
    </dl>

    <button class="page-header__feedback-button button button--feedback" type="button">
      <svg class="page-header__feedback-icon" width="20" height="20">
        <use xlink:href="#message-icon"></use>
      </svg>
      <span>@lang('Бесплатная консультация')</span>
    </button>
  </div>

  <nav class="page-header__page-nav page-nav">
    <div class="page-nav__container container">
      <ul class="page-nav__list">
        <li class="page-nav__item @if ($route == 'about' || $route == 'advantage' || $route == 'team') page-nav__item--current @endif">
          <button class="page-nav__button">
            @lang('Kreston AC')
            <svg class="page-nav__icon" width="12" height="8">
              <use xlink:href="#arrow-down"></use>
            </svg>
          </button>

          <ul class="page-nav__extra-list page-nav__extra-list--hidden">
            <li class="page-nav__extra-item @if ($route == 'about') page-nav__extra-item--current @endif">
              <a class="page-nav__link" @if ($route != 'about') href="{{ route('about', $locale) }}" @endif>@lang('О нашей компании')</a>
            </li>
            <li class="page-nav__extra-item @if ($route == 'advantage') page-nav__extra-item--current @endif">
              <a class="page-nav__link" @if ($route != 'advantage') href="{{ route('advantage', $locale) }}" @endif>@lang('Наши преимущества')</a>
            </li>
            <li class="page-nav__extra-item @if ($route == 'team') page-nav__extra-item--current @endif">
              <a class="page-nav__link" @if ($route != 'team') href="{{ route('team', $locale) }}" @endif>@lang('Наша команда')</a>
            </li>
          </ul>
        </li>

        <li class="page-nav__item @if ($route == 'service') page-nav__item--current @endif">
          <button class="page-nav__button">
            @lang('Услуги')
            <svg class="page-nav__icon" width="12" height="8">
              <use xlink:href="#arrow-down"></use>
            </svg>
          </button>

          <ul class="page-nav__extra-list page-nav__extra-list--hidden">
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
          <button class="page-nav__button">
            @lang('Направления')
            <svg class="page-nav__icon" width="12" height="8">
              <use xlink:href="#arrow-down"></use>
            </svg>
          </button>

          <ul class="page-nav__extra-list page-nav__extra-list--hidden">
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
          <a class="page-nav__link @if ($route == 'experience') page-nav__link--current @endif" @if ($route != 'experience') href="{{ route('experience', $locale) }}" @endif>@lang('Наш опыт')</a>
        </li>

        <li class="page-nav__item">
          <a class="page-nav__link @if ($route == 'contacts') page-nav__link--current @endif" @if ($route != 'contacts') href="{{ route('contacts', $locale) }}" @endif>@lang('Контакты')</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
