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
        <a href="{{ route('dashboard.certificates') }}">Сертификаты</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['certificate'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['certificate'])
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
      <a class="page__link" data-action="submit">{{ $data['certificate'] ? 'Редактировать' : 'Сохранить' }}</a>
    </div>

    <form class="form-dash" @if ($data['certificate']) action="{{ route('certificates.post', ['action' => 'update']) }}" @else action="{{ route('certificates.post', ['action' => 'store']) }}" @endif method="post" enctype="multipart/form-data">
      @csrf
      @if ($data['certificate'])
        <input type="hidden" name="id" value="{{ $data['certificate']->id }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: contain;" src="{{ asset('files/certificates/img/' . $data['certificate']->img) }}" width="240" height="224" alt="{{ $data['certificate']->title }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: contain;" width="240" height="224">
      @endif
      <label class="form-dash__element" style="grid-row-start: 4">
        <span class="form-dash__label">Фото</span>
        <input class="visually-hidden" name="img" type="file" accept="image/*">
        <input class="form-dash__field" type="text" placeholder="{{ $data['certificate'] && $data['certificate']->img ? $data['certificate']->img : 'Выберите файл' }}" value="{{ $data['certificate']->img ?? '' }}" readonly>
      </label>
      <label class="form-dash__element" style="grid-row-start: 4; grid-column: span 2;">
        <span class="form-dash__label">Заголовок*</span>
        <input class="form-dash__field" name="title" type="text" placeholder="{{ $data['locale'] == 'ru' ? 'Сертификат регистрации № 0265444' : 'Registration Certificate No. 0265444' }}" value="{{ $data['certificate']->title ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>
      <label class="form-dash__element" style="grid-row: 5/8; grid-column: 1/4;">
        <span class="form-dash__label">Описание</span>
        <textarea class="form-dash__field" name="description" cols="30" rows="10">{{ $data['certificate']->description ?? '' }}</textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/dashboard-certificates-show.js') }}"></script>
@endsection
