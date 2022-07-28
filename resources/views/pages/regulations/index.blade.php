@extends('layouts.master')

@section('title')
  @lang('Нормативные документы') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="regulations-page container">
    <div class="regulations-page__content">
      <div class="content" data-content="regulations-page-content-{{ $locale }}">{!! $data['regulations-page-content-' . $locale] !!}</div>
    </div>

    <ul class="accordion-menu">
      <li class="accordion-menu__item">
        <button class="accordion-menu__dropdown-button">
          Конституция Республики Таджикистан
          <svg class="accordion-menu__dropdown-icon" width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>

        <ul class="accordion-menu__list">
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="accordion-menu__item">
        <button class="accordion-menu__dropdown-button">
          Международно-правовые акты
          <svg class="accordion-menu__dropdown-icon" width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>

        <ul class="accordion-menu__list">
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="accordion-menu__item">
        <button class="accordion-menu__dropdown-button">
          Конституционные законы Республики Таджикистан
          <svg class="accordion-menu__dropdown-icon" width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>

        <ul class="accordion-menu__list">
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="accordion-menu__item">
        <button class="accordion-menu__dropdown-button">
          Кодексы Руспублики Таджикистан
          <svg class="accordion-menu__dropdown-icon" width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>

        <ul class="accordion-menu__list">
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
        </ul>
      </li>
      <li class="accordion-menu__item">
        <button class="accordion-menu__dropdown-button">
          Законы Республики Таджикистан
          <svg class="accordion-menu__dropdown-icon" width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>

        <ul class="accordion-menu__list">
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
          <li class="accordion-menu__list-item">
            <a class="regulation-page__regulation" href="#">
              <svg class="regulation-page__regulation-icon" width="20" height="20">
                <use xlink:href="#word-icon"></use>
              </svg>
              <p class="regulation-page__regulation-title">
                Конституция Республики Таджикистана
                <small class="regulation-page__redulation-info">
                  <span class="regulation-page__redulation-extension">.doc</span>,
                  <span class="regulation-page__redulation-size">53 kb</span>
                </small>
              </p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/regulations.js') }}" type="module"></script>
@endsection
