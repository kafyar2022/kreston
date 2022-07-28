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
      <li class="page__breadcrumb page__breadcrumb--current">Баннеры</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Баннеры на русском</h1>
        <a class="page__link" href="{{ route($route) }}?locale=en">Посмотреть баннеры на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Баннеры на английском</h1>
        <a class="page__link" href="{{ route($route) }}">Посмотреть баннеры на русском</a>
      @endif
      <a class="page__link" href="{{ route('banners.create') }}">Добавить новый баннер</a>
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
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div>{{ $banner->content }}</div>
              </td>
              <td>
                <a href="{{ route('banners.edit', $banner) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $banner->id }}">Удалить</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <p>Нет данных</p>
    @endif

  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/banners.js') }}" type="module"></script>
@endsection
