@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="main page-content">
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

    <div class="main__about-wrap container">
      <div class="main__about-creston about-creston" style="background-image: url('/files/main-about-bg.jpg')">
        <div class="about-creston__simditor" data-content="main-about-{{ $locale }}">
          <div data-type="content">{!! $data['contents']['main-about-' . $locale] !!}</div>
          <textarea style="display: none;">{{ $data['contents']['main-about-' . $locale] }}</textarea>
        </div>
      </div>

      <div class="main__our-experience our-experience">
        <div class="our-experience__simditor" data-content="main-our-experience-{{ $locale }}">
          <div data-type="content">{!! $data['contents']['main-our-experience-' . $locale] !!}</div>
          <textarea style="display: none;">{{ $data['contents']['main-our-experience-' . $locale] }}</textarea>
        </div>
      </div>
    </div>

    <section class="main__company-in-numbers company-in-numbers container">
      <div class="company-in-numbers__simditor" data-content="company-in-numbers-{{ $locale }}">
        <div data-type="content">{!! $data['contents']['company-in-numbers-' . $locale] !!}</div>
        <textarea style="display: none;">{{ $data['contents']['company-in-numbers-' . $locale] }}</textarea>
      </div>

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

    <section class="main__advantage-provide advantage-provide">
      <div class="advantage-provide__container container">
        <div class="advantage-provide__img" style="background-image: url('/files/advantage-provide.jpg')"></div>

        <div class="advantage-provide__simditor" data-content="main-advantage-provide-{{ $locale }}">
          <div data-type="content">{!! $data['contents']['main-advantage-provide-' . $locale] !!}</div>
          <textarea style="display: none;">{{ $data['contents']['main-advantage-provide-' . $locale] }}</textarea>
        </div>
      </div>
    </section>

    <section class="main__our-partners our-partners container">
      <div class="our-partners__simditor" data-content="main-our-partners-{{ $locale }}">
        <div data-type="content">{!! $data['contents']['main-our-partners-' . $locale] !!}</div>
        <textarea style="display: none;">{{ $data['contents']['main-our-partners-' . $locale] }}</textarea>
      </div>

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

    <section class="main__last-news last-news">
      <div class="container">
        <div class="last-news__simditor" data-content="main-last-news-{{ $locale }}">
          <div data-type="content">{!! $data['contents']['main-last-news-' . $locale] !!}</div>
          <textarea style="display: none;">{{ $data['contents']['main-last-news-' . $locale] }}</textarea>
        </div>

        <div class="last-news__news">
          @foreach ($data['last-news'] as $news)
            <x-news-card :news="$news" />
          @endforeach
        </div>
      </div>
    </section>

    <section class="main__feedback feedback container">
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
