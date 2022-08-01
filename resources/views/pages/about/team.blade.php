@extends('layouts.master')

@section('title')
  @lang('Наша команда') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="team-page">
    <div class="team-page__container container">
      <div class="team-page__content">
        <div class="content" data-content="team-page-content-{{ $locale }}">{!! $data['team-page-content-' . $locale] !!}</div>
      </div>

      <section class="team-page__target" style="background-image: linear-gradient( rgba(24, 156, 216, 0.8), rgba(24, 156, 216, 0.8)), url('/files/team-page-target-bg.jpg')">
        <div class="team-page__target-content">
          <div class="content" data-content="team-page-target-{{ $locale }}">{!! $data['team-page-target-' . $locale] !!}</div>
        </div>
      </section>
    </div>

    <section class="team-page__specialists">
      <div class="container">
        <div class="team-page__specialists-content">
          <div class="content" data-content="team-page-specialists-{{ $locale }}">{!! $data['team-page-specialists-' . $locale] !!}</div>
        </div>

        <ul class="team-page__specialist-list">
          @foreach ($data['specialists'] as $specialist)
            <li class="team-page__specialist-item">
              <x-specialist-card :specialist="$specialist" />
            </li>
          @endforeach
        </ul>
      </div>
    </section>

    <section class="meta-section">
      <div class="container">
        <div class="meta-section__content">
          <div class="content" data-content="team-page-meta-{{ $locale }}">{!! $data['team-page-meta-' . $locale] !!}</div>
        </div>
      </div>
    </section>
  </main>
@endsection
