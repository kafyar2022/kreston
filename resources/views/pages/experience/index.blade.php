@extends('layouts.master')

@section('title')
  @lang('Наш опыт') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="experience-page">
    <div class="experience-page__content container" data-content="experience-page-content-{{ $locale }}">
      <h1>Наш опыт</h1>
      <p>За годы работы KRESTON АС приобрела успешный опыт сотрудничества с <br>
        различными компаниями и организациями и на сегодняшний день занимает <br>
        прочные позиции на рынке, реализуя всевозможные проекты.</p>
    </div>
    <div class="experience-page__img" style="background-image: url('/files/experience-page-img.jpg')"></div>

    <section class="industry-experience container">
      <div class="industry-experience__top" data-content="industry-experience-top-{{ $locale }}">
        <h2>Отрослевой опыт</h2>
        <p>Нашими клиентами являются ведущие компании <br>
          в следующих отраслях промышленности:</p>
      </div>

      <div class="industry-experience__left" data-content="industry-experience-left-{{ $locale }}">
        <ul>
          <li>Промышленное производство</li>
          <li>Строительство</li>
          <li>Телекоммуникации</li>
          <li>Торговля</li>
          <li>Энергетика</li>
        </ul>
      </div>

      <div class="industry-experience__right" data-content="industry-experience-right-{{ $locale }}">
        <ul>
          <li>Агропромышленный сектор</li>
          <li>Банковское дело и финансы</li>
          <li>Авиакомпании</li>
          <li>Горнодобывающая промышленность, нефть и газ</li>
          <li>Гостиницы</li>
        </ul>
      </div>
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
