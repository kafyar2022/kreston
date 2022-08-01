@extends('layouts.master')

@section('title')
  @lang('Service') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="service-page">
    <div class="service-page__content container">
      <h1>{{ $data['service']->title }}</h1>
      <div>{!! $data['service']->content !!}</div>
      <div class="service-page__block">{!! $data['service']->block !!}</div>
      <a class="service-page__link">
        @lang('Заказать услугу')
        <span class="service-page__link-icon">
          <svg width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </span>
      </a>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/services.js') }}" type="module"></script>
@endsection
