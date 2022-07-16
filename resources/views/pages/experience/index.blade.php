@extends('layouts.master')

@section('title')
  @lang('Наш опыт') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="experience-page">
    <div class="experience-page__content container" data-content="experience-page-content-{{ $locale }}">{!! $data['experience-page-content-' . $locale] !!}</div>
    <div class="experience-page__img" style="background-image: url('/files/experience-page-img.jpg')"></div>

    <section class="industry-experience container">
      <div class="industry-experience__top" data-content="industry-experience-top-{{ $locale }}">{!! $data['industry-experience-top-' . $locale] !!}</div>

      <div class="industry-experience__left" data-content="industry-experience-left-{{ $locale }}">{!! $data['industry-experience-left-' . $locale] !!}</div>

      <div class="industry-experience__right" data-content="industry-experience-right-{{ $locale }}">{!! $data['industry-experience-right-' . $locale] !!}</div>
    </section>

    <section class="our-partners container">
      <div data-content="our-partners-{{ $locale }}">{!! $data['our-partners-' . $locale] !!}</div>

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
