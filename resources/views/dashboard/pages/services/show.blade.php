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
        <a href="{{ route('dashboard.services') }}">Услуги</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['service'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['service'])
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
      <a class="page__link" data-action="submit">{{ $data['service'] ? 'Редактировать' : 'Сохранить' }}</a>
    </div>

    <form class="form-dash" @if ($data['service']) action="{{ route('services.post', ['action' => 'update']) }}" @else action="{{ route('services.post', ['action' => 'store']) }}" @endif method="post" enctype="multipart/form-data">
      @csrf
      @if ($data['service'])
        <input type="hidden" name="id" value="{{ $data['service']->id }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
      @endif
      <label class="form-dash__element" style="grid-column: span 2;">
        <span class="form-dash__label">Заголовок*</span>
        <input class="form-dash__field" name="title" type="text" placeholder="{{ $data['locale'] == 'ru' ? 'Аудиторские услуги' : 'Auditing services' }}" value="{{ $data['service']->title ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>
      <label class="form-dash__element" style="grid-row: 2/5; grid-column: 1/3;">
        <span class="form-dash__label">Контент</span>
        <textarea class="form-dash__field" name="content" cols="30" rows="10">{{ $data['service']->content ?? '' }}</textarea>
      </label>
      <label class="form-dash__element" style="grid-row-start: 2; grid-column: span 2;">
        <span class="form-dash__label">Декоративный блок</span>
        <textarea class="form-dash__field" name="block" cols="30" rows="10">{{ $data['service']->block ?? '' }}</textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/dashboard-services-show.js') }}" type="module"></script>
@endsection
