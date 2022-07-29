@extends('layouts.master')

@section('title')
  @lang('Контакты') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="contacts-page container">
    <div class="contacts-page__content">
      <div class="content" data-content="contacts-page-content-{{ $locale }}">{!! $data['contacts-page-content-' . $locale] !!}</div>
    </div>

    <div class="contacts-page__details">
      <dl class="contacts-page__company-details company-details">
        <div class="company-details__item">
          <dt class="company-details__term" data-text="details-phone-term-{{ $locale }}">{{ $data['details-phone-term-' . $locale] }}</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="18" height="18">
              <use xlink:href="#phone"></use>
            </svg>
            <a class="company-details__link" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $data['details-phone-desc-' . $locale]) }}" data-text="details-phone-desc-{{ $locale }}">{{ $data['details-phone-desc-' . $locale] }}</a>
          </dd>
        </div>
        <div class="company-details__item">
          <dt class="company-details__term" data-text="details-email-term-{{ $locale }}">{{ $data['details-email-term-' . $locale] }}</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="21" height="18">
              <use xlink:href="#email"></use>
            </svg>
            <a class="company-details__link" href="mailto:{{ $data['details-email-desc-' . $locale] }}" data-text="details-email-desc-{{ $locale }}">{{ $data['details-email-desc-' . $locale] }}</a>
          </dd>
        </div>
        <div class="company-details__item">
          <dt class="company-details__term" data-text="details-address-term-{{ $locale }}">{{ $data['details-address-term-' . $locale] }}</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="16" height="20">
              <use xlink:href="#address"></use>
            </svg>
            <a class="company-details__link" href="http://maps.google.com/?q={{ str_replace(' ', '+', $data['details-address-desc-' . $locale]) }}" target="_blank" data-text="details-address-desc-{{ $locale }}">{{ $data['details-address-desc-' . $locale] }}</a>
          </dd>
        </div>
        <div class="company-details__item">
          <dt class="company-details__term" data-text="details-worktime-term-{{ $locale }}">{{ $data['details-worktime-term-' . $locale] }}</dt>
          <dd class="company-details__description">
            <svg class="company-details__icon" width="20" height="20">
              <use xlink:href="#time"></use>
            </svg>
            <a class="company-details__link" data-text="details-worktime-desc-{{ $locale }}">{{ $data['details-worktime-desc-' . $locale] }}</a>
          </dd>
        </div>
      </dl>

      <div class="contacts-page__map" id="map"></div>
    </div>

    <footer class="contacts-page__footer">
      <div class="content" data-content="contacts-page-footer-{{ $locale }}">{!! $data['contacts-page-footer-' . $locale] !!}</div>
    </footer>
  </main>
@endsection
