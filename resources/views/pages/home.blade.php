@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Kreston AC')
@endsection

@section('content')
  <main class="main page-content">
    <h1 class="visually-hidden">@lang('Kreston AC')</h1>

    <div class="banner glide">
      <div class="banner__track glide__track" data-glide-el="track">
        <ul class="banner__slides glide__slides">
          @foreach ($data['banners'] as $banner)
            <li class="banner__slide glide__slide" style="background-image: url('/files/banners/img/{{ $banner->img }}');">
              <div class="banner__content container">
                <div data-type="banner">{!! $banner->content !!}</div>
              </div>
            </li>
          @endforeach
          @if ($data['banners']->count() == 0)
            <li class="banner__slide glide__slide">
              <div class="banner__content container"></div>
            </li>
          @endif
        </ul>
      </div>

      <div class="banner__arrows glide__arrows container" data-glide-el="controls">
        <button class="banner__arrow banner__arrow--left" data-glide-dir="<">
          <svg width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>
        <button class="banner__arrow banner__arrow--right" data-glide-dir=">">
          <svg width="10" height="16">
            <use xlink:href="#more-icon"></use>
          </svg>
        </button>
      </div>

      <div class="banner__bullets" data-glide-el="controls[nav]">
        @foreach ($data['banners'] as $key => $banner)
          <button class="banner__bullet" data-glide-dir="={{ $key }}"></button>
        @endforeach
      </div>
    </div>

    <div class="main__about-wrap container">
      <div class="main__about-creston about-creston" style="background-image: url('/files/main-about-bg.jpg')">
        <div class="about-creston__content">
          <div class="about-creston__simditor simditor" data-content="main-about-{{ $locale }}">{!! $data['contents']['main-about-' . $locale] !!}</div>
        </div>
      </div>

      <div class="main__our-experience our-experience">
        <div class="our-experience__content">
          <div class="our-experience__simditor" data-content="main-our-experience-{{ $locale }}">{!! $data['contents']['main-our-experience-' . $locale] !!}</div>
        </div>
      </div>
    </div>

    <section class="main__company-in-numbers company-in-numbers container">
      <h2 class="company-in-numbers__title">Компания в цифрах</h2>
      <p class="company-in-numbers__subtitle">Предоставление профессиональных аудиторских услуг на высоком уровне с учетом
        потребностей рынка и ориентацией на нужды и предпочтения клиентов.</p>

      <ul class="company-in-numbers__list">
        <li class="company-in-numbers__item">
          <span class="company-in-numbers__icon"></span>
          <b class="company-in-numbers__term">1 971</b>
          <span class="company-in-numbers__description">Год
            основания</span>
        </li>
        <li class="company-in-numbers__item">
          <span class="company-in-numbers__icon"></span>
          <b class="company-in-numbers__term">25 000+</b>
          <span class="company-in-numbers__description">Сотрудников
            по всему миру</span>
        </li>
        <li class="company-in-numbers__item">
          <span class="company-in-numbers__icon"></span>
          <b class="company-in-numbers__term">700+</b>
          <span class="company-in-numbers__description">Офисов
            обслуживания</span>
        </li>
        <li class="company-in-numbers__item">
          <span class="company-in-numbers__icon"></span>
          <b class="company-in-numbers__term">125+</b>
          <span class="company-in-numbers__description">Стран
            присутствия</span>
        </li>
        <li class="company-in-numbers__item">
          <span class="company-in-numbers__icon"></span>
          <b class="company-in-numbers__term">12-я</b>
          <span class="company-in-numbers__description">Крупнейшая глобальная
            бухгалтерская сеть</span>
        </li>
        <li class="company-in-numbers__item">
          <span class="company-in-numbers__icon"></span>
          <b class="company-in-numbers__term">$2,3 млрд+</b>
          <span class="company-in-numbers__description">Доходов
            за 2021 год</span>
        </li>
      </ul>
    </section>

    <section class="main__advantage-provide advantage-provide">
      <div class="advantage-provide__container container">
        <span class="advantage-provide__img"></span>
        <div class="advantage-provide__inner">
          <h2 class="advantage-provide__title">Преимущества которые мы
            предоставляем:</h2>

          <p class="advantage-provide__text">Уникальность и надежность
            Индивидуальный подход
            Качество
            Местные знания и мировой опыт
            Персональное обслуживание
            Лояльность клиентов
            Набор дополнительных услуг</p>
          <a class="advantage-provide__link" href="#">Подробнее</a>
        </div>
      </div>
    </section>

    <section class="main__our-partners our-partners container">
      <h2 class="our-partners__title">Нам доверяют</h2>
      <p class="our-partners__subtitle">Множество компаний со всего Таджикистана и за ее пределами
        являются нашими клиентами на протяжении многих лет.</p>

      <ul class="our-partners__partners-list partners-list">
        <li class="partners-list__item">
          <a class="partners-list__link" href="#">
            <img class="partners-list__img" src="{{ asset('files/partners/img/tajik-air.png') }}" width="180" height="64" alt="Tajik Air">
          </a>
        </li>
        <li class="partners-list__item">
          <a class="partners-list__link" href="#">
            <img class="partners-list__img" src="{{ asset('files/partners/img/tajik-air.png') }}" width="180" height="64" alt="Tajik Air">
          </a>
        </li>
        <li class="partners-list__item">
          <a class="partners-list__link" href="#">
            <img class="partners-list__img" src="{{ asset('files/partners/img/tajik-air.png') }}" width="180" height="64" alt="Tajik Air">
          </a>
        </li>
        <li class="partners-list__item">
          <a class="partners-list__link" href="#">
            <img class="partners-list__img" src="{{ asset('files/partners/img/tajik-air.png') }}" width="180" height="64" alt="Tajik Air">
          </a>
        </li>
        <li class="partners-list__item">
          <a class="partners-list__link" href="#">
            <img class="partners-list__img" src="{{ asset('files/partners/img/tajik-air.png') }}" width="180" height="64" alt="Tajik Air">
          </a>
        </li>
      </ul>
    </section>

    <section class="main__last-news last-news container">
      <h2 class="last-news__title">Наши новости</h2>
      <p class="last-news__subtitle">Актуальные новости касающиеся
        нашей деятельности <a class="last-news__button button" href="#">Все новости</a></p>

      <ul class="last-news__news-list news-list">
        <li class="news-list__item">
          <h3 class="news-list__title">Kreston’s Global Mobility Network Grows</h3>

          <time class="news-list__datetime" datetime="27-12-2021 00:00">27.12.2021</time>
          <img class="news-list__img" src="{{ asset('files/news/img/news.jpg') }}" width="100%" height="220" alt="Kreston’s Global Mobility Network Grows">
          <p class="news-list__description">KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам. Фирма была основана с целью повышения прибыльности малого и среднего бизнеса в Таджикистане при минимизации затрат на соблюдение требований и налогообложения. KRESTON AC сочетает в себе глубокий практический опыт в области налогообложения, бизнеса, финансов и права в Таджикистане с поддержкой одной из крупнейших в мире бухгалтерских сетей – Kreston International, чтобы помочь клиентам воспользоваться возможностями, которые приумножают их доход.</p>

          <a class="news-list__link" href="#">Подробнее</a>
        </li>
        <li class="news-list__item">
          <h3 class="news-list__title">Kreston’s Global Mobility Network Grows</h3>

          <time class="news-list__datetime" datetime="27-12-2021 00:00">27.12.2021</time>
          <img class="news-list__img" src="{{ asset('files/news/img/news.jpg') }}" width="100%" height="220" alt="Kreston’s Global Mobility Network Grows">
          <p class="news-list__description">KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам. Фирма была основана с целью повышения прибыльности малого и среднего бизнеса в Таджикистане при минимизации затрат на соблюдение требований и налогообложения. KRESTON AC сочетает в себе глубокий практический опыт в области налогообложения, бизнеса, финансов и права в Таджикистане с поддержкой одной из крупнейших в мире бухгалтерских сетей – Kreston International, чтобы помочь клиентам воспользоваться возможностями, которые приумножают их доход.</p>

          <a class="news-list__link" href="#">Подробнее</a>
        </li>
        <li class="news-list__item">
          <h3 class="news-list__title">Kreston’s Global Mobility Network Grows</h3>

          <time class="news-list__datetime" datetime="27-12-2021 00:00">27.12.2021</time>
          <img class="news-list__img" src="{{ asset('files/news/img/news.jpg') }}" width="100%" height="220" alt="Kreston’s Global Mobility Network Grows">
          <p class="news-list__description">KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам. Фирма была основана с целью повышения прибыльности малого и среднего бизнеса в Таджикистане при минимизации затрат на соблюдение требований и налогообложения. KRESTON AC сочетает в себе глубокий практический опыт в области налогообложения, бизнеса, финансов и права в Таджикистане с поддержкой одной из крупнейших в мире бухгалтерских сетей – Kreston International, чтобы помочь клиентам воспользоваться возможностями, которые приумножают их доход.</p>

          <a class="news-list__link" href="#">Подробнее</a>
        </li>
        <li class="news-list__item">
          <h3 class="news-list__title">Kreston’s Global Mobility Network Grows</h3>

          <time class="news-list__datetime" datetime="27-12-2021 00:00">27.12.2021</time>
          <img class="news-list__img" src="{{ asset('files/news/img/news.jpg') }}" width="100%" height="220" alt="Kreston’s Global Mobility Network Grows">
          <p class="news-list__description">KRESTON AC LLC — это профессиональная компания с полным спектром услуг, которая стремится предоставлять выдающиеся налоговые, финансовые, деловые и юридические консультационные услуги государственным и частным компаниям, иностранным дочерним компаниям, семейным предприятиям и частным лицам. Фирма была основана с целью повышения прибыльности малого и среднего бизнеса в Таджикистане при минимизации затрат на соблюдение требований и налогообложения. KRESTON AC сочетает в себе глубокий практический опыт в области налогообложения, бизнеса, финансов и права в Таджикистане с поддержкой одной из крупнейших в мире бухгалтерских сетей – Kreston International, чтобы помочь клиентам воспользоваться возможностями, которые приумножают их доход.</p>

          <a class="news-list__link" href="#">Подробнее</a>
        </li>
      </ul>
    </section>

    <section class="main__feedback feedback container">
      <form class="feedback__form feedback-form">
        <h2 class="feedback-form__title">@lang('Получите бесплатную <br> консультацию')</h2>

        <label class="feedback-form__label">
          <span class="visually-hidden">@lang('Ваше имя')</span>
          <input class="feedback-form__field" type="text" name="name" placeholder="@lang('Неопознанный Енот')" required>
        </label>
        <label class="feedback-form__label">
          <span class="visually-hidden">@lang('Номер телефона')</span>
          <input class="feedback-form__field" type="tel" name="tel" placeholder="+992 987-65-43-21" required>
        </label>
        <label class="feedback-form__label">
          <span class="visually-hidden">@lang('Электронная почта')</span>
          <input class="feedback-form__field" type="email" name="email" placeholder="example@gmail.com" required>
        </label>

        <div class="feedback-form__footer">
          <p class="feedback-form__aware">@lang('Нажимая «Отправить», вы соглашаетесь предоставить Вашу информацию Kreston AC на обработку.')</p>
          <button class="feedback-form__button button">@lang('Отправить')</button>
        </div>
      </form>
    </section>
  </main>
@endsection

@section('script')
  <script>
    new Glide('.banner', {
      type: 'carousel',
      startAt: 0,
      perView: 1,
      gap: 0,
    }).mount()
  </script>
@endsection
