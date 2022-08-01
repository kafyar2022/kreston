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
      <li class="page__breadcrumb page__breadcrumb--current">Сертификаты</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Сертификаты на русском</h1>
        <a class="page__link" href="{{ route($route) }}?locale=en">Посмотреть сертификаты на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Сертификаты на английском</h1>
        <a class="page__link" href="{{ route($route) }}">Посмотреть сертификаты на русском</a>
      @endif
      <a class="page__link" href="{{ route('dashboard.certificates', ['action' => 'create']) }}">Добавить новый сертификат</a>
    </div>

    @if (count($data['certificates']) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Заголовок</th>
            <th>Описание</th>
            <th>Фото</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data['certificates'] as $key => $certificate)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content;">{{ $certificate->title }}</div>
              </td>
              <td>
                <div>{{ $certificate->description }}</div>
              </td>
              <td>
                <div>{{ $certificate->img }}</div>
              </td>
              <td>
                <a href="{{ route('dashboard.certificates', ['action' => 'edit', 'certificate' => $certificate->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $certificate->id }}">Удалить</a>
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
  <script src="{{ asset('js/pages/dashboard-certificates.js') }}" type="module"></script>
@endsection
