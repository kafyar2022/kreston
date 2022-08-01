@props(['specialist'])

<figure class="specialist-card">
  <figcaption class="specialist-card__name">{{ $specialist->name }}</figcaption>

  <img class="specialist-card__img" src="{{ asset('files/specialists/img/' . $specialist->avatar) }}" alt="{{ $specialist->name }}" width="204" heigth="204">
  <p class="specialist-card__position">{{ $specialist->position }}</p>
  @if ($specialist->cv)
    <a class="specialist-card__link button button--view" href="{{ asset('files/specialists/' . $specialist->cv) }}" target="_blank">
      <svg width="23" height="16">
        <use xlink:href="#view-icon"></use>
      </svg>
      @lang('Резюме')
    </a>
  @endif
</figure>
