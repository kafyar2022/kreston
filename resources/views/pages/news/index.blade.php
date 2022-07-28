@extends('layouts.master')

@section('title')
  @lang('Новости Kreston AC')
@endsection

@section('content')
  <main class="news-page">
    <div class="container">
      <div class="news-page__content">
        <div class="content" data-content="news-page-content-{{ $locale }}">{!! $data['news-page-content-' . $locale] !!}</div>
      </div>

      <div class="news-page__news" id="news">
        @foreach ($data['news'] as $news)
          <x-news-card :news="$news" />
        @endforeach
      </div>

      <div class="news-page__pagination">
        {{ $data['news']->fragment('news')->links('components.pagination') }}
      </div>
    </div>
  </main>
@endsection
