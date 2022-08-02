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
      <li class="page__breadcrumb page__breadcrumb--current">Вакансии</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Вакансии на русском</h1>
        <a class="page__link" href="{{ route($route) }}?locale=en">Посмотреть вакансии на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Вакансии на английском</h1>
        <a class="page__link" href="{{ route($route) }}">Посмотреть вакансии на русском</a>
      @endif
      <a class="page__link" href="{{ route('dashboard.vacancies', ['action' => 'create']) }}">Добавить вакансию</a>
    </div>

    @if (count($data['vacancies']) != 0)
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
          @foreach ($data['vacancies'] as $key => $vacancy)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content;">{{ $vacancy->title }}</div>
              </td>
              <td>
                <div>{{ $vacancy->content }}</div>
              </td>
              <td>
                <a href="{{ route('dashboard.vacancies', ['action' => 'edit', 'vacancy' => $vacancy->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $vacancy->id }}">Удалить</a>
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
  <script src="{{ asset('js/pages/dashboard-vacancies.js') }}" type="module"></script>
@endsection
