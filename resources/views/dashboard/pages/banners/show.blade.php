@extends('dashboard.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>
    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb">
        <a href="{{ route('banners') }}?locale=ru">Баннеры</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['banner'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['banner'])
        <h1 class="page__title">Редактирование</h1>
      @else
        @if ($data['locale'] == 'ru')
          <h1 class="page__title">Добавление на русском</h1>
          <a class="page__link" href="{{ route($route) }}?locale=en">Добавить английский вариант</a>
        @endif
        @if ($data['locale'] == 'en')
          <h1 class="page__title">Добавление на английском</h1>
          <a class="page__link" href="{{ route($route) }}?locale=ru">Добавить русский вариант</a>
        @endif
      @endif
      <a class="page__link" data-action="submit">{{ $data['banner'] ? 'Редактировать' : 'Сохранить' }} баннер</a>
    </div>

    <div class="banner__slide glide__slide" @if ($data['banner']) style="background-image: url('/files/banners/img/{{ $data['banner']->img }}');" @endif>
      <div class="banner__content container">
        <div data-type="banner" style="color: #fff">{!! $data['banner']->content ?? '' !!}</div>
      </div>
    </div>

    <form class="form-dash" @if ($data['banner']) action="{{ route('banners.update') }}" @else action="{{ route('banners.store') }}" @endif method="post" enctype="multipart/form-data">
      @csrf
      @if ($data['banner'])
        <input type="hidden" name="id" value="{{ $data['banner']->id }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
      @endif
      <label class="form-dash__element">
        <span class="form-dash__label">Фон</span>
        <input class="visually-hidden" name="img" type="file" placeholder="placeholder" accept="image/*">
        <input class="form-dash__field" type="text" placeholder="Выберите файл" readonly value="{{ $data['banner']->img ?? '' }}">
      </label>
      <label class="form-dash__element" style="grid-row: 1/4; grid-column: 2/4;">
        <span class="form-dash__label">Контент</span>
        <textarea class="form-dash__field" name="content" cols="30" rows="10">{{ $data['banner']->content ?? '' }}</textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/banners-create.js') }}"></script>
@endsection
