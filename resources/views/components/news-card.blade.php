@props(['news'])

<article class="news-card">
  <h3 class="news-card__title">{{ $news->title }}</h3>

  <time class="news-card__datetime" datetime="{{ $news->created_at }}">{{ date_format($news->created_at,'d.m.Y') }}</time>
  <img class="news-card__img" src="{{ asset('files/news/img/thumbs/' . $news->img) }}" width="270" height="220" alt="{{ $news->title }}">
  <div class="news-card__description">{!! $news->content !!}</div>

  <a class="button button--more news-card__link" href="{{ route('news.show', ['locale' => $locale, 'slug' => $news->slug]) }}">Подробнее</a>
</article>
