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
        <a href="{{ route('dashboard.vacancies') }}">Вакансии</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['vacancy'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['vacancy'])
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
      <a class="page__link" data-action="submit">{{ $data['vacancy'] ? 'Редактировать' : 'Сохранить' }}</a>
    </div>

    <form class="form-dash" @if ($data['vacancy']) action="{{ route('vacancies.post', ['action' => 'update']) }}" @else action="{{ route('vacancies.post', ['action' => 'store']) }}" @endif method="post" enctype="multipart/form-data">
      @csrf
      @if ($data['vacancy'])
        <input type="hidden" name="id" value="{{ $data['vacancy']->id }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
      @endif
      <label class="form-dash__element" style="grid-column: span 2;">
        <span class="form-dash__label">Заголовок*</span>
        <input class="form-dash__field" name="title" type="text" placeholder="{{ $data['locale'] == 'ru' ? 'Менеджер по развитию бизнеса' : 'Business Development Manager' }}" value="{{ $data['vacancy']->title ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>
      <label class="form-dash__element" style="grid-row: 2/5; grid-column: span 3;">
        <span class="form-dash__label">Контент</span>
        <textarea class="form-dash__field" name="content" cols="30" rows="10">{{ $data['vacancy']->content ?? '' }}</textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/dashboard-vacancies-show.js') }}"></script>
@endsection
