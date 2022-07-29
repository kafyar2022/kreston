@props(['locale', 'data'])

<section class="company-in-numbers container">
  <div class="company-in-numbers__content">
    <div class="content" data-content="company-in-numbers-{{ $locale }}">{!! $data['company-in-numbers-' . $locale] !!}</div>
  </div>

  <ul class="value-list">
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-1.svg');"></span>
      <p class="value-list__term" data-text="company-in-numbers-term-1-{{ $locale }}">{{ $data['company-in-numbers-term-1-' . $locale] }}</p>
      <p class="value-list__description" data-text="company-in-numbers-desc-1-{{ $locale }}">{{ $data['company-in-numbers-desc-1-' . $locale] }}</p>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-2.svg');"></span>
      <p class="value-list__term" data-text="company-in-numbers-term-2-{{ $locale }}">{{ $data['company-in-numbers-term-2-' . $locale] }}</p>
      <p class="value-list__description" data-text="company-in-numbers-desc-2-{{ $locale }}">{{ $data['company-in-numbers-desc-2-' . $locale] }}</p>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-3.svg');"></span>
      <p class="value-list__term" data-text="company-in-numbers-term-3-{{ $locale }}">{{ $data['company-in-numbers-term-3-' . $locale] }}</p>
      <p class="value-list__description" data-text="company-in-numbers-desc-3-{{ $locale }}">{{ $data['company-in-numbers-desc-3-' . $locale] }}</p>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-4.svg');"></span>
      <p class="value-list__term" data-text="company-in-numbers-term-4-{{ $locale }}">{{ $data['company-in-numbers-term-4-' . $locale] }}</p>
      <p class="value-list__description" data-text="company-in-numbers-desc-4-{{ $locale }}">{{ $data['company-in-numbers-desc-4-' . $locale] }}</p>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-5.svg');"></span>
      <p class="value-list__term" data-text="company-in-numbers-term-5-{{ $locale }}">{{ $data['company-in-numbers-term-5-' . $locale] }}</p>
      <p class="value-list__description" data-text="company-in-numbers-desc-5-{{ $locale }}">{{ $data['company-in-numbers-desc-5-' . $locale] }}</p>
    </li>
    <li class="value-list__item">
      <span class="value-list__icon" style="background-image: url('/files/values/value-6.svg');"></span>
      <p class="value-list__term" data-text="company-in-numbers-term-6-{{ $locale }}">{{ $data['company-in-numbers-term-6-' . $locale] }}</p>
      <p class="value-list__description" data-text="company-in-numbers-desc-6-{{ $locale }}">{{ $data['company-in-numbers-desc-6-' . $locale] }}</p>
    </li>
  </ul>
</section>
