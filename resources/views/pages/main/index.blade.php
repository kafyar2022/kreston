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

    <x-company-in-numbers :locale="$locale" :data="$data" />

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
      <x-feedback-form />
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/main.js') }}" type="module"></script>
@endsection
