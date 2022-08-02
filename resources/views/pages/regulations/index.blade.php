@extends('layouts.master')

@section('title')
  @lang('Нормативные документы') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="regulations-page container">
    <div class="regulations-page__content">
      <div class="content" data-content="regulations-page-content-{{ $locale }}">{!! $data['regulations-page-content-' . $locale] !!}</div>
    </div>

    <ul class="accordion-menu">
      @foreach ($data['regulation_categories'] as $category)
        <li class="accordion-menu__item">
          <button class="accordion-menu__dropdown-button">
            {{ $category->title }}
            <svg class="accordion-menu__dropdown-icon" width="10" height="16">
              <use xlink:href="#more-icon"></use>
            </svg>
          </button>

          <ul class="accordion-menu__list">
            @foreach ($category->regulations as $regulation)
              <li class="accordion-menu__list-item">
                <a class="regulation-page__regulation" href="{{ asset('files/regulations/' . $regulation->filename) }}" target="_blank">
                  <svg class="regulation-page__regulation-icon" width="20" height="20">
                    <use xlink:href="#word-icon"></use>
                  </svg>
                  <p class="regulation-page__regulation-title">
                    {{ $regulation->title }}
                    <small class="regulation-page__redulation-info">
                      <span class="regulation-page__redulation-extension">{{ pathinfo(public_path('files/regulations/' . $regulation->filename), PATHINFO_EXTENSION) }}</span>,
                      <span class="regulation-page__redulation-size">{{ round(filesize(public_path('files/regulations/' . $regulation->filename)) / 1024)}} kb</span>
                    </small>
                  </p>
                </a>
              </li>
            @endforeach
          </ul>
        </li>
      @endforeach
    </ul>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/regulations.js') }}" type="module"></script>
@endsection
