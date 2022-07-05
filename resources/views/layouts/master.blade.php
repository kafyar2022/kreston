<!DOCTYPE html>
<html class="page" lang="{{ $locale }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ mix('css/style.css') }}">

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicon/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicon/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">
</head>

<body class="page__body">
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  <script type="module">
    const localeToggleEl = document.querySelector('.locale-list__item--current');
    const localesEl = document.querySelector('.locale-list');

    const showLocales = () => {
      localesEl.classList.remove('locale-list--hidden');
      localesEl.classList.add('locale-list--shown');
      document.addEventListener('keydown', documentEscapeKeydownHandler)
      document.addEventListener('click', documentClickHandler)
    };

    const hideLocales = () => {
      localesEl.classList.add('locale-list--hidden');
      localesEl.classList.remove('locale-list--shown');
      document.removeEventListener('keydown', documentEscapeKeydownHandler);
      document.removeEventListener('click', documentClickHandler);
    };

    function documentEscapeKeydownHandler(evt) {
      if (evt.keyCode === 27) {
        hideLocales();
      }
    }

    function documentClickHandler(evt) {
      if (!evt.target.closest('.locale-list')) {
        hideLocales();
      }
    }

    localeToggleEl.addEventListener('click', () => {
      if (localesEl.classList.contains('locale-list--hidden')) {
        showLocales();
        return;
      }
      hideLocales();
    });
  </script>
  @yield('script')
</body>

</html>
