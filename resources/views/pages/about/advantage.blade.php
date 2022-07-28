@extends('layouts.master')

@section('title')
  @lang('Наши преимущества') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="advantage-page">
    <h1 class="visually-hidden">@lang('Наши преимущества')</h1>
    <div class="advantage-page__banner" style="background-image: url('/files/advantage-banner.jpg')"></div>

    <div class="advantage-page__grid container">
      <section class="advantage-page__grid-item">
        <div class="content" data-content="advantage-page-advantages-{{ $locale }}">{!! $data['advantage-page-advantages-' . $locale] !!}</div>
      </section>

      <section class="advantage-page__grid-item">
        <div class="content" data-content="advantage-page-warranty-{{ $locale }}">{!! $data['advantage-page-warranty-' . $locale] !!}</div>
      </section>
    </div>

    <div class="advantage-page__content container">
      <div class="content" data-content="advantage-page-content-left-{{ $locale }}">{!! $data['advantage-page-content-left-' . $locale] !!}</div>
      <div class="content" data-content="advantage-page-content-right-{{ $locale }}">{!! $data['advantage-page-content-right-' . $locale] !!}</div>
    </div>

    <section class="feedback feedback--no-icon container">
      <x-feedback-form />
    </section>
  </main>
@endsection
