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
      <li class="page__breadcrumb page__breadcrumb--current">Парнеры</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Парнеры на русском</h1>
        <a class="page__link" href="{{ route($route) }}?locale=en">Посмотреть парнеров на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Парнеры на английском</h1>
        <a class="page__link" href="{{ route($route) }}">Посмотреть парнеров на русском</a>
      @endif
      <a class="page__link" href="{{ route('partners', ['action' => 'create']) }}">Добавить нового партнера</a>
    </div>

    @if (count($data['partners']) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Название</th>
            <th>Логотип</th>
            <th>Ссылка</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data['partners'] as $key => $partner)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div>{{ $partner->title }}</div>
              </td>
              <td>
                <div>{{ $partner->logo }}</div>
              </td>
              <td>
                <div>{{ $partner->url }}</div>
              </td>
              <td>
                <a href="{{ route('partners', ['action' => 'edit', 'partner' => $partner->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $partner->id }}">Удалить</a>
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
  <script src="{{ asset('js/pages/partners.js') }}" type="module"></script>
@endsection
