<footer class="page-footer">
  <dl class="page-footer__nav container">
    <div class="page-footer__nav-item">
      <dt class="page-footer__nav-term">
        @lang('Kreston AC')
        <svg class="page-footer__nav-icon" width="8" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </dt>

      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="{{ route('about', $locale) }}">@lang('О нашей компании')</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="{{ route('about.advantage', $locale) }}">@lang('Наши преимущества')</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="{{ route('about.team', $locale) }}">@lang('Наша команда')</a>
      </dd>
    </div>

    <div class="page-footer__nav-item">
      <dt class="page-footer__nav-term">
        @lang('Услуги')
        <svg class="page-footer__nav-icon" width="8" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </dt>

      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Аудиторские услуги</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Бухгалтерские услуги</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Оценка</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Инвентаризация</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Аутсорсинг</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Налоговый консалтинг</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Юридический консалтинг</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Маркетинговый консалтинг</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Бизнес консалтинг</a>
      </dd>
    </div>

    <div class="page-footer__nav-item">
      <dt class="page-footer__nav-term">
        @lang('Направления')
        <svg class="page-footer__nav-icon" width="8" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </dt>

      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Промышленное производство</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Строительство</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Телекоммуникации</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Торговля</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Энергетика</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Агропромышленный сектор</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Банковское дело и финансы</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Горнодобывающая промышленность, нефть и газ</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="#">Гостиницы</a>
      </dd>
    </div>

    <div class="page-footer__nav-item">
      <dt class="page-footer__nav-term">
        @lang('Остальные ссылки')
        <svg class="page-footer__nav-icon" width="8" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </dt>

      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="https://www.kreston.com/">@lang('Kreston Global')</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="{{ route('news', $locale) }}">@lang('Новости Kreston AC')</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="{{ route('regulations', $locale) }}">@lang('Нормативные документы')</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="{{ route('experience', $locale) }}#partners">@lang('Нам доверяют')</a>
      </dd>
      <dd class="page-footer__nav-description">
        <a class="page-footer__nav-link" href="{{ route('contacts', $locale) }}">@lang('Контакты')</a>
      </dd>
    </div>
  </dl>

  <div class="page-footer__inner">
    <div class="page-footer__container container">
      <dl class="page-footer__company-details company-details">
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

      <ul class="page-footer__social-list social-list">
        <li class="social-list__item">
          <a class="social-list__link" href="#">
            <span class="visually-hidden">Фейсбук</span>
            <svg class="social-list__icon" width="11" height="20">
              <use xlink:href="#facebook"></use>
            </svg>
          </a>
        </li>
        <li class="social-list__item">
          <a class="social-list__link" href="#">
            <span class="visually-hidden">Инстаграм</span>
            <svg class="social-list__icon" width="20" height="20">
              <use xlink:href="#instagram"></use>
            </svg>
          </a>
        </li>
        <li class="social-list__item">
          <a class="social-list__link" href="#">
            <span class="visually-hidden">Линкед ин</span>
            <svg class="social-list__icon" width="19" height="18">
              <use xlink:href="#linkedin"></use>
            </svg>
          </a>
        </li>
        <li class="social-list__item">
          <a class="social-list__link" href="#">
            <span class="visually-hidden">Твиттер</span>
            <svg class="social-list__icon" width="22" height="18">
              <use xlink:href="#twitter"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="page-footer__copyright">{{ date('Y') }}, Kreston AC. <span>All rights reserved.</span></div>
</footer>
