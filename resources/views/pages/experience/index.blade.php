@extends('layouts.master')

@section('title')
  @lang('Наш опыт') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="experience-page">
    <div class="experience-page__content container">
      <div class="content" data-content="experience-page-content-{{ $locale }}">{!! $data['experience-page-content-' . $locale] !!}</div>
    </div>
    <div class="experience-page__img" style="background-image: url('/files/experience-page-img.jpg')"></div>

    <section class="industry-experience container">
      <div class="industry-experience__top">
        <div class="content" data-content="industry-experience-top-{{ $locale }}">{!! $data['industry-experience-top-' . $locale] !!}</div>
      </div>
      <div class="industry-experience__left">
        <div class="content" data-content="industry-experience-left-{{ $locale }}">{!! $data['industry-experience-left-' . $locale] !!}</div>
      </div>
      <div class="industry-experience__right">
        <div class="content" data-content="industry-experience-right-{{ $locale }}">{!! $data['industry-experience-right-' . $locale] !!}</div>
      </div>
    </section>

    <section class="our-partners container">
      <div class="our-partners__content">
        <div class="content" data-content="our-partners-{{ $locale }}">{!! $data['our-partners-' . $locale] !!}</div>
      </div>

      <ul class="our-partners__list">
        @foreach ($data['partners'] as $partner)
          <li class="our-partners__item">
            <a class="our-partners__link" @if ($partner->url) href="{{ $partner->url }}" @endif>
              <img class="our-partners__img" src="{{ asset('files/partners/img/' . $partner->logo) }}" width="180" height="64" alt="{{ $partner->title }}">
            </a>
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection
