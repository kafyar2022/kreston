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
        <a href="{{ route('partners') }}?locale=ru">Партнеры</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['partner'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['partner'])
        <h1 class="page__title">Редактирование</h1>
      @else
        @if ($data['locale'] == 'ru')
          <h1 class="page__title">Добавление на русском</h1>
          <a class="page__link" href="/{{ request()->path() }}?locale=en">Добавить английский вариант</a>
        @endif
        @if ($data['locale'] == 'en')
          <h1 class="page__title">Добавление на английском</h1>
          <a class="page__link" href="/{{ request()->path() }}?locale=ru">Добавить русский вариант</a>
        @endif
      @endif
      <a class="page__link" data-action="submit">{{ $data['partner'] ? 'Редактировать' : 'Сохранить' }}</a>
    </div>

    <form class="form-dash" @if ($data['partner']) action="{{ route('partners.post', ['action' => 'update']) }}" @else action="{{ route('partners.post', ['action' => 'store']) }}" @endif method="post" enctype="multipart/form-data">
      @csrf
      @if ($data['partner'])
        <input type="hidden" name="id" value="{{ $data['partner']->id }}">
        <img style="justify-self: center; object-fit: contain;" src="{{ asset('files/partners/img/' . $data['partner']->logo) }}" width="180" height="64" alt="{{ $data['partner']->title }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
        <img style="justify-self: center; object-fit: contain;" width="180" height="64">
      @endif
      <label class="form-dash__element" style="grid-row-start: 2">
        <span class="form-dash__label">Логотип</span>
        <input class="visually-hidden" name="logo" type="file" accept="image/*">
        <input class="form-dash__field" type="text" placeholder="Выберите файл" value="{{ $data['partner']->logo ?? '' }}" readonly>
      </label>
      <label class="form-dash__element">
        <span class="form-dash__label">Название*</span>
        <input class="form-dash__field" name="title" type="text" placeholder="Таджик эйр" value="{{ $data['partner']->title ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>
      <label class="form-dash__element" style="grid-row-start: 2">
        <span class="form-dash__label">Ссылка</span>
        <input class="form-dash__field" name="url" type="url" placeholder="http://www.tajikairlines.com" value="{{ $data['partner']->url ?? '' }}">
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/partners-show.js') }}"></script>
@endsection
