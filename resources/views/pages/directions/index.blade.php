@extends('layouts.master')

@section('title')
  @lang('Направления') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="direction-page">
    <img class="direction-page__img" src="{{ asset('files/directions/img/' . $data['direction']->img) }}" width="1280" height="320" alt="{{ $data['direction']->title }}">

    <h1 class="direction-page__title">{{ $data['direction']->title }}</h1>
    <div class="direction-page__content container">
      {!! $data['direction']->content !!}
      
      <a class="direction-page__link">
        @lang('Получить консультацию')
        <span class="direction-page__link-icon">
          <svg width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </span>
      </a>
    </div>
  </main>
@endsection
