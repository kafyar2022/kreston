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
        <a href="{{ route('dashboard.news') }}">Новости Kreston</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['news'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['news'])
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
      <a class="page__link" data-action="submit">{{ $data['news'] ? 'Редактировать' : 'Сохранить' }}</a>
    </div>

    <form class="form-dash" @if ($data['news']) action="{{ route('news.post', ['action' => 'update']) }}" @else action="{{ route('news.post', ['action' => 'store']) }}" @endif method="post" enctype="multipart/form-data">
      @csrf
      @if ($data['news'])
        <input type="hidden" name="id" value="{{ $data['news']->id }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: cover;" src="{{ asset('files/news/img/' . $data['news']->img) }}" width="240" height="224" alt="{{ $data['news']->title }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: cover;" width="240" height="224">
      @endif
      <label class="form-dash__element" style="grid-row-start: 4">
        <span class="form-dash__label">Фото</span>
        <input class="visually-hidden" name="img" type="file" accept="image/*">
        <input class="form-dash__field" type="text" placeholder="{{ $data['news'] && $data['news']->img ? $data['news']->img : 'Выберите файл' }}" value="{{ $data['news']->img ?? '' }}" readonly>
      </label>
      <label class="form-dash__element" style="grid-row-start: 4; grid-column: span 2;">
        <span class="form-dash__label">Заголовок*</span>
        <input class="form-dash__field" name="title" type="text" placeholder="{{ $data['locale'] == 'ru' ? 'Как ваш аудитор может помочь с отчетностью ESG?' : 'How can your auditor help with ESG reporting?' }}" value="{{ $data['news']->title ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>
      <label class="form-dash__element" style="grid-row: 5/8; grid-column: 1/4;">
        <span class="form-dash__label">Новость</span>
        <textarea class="form-dash__field" name="content" cols="30" rows="10">{{ $data['news']->content ?? '' }}</textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/dashboard-news-show.js') }}"></script>
@endsection
