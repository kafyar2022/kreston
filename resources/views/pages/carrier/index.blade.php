@extends('layouts.master')

@section('title')
  @lang('Карьера') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="carrier-page">
    <div class="carrier-page__content container">
      <div class="content" data-content="carrier-page-{{ $locale }}">{!! $data['carrier-page-' . $locale] !!}</div>
    </div>

    <img class="carrier-page__img" src="{{ asset('files/carrier-page.jpg') }}" width="1280" height="504" alt="@lang('Карьера')">

    <div class="carrier-page__content container">
      <div class="content" data-content="carrier-page-vacancy-{{ $locale }}">{!! $data['carrier-page-vacancy-' . $locale] !!}</div>
    </div>

    <div class="container">
      <ul class="accordion-menu">
        @foreach ($data['vacancies'] as $vacancy)
          <li class="accordion-menu__item">
            <button class="accordion-menu__dropdown-button">
              {{ $vacancy->title }}
              <svg class="accordion-menu__dropdown-icon" width="10" height="16">
                <use xlink:href="#more-icon"></use>
              </svg>
            </button>

            <ul class="accordion-menu__list">
              <li class="accordion-menu__list-item content">
                <div class="carrier-page__vacancy">
                  {!! $vacancy->content !!}
                  <a>@lang('Отправить CV')</a>
                </div>
              </li>
            </ul>
          </li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/regulations.js') }}" type="module"></script>
@endsection
