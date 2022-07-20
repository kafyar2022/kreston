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
      <li class="page__breadcrumb page__breadcrumb--current">Баннеры</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Баннеры на русском</h1>
        <a class="page__link" href="{{ route($route, 'en') }}">Посмотреть баннеры на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Баннеры на английском</h1>
        <a class="page__link" href="{{ route($route, 'ru') }}">Посмотреть баннеры на русском</a>
      @endif
      <a class="page__link" href="{{ route('banners.create', 'ru') }}">Добавить новый баннер</a>
    </div>

    @if (count($data['banners']) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Контент</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data['banners'] as $key => $banner)
            @if ($banner->locale == 'ru')
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                  <div>{{ $banner->content }}</div>
                </td>
                <td>
                  <a href="#">Редактировать</a>
                </td>
                <td>
                  <a href="#">Удалить</a>
                </td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    @else
    <p>Нет данных</p>
    @endif

  </main>
@endsection
