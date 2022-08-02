@extends('layouts.master')

@section('title')
  @lang('Новости Kreston AC')
@endsection

@section('content')
  <main class="news-show-page container">
    <div class="news-show-page__left">
      <time class="news-show-page__date" datetime="{{ $data['news']->created_at }}">{{ date_format($data['news']->created_at, 'd.m.Y') }}</time>
      <h1 class="news-show-page__title">{{ $data['news']->title }}</h1>

      <div class="news-show-page__content content">{!! $data['news']->content !!}</div>

      <div class="news-show-page__links">
        <a class="news-show-page__link news-show-page__link--prev button" @if ($data['prev']) href="{{ route('news.show', $data['prev']) }}" @endif>
          <svg width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
          @lang('Предыдущая')
        </a>
        <a class="news-show-page__link news-show-page__link--next button button--more" @if ($data['next']) href="{{ route('news.show', $data['next']) }}" @endif>@lang('Следующая')</a>
      </div>
    </div>

    <div class="news-show-page__right">
      <img class="news-show-page__img" src="{{ asset('files/news/img/' . $data['news']->img) }}" alt="{{ $data['news']->title }}" width="466" height="527">
    </div>
  </main>
@endsection
