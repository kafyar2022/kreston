@extends('layouts.master')

@section('title')
  @lang('О нашей компании') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="about-page">
    <div class="about-page__container container">
      <div class="about-page__content">
        <div class="content" data-content="about-page-content-{{ $locale }}">{!! $data['about-page-content-' . $locale] !!}</div>
      </div>

      <section class="about-page__our-mission" style="background-image: linear-gradient( rgba(24, 156, 216, 0.8), rgba(24, 156, 216, 0.8)), url('/files/our-mission-bg.jpg')">
        <div class="content" data-content="about-page-mission-{{ $locale }}">{!! $data['about-page-mission-' . $locale] !!}</div>
      </section>
    </div>

    <section class="about-page__forum">
      <div class="container">
        <div class="about-page__forum-content">
          <div class="content" data-content="about-page-forum-{{ $locale }}">{!! $data['about-page-forum-' . $locale] !!}</div>
        </div>
      </div>
    </section>

    <x-company-in-numbers :locale="$locale" :data="$data" />

    <section class="certificate">
      <div class="container">
        <div class="certificate__content">
          <div class="content" data-content="about-page-certificate-{{ $locale }}">{!! $data['about-page-certificate-' . $locale] !!}</div>
        </div>

        <ul class="certificate__list">
          @foreach (range(1, 6) as $key)
            <li class="certificate__item">
              <h3 class="certificate__title">Сертификат регистрации №0265444</h3>
              <p class="certificate__description">LLC "KRESTON AC" was registered
                on April 12, 2014 in Dushanbe
                Republic of Tajikistan</p>
              <a class="certificate__link button button--view" href="#">
                <svg width="23" height="16">
                  <use xlink:href="#view-icon"></use>
                </svg>
                @lang('Посмотреть')
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </section>

    <section class="meta-section">
      <div class="container">
        <div class="meta-section__content">
          <div class="content" data-content="about-page-meta-{{ $locale }}">{!! $data['about-page-meta-' . $locale] !!}</div>
        </div>
      </div>
    </section>
  </main>
@endsection
