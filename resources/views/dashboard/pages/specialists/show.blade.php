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
        <a href="{{ route('dashboard.specialists') }}">Специалисты</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['specialist'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['specialist'])
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
      <a class="page__link" data-action="submit">{{ $data['specialist'] ? 'Редактировать' : 'Сохранить' }}</a>
    </div>

    <form class="form-dash" @if ($data['specialist']) action="{{ route('specialists.post', ['action' => 'update']) }}" @else action="{{ route('specialists.post', ['action' => 'store']) }}" @endif method="post" enctype="multipart/form-data">
      @csrf
      @if ($data['specialist'])
        <input type="hidden" name="id" value="{{ $data['specialist']->id }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: contain;" src="{{ asset('files/specialists/img/' . $data['specialist']->avatar) }}" width="240" height="224" alt="{{ $data['specialist']->name }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: contain;" width="240" height="224">
      @endif
      <label class="form-dash__element" style="grid-row-start: 4">
        <span class="form-dash__label">Аватар</span>
        <input class="visually-hidden" name="avatar" type="file" accept="image/*">
        <input class="form-dash__field" type="text" placeholder="{{ $data['specialist'] && $data['specialist']->avatar ? $data['specialist']->avatar : 'Выберите файл' }}" value="{{ $data['specialist']->avatar ?? '' }}" readonly>
      </label>
      <label class="form-dash__element" style="grid-column-start: 1;">
        <span class="form-dash__label">Резюме</span>
        <input class="visually-hidden" name="cv" type="file" accept="application/*">
        <input class="form-dash__field" type="text" placeholder="{{ $data['specialist'] && $data['specialist']->cv ? $data['specialist']->cv : 'Выберите файл' }}" value="{{ $data['specialist']->cv ?? '' }}" readonly>
      </label>
      <label class="form-dash__element" style="grid-column-start: 1;">
        <span class="form-dash__label">Ф.И.О</span>
        <input class="form-dash__field" name="name" type="text" placeholder="{{ $data['locale'] == 'ru' ? 'Шеров Диловар' : 'Sherof Dilovar' }}" value="{{ $data['specialist']->name ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>
      <label class="form-dash__element" style="grid-column-start: 1;">
        <span class="form-dash__label">Позиция</span>
        <input class="form-dash__field" name="position" type="text" placeholder="{{ $data['locale'] == 'ru' ? 'Партнер по качеству' : 'Quality partner' }}" value="{{ $data['specialist']->position ?? '' }}">
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/dashboard-specialists-show.js') }}"></script>
@endsection
