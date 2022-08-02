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
      <li class="page__breadcrumb page__breadcrumb--current">Нормативные документы</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px;">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Документы на русском</h1>
        <a class="page__link" href="{{ route($route) }}?locale=en">Посмотреть документы на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Документы на английском</h1>
        <a class="page__link" href="{{ route($route) }}">Посмотреть документы на русском</a>
      @endif
    </div>

    <input type="hidden" name="locale" value="{{ $data['locale'] }}">

    @if (count($data['regulation_categories']) != 0)
      <ul class="regulation-list accordion-menu">
        @foreach ($data['regulation_categories'] as $key => $category)
          <li class="regulation-list__item">
            <div class="regulation-list__item-inner accordion-menu__dropdown-button">
              <span class="regulation-list__count">{{ $key + 1 }}</span>
              <span class="regulation-list__title">{{ $category->title }}</span>
              <button class="regulation-list__action regulation-list__action--edit" type="button" data-action="edit-category" data-category="{{ $category->id }}">Редактировать</button>
              <button class="regulation-list__action regulation-list__action--delete" type="button" data-action="delete-category" data-category="{{ $category->id }}">Удалить</button>
            </div>

            <ul class="regulation-list__extra-list">
              @foreach ($category->regulations as $key => $regulation)
                <li class="regulation-list__extra-item">
                  <span class="regulation-list__count">{{ $key + 1 }}</span>
                  <span class="regulation-list__title">{{ $regulation->title }}</span>
                  <button class="regulation-list__action regulation-list__action--edit" type="button" data-action="edit" data-regulation="{{ $category->id }}">Редактировать</button>
                  <button class="regulation-list__action regulation-list__action--delete" type="button" data-action="delete" data-regulation="{{ $category->id }}">Удалить</button>
                </li>
              @endforeach
              <li class="regulation-list__extra-item">
                <button class="regulation-list__action regulation-list__action--add">Добавить документ</button>
              </li>
            </ul>
          </li>
        @endforeach
        <li class="regulation-list__item">
          <div class="regulation-list__item-inner">
            <button class="regulation-list__action regulation-list__action--add" data-action="add-category">Добавить категорию</button>
          </div>
        </li>
      </ul>
    @else
      <p>Нет данных</p>
    @endif
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/dashboard-regulations.js') }}" type="module"></script>
  <script src="{{ asset('js/pages/regulations.js') }}" type="module"></script>
@endsection
