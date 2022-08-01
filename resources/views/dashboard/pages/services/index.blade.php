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
      <li class="page__breadcrumb page__breadcrumb--current">Услуги</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Услуги на русском</h1>
        <a class="page__link" href="{{ route($route) }}?locale=en">Посмотреть услуги на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Услуги на английском</h1>
        <a class="page__link" href="{{ route($route) }}">Посмотреть услуги на русском</a>
      @endif
      <a class="page__link" href="{{ route('dashboard.services', ['action' => 'create']) }}">Добавить услугу</a>
    </div>

    @if (count($data['services']) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Заголовок</th>
            <th>Контент</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data['services'] as $key => $service)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content;">{{ $service->title }}</div>
              </td>
              <td>
                <div>{{ $service->content }}</div>
              </td>
              <td>
                <a href="{{ route('dashboard.services', ['action' => 'edit', 'service' => $service->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $service->id }}">Удалить</a>
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
  <script src="{{ asset('js/pages/dashboard-services.js') }}" type="module"></script>
@endsection
