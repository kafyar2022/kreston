@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="main-page">
    <h1 class="visually-hidden">@lang('Kreston AC')</h1>

    <div class="banner glide">
      <div class="banner__track glide__track" data-glide-el="track">
        <ul class="banner__slides glide__slides">
          @foreach ($data['banners'] as $banner)
            <li class="banner__slide glide__slide" style="background-image: url('/files/banners/img/{{ $banner->img }}');">
              <div class="banner__content container">
                <div data-type="banner">{!! $banner->content !!}</div>
              </div>
            </li>
          @endforeach
          @if ($data['banners']->count() == 0)
            <li class="banner__slide glide__slide">
              <div class="banner__content container"></div>
            </li>
          @endif
        </ul>
      </div>

      <div class="banner__arrows glide__arrows container" data-glide-el="controls">
        <button class="banner__arrow banner__arrow--left" data-glide-dir="<">
          <svg width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>
        <button class="banner__arrow banner__arrow--right" data-glide-dir=">">
          <svg width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>
      </div>

      <div class="banner__bullets" data-glide-el="controls[nav]">
        @foreach ($data['banners'] as $key => $banner)
          <button class="banner__bullet" data-glide-dir="={{ $key }}"></button>
        @endforeach
      </div>
    </div>

    <div class="main-page__grid container">
      <div class="about-creston" style="background-image: linear-gradient(rgba(24, 156, 216, 0.8), rgba(24, 156, 216, 0.8)), url('/files/main-about-bg.jpg')">
        <div data-content="main-page-about-{{ $locale }}">{!! $data['main-page-about-' . $locale] !!}</div>
      </div>

      <div class="our-experience">
        <div data-content="main-page-experience-{{ $locale }}">{!! $data['main-page-experience-' . $locale] !!}</div>
      </div>
    </div>

    <section class="company-in-numbers container">
      <div data-content="company-in-numbers-{{ $locale }}">{!! $data['company-in-numbers-' . $locale] !!}</div>

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

    <section class="advantage-provide">
      <div class="advantage-provide__container container">
        <div class="advantage-provide__img" style="background-image: url('/files/advantage-provide.jpg')"></div>
        <div data-content="main-page-advantage-{{ $locale }}">{!! $data['main-page-advantage-' . $locale] !!}</div>
      </div>
    </section>

    <section class="our-partners container">
      <div data-content="our-partners-{{ $locale }}">{!! $data['our-partners-' . $locale] !!}</div>

      <div class="partner-glide glide">
        <div class="partner-glide__track glide__track" data-glide-el="track">
          <ul class="partner-glide__slides glide__slides">
            @foreach ($data['partners'] as $partner)
              <li class="partner-glide__slide glide__slide">
                <a class="partner-glide__link" @if ($partner->url) href="{{ $partner->url }}" @endif>
                  <img class="partner-glide__img" src="{{ asset('files/partners/img/' . $partner->logo) }}" width="180" height="64" alt="{{ $partner->title }}">
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </section>

    <section class="last-news">
      <div class="container">
        <div data-content="main-page-news-{{ $locale }}">{!! $data['main-page-news-' . $locale] !!}</div>

        <div class="last-news__news">
          @foreach ($data['last-news'] as $news)
            <x-news-card :news="$news" />
          @endforeach
        </div>
      </div>
    </section>

    <section class="feedback container">
      <form class="feedback__form feedback-form">
        <h2 class="feedback-form__title">@lang('Получите бесплатную <br> консультацию')</h2>

        <label class="feedback-form__label">
          <span class="visually-hidden">@lang('Ваше имя')</span>
          <input class="feedback-form__field" type="text" name="name" placeholder="@lang('Неопознанный Енот')" value="@lang('Ваше имя')" required>
        </label>
        <label class="feedback-form__label">
          <span class="visually-hidden">@lang('Номер телефона')</span>
          <input class="feedback-form__field" type="tel" name="tel" placeholder="+992 987-65-43-21" value="@lang('Номер телефона')" required>
        </label>
        <label class="feedback-form__label">
          <span class="visually-hidden">@lang('Электронная почта')</span>
          <input class="feedback-form__field" type="email" name="email" placeholder="example@gmail.com" value="@lang('Электронная почта')" required>
        </label>

        <div class="feedback-form__footer">
          <p class="feedback-form__aware">@lang('Нажимая «Отправить», вы соглашаетесь предоставить Вашу информацию Kreston AC на обработку.')</p>
          <button class="feedback-form__button button button--more">@lang('Отправить')</button>
        </div>
      </form>
    </section>
  </main>
@endsection

@section('script')
  <script>
    new Glide('.banner', {
      type: 'carousel',
      startAt: 0,
      perView: 1,
      gap: 0,
      autoplay: 2500,
    }).mount()

    new Glide('.partner-glide', {
      type: 'carousel',
      startAt: 0,
      perView: 6,
      gap: 60,
      autoplay: 2500,
    }).mount()
  </script>

  @if (session()->has('loggedUser'))
    <script type="module">
      import {
        initContentManager
      } from '/js/content-manager.js';

      initContentManager();
    </script>
  @endif
@endsection
