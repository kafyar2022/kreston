@extends('dashboard.layouts.master')

@section('content')
  <main class="page__content">
    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main', $locale) }}">Главная</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb">
        <a href="{{ route('banners', 'ru') }}">Баннеры</a>
        <svg width="10" height="16">
          <use xlink:href="#more-icon"></use>
        </svg>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">Добавление</li>
    </ul>

    <div class="banner__slide glide__slide">
      <div class="banner__content container">
        <div data-type="banner"></div>
      </div>
    </div>

    <form class="form" action="{{ route('banners.store', $locale) }}" method="post" enctype="multipart/form-data">
      @csrf
      <fieldset class="form__element">
        <legend class="form__label">Фон</legend>
        <input class="form__photo-input visually-hidden" type="file" id="photo" name="photo" accept="image/*">
        <label class="form__file-label" for="photo">Загрузить фон...</label>
      </fieldset>

      <fieldset class="form__element form__element--wide form__element--news-rutext">
        <legend class="form__label">Описание на русском</legend>
        <textarea id="editor" class="simditor-textarea" name="ru-text" placeholder="Новость на русском языке"></textarea>
      </fieldset>

      <fieldset class="form__element form__element--submit">
        <button class="form__submit" type="submit">Сохранить</button> или <a class="form__reset" href="javascript:window.location.href=window.location.href">очистить</a>
      </fieldset>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/banners-create.js') }}"></script>
@endsection
