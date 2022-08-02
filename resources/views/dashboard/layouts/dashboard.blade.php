<aside class="dashboard @if (session('dashboard') == 'shown') dashboard--shown @else dashboard--hidden @endif">
  <button class="dashboard__state-toggle" type="button">
    @if (session('dashboard') == 'shown')
      Скрыть панель администратора
    @else
      Показать панель администратора
    @endif
  </button>

  <div class="dashboard__inner">
    <a class="dashboard__mode-toggle" href="{{ route('dashboard', ['action' => 'toggle-mode']) }}">
      @if (session('editMode'))
        Выключить режим редактирования
      @else
        Включить режим редактирования
      @endif
    </a>

    <ul class="dashboard__menu">
      <li class="dashboard__menu-item @if ($route == 'banners') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('banners') }}">Баннеры</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'partners') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('partners') }}">Наши партнеры</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'dashboard.news') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('dashboard.news') }}">Новости Kreston</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'dashboard.certificates') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('dashboard.certificates') }}">Сертификаты</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'dashboard.specialists') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('dashboard.specialists') }}">Специалисты</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'dashboard.services') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('dashboard.services') }}">Услуги</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'dashboard.directions') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('dashboard.directions') }}">Направления</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'dashboard.regulations') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('dashboard.regulations') }}">Нормативные документы</a>
      </li>
      <li class="dashboard__menu-item @if ($route == 'dashboard.vacancies') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('dashboard.vacancies') }}">Вакансии</a>
      </li>
      <li class="dashboard__menu-item">
        <a class="dashboard__link admin-panel__link--logout" href="{{ route('auth.logout', $locale) }}">Выйти</a>
      </li>
    </ul>
  </div>
</aside>
